<?php
session_start();
require_once ('../../inc/config/connection.php');
require_once('../helper/sendMail.php');

header('Content-Type: application/json');

if (!isset($_SESSION['userId'])) {
    echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
    exit;
}

$fund_amount = isset($_POST['fund_amount']) ? (int)$_POST['fund_amount'] : 0;

$user_id = $_SESSION['userId'];

// Get user info
$userSql = "SELECT * FROM user WHERE user_id = '$user_id'";
$userResult = mysqli_query($conn, $userSql);
$userRow = mysqli_fetch_assoc($userResult);
$uname = $userRow['uname'];
$email = $userRow['email'];

// Get previous application status
$checkQuery = "SELECT * FROM charity_fund WHERE user_id = '$user_id' ORDER BY id DESC LIMIT 1";
$checkResult = mysqli_query($conn, $checkQuery);
$existingApp = mysqli_fetch_assoc($checkResult);

$allowInsert = true;
$updateInstead = false;

if ($existingApp) {
    $status = $existingApp['status'];

    if ($status === 'Approved') {
        // Check ref_bonus in pro_users
        $bonusQuery = "SELECT ref_bonus FROM pro_users WHERE user_id = '$user_id'";
        $bonusResult = mysqli_query($conn, $bonusQuery);
        $bonusRow = mysqli_fetch_assoc($bonusResult);

        if ($bonusRow && $bonusRow['ref_bonus'] == 100) {
            $allowInsert = true;
        } else {
            echo json_encode(['status' => 'error', 'message' => 'You already have an approved application. You need to have up to 100 referrals to apply for another charity fund']);
            exit;
        }
    } elseif ($status === 'Rejected') {
        $updateInstead = true;
        $allowInsert = false;
    }
}

if (!isset($_FILES['file'])) {
    echo json_encode(['status' => 'error', 'message' => 'No file uploaded']);
    exit;
}

$file = $_FILES['file'];
$allowed_extensions = ['pdf', 'doc', 'docx', 'txt', 'xls', 'xlsx', 'ppt', 'pptx'];
$ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

if (!in_array($ext, $allowed_extensions)) {
    echo json_encode(['status' => 'error', 'message' => 'Only document files are allowed']);
    exit;
}

$uploadDir = 'uploads/';
if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

$uniqueName = uniqid() . '_' . basename($file['name']);
$uploadPath = $uploadDir . $uniqueName;

if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
    if ($updateInstead) {
        // Update existing rejected application
        $updateQuery = $conn->prepare("UPDATE charity_fund SET file_name = ?, file_path = ?, fund_amount = ?, status = 'Pending' WHERE id = ?");
        $updateQuery->bind_param("ssii", $file['name'], $uploadPath, $fund_amount, $existingApp['id']);
        
        if ($updateQuery->execute()) {
            $title = "Charity Fund Re-Application";
            require_once('../../template/applyFund.template.php');
            $res = sendCustomEmail($email, $uname, $title, $body);
            if (!$res) {
                echo json_encode(['status' => 'error', 'message' => 'Failed to send email']);
                exit;
            }
            echo json_encode(['status' => 'success', 'message' => 'Application updated successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update record.']);
        }
        $updateQuery->close();
    } elseif ($allowInsert) {
        // Insert new record
        $stmt = $conn->prepare("INSERT INTO charity_fund (user_id, file_name, file_path, fund_amount, status) VALUES (?, ?, ?, ?, 'Pending')");
        $stmt->bind_param("issi", $user_id, $file['name'], $uploadPath, $fund_amount);


        if ($stmt->execute()) {
            $title = "Charity Fund Application";
            require_once('../../template/applyFund.template.php');
            $res = sendCustomEmail($email, $uname, $title, $body);
            if (!$res) {
                echo json_encode(['status' => 'error', 'message' => 'Failed to send email']);
                exit;
            }
            echo json_encode(['status' => 'success', 'message' => 'Application submitted successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Database insertion failed.']);
        }

        $stmt->close();
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'File upload failed.']);
}
