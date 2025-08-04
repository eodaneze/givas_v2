<?php
require_once ('../../inc/config/connection.php'); 
require_once('../helper/adminUser.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload_proof'])) {
    // Replace with the actual user ID (from session)
    $amount = $_POST['amount'] ?? null;
    $wallet = $_POST['wallet_address'] ?? null;
    $email = $_POST['email'] ?? null;
    if($email){
            // Extract the part before the @
        $namePart = explode('@', $email)[0];
        
        // Remove all numbers from the name part
        $uname = preg_replace('/[0-9]/', '', $namePart);
        
    }

    if (!$email || empty($_FILES['fileInput']['name'])) {
        echo json_encode(['status' => 'error', 'message' => 'Email and proof file are required.']);
        exit;
    }

    // Upload handling
    $targetDir = "./uploads/"; 
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    $fileName = basename($_FILES['fileInput']['name']);
    $targetFilePath = $targetDir . time() . '_' . $fileName;

    if (move_uploaded_file($_FILES["fileInput"]["tmp_name"], $targetFilePath)) {
        $stmt = $conn->prepare("INSERT INTO proplan_direct_payment (amount, wallet_address, email, proof_filename, proof_file_path) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("dssss", $amount, $wallet, $email, $fileName, $targetFilePath);

        if ($stmt->execute()) {
            $userTitle = "Pro Plan Payment";
            $adminTitle = "Pro Plan Payment";
            require_once('../../template/proDirectPayment2.template.php');

            $res = sendCustomEmailAdminUser($email, $adminEmail, $adminFirstName, $userTitle, $adminTitle, $userBody, $adminBody);
            echo json_encode(['status' => 'success', 'message' => 'Proof uploaded successfully!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Database error!']);
        }
        $stmt->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to upload file.']);
    }

    $conn->close();
}
