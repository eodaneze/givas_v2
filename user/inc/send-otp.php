<?php
header('Content-Type: application/json');
session_start();
error_log("Session user_id: " . $_SESSION['userId']);
require_once('../../inc/config/connection.php');
require_once('../helper/sendMail.php');

try {
    // Retrieve the user ID from the request
    $data = json_decode(file_get_contents('php://input'), true);
    $userId = $data['user_id'];

    if (!isset($_SESSION['userId'])) {
        echo json_encode(['success' => false, 'error' => 'Session userId not set']);
        exit();
    }

    // Validate userId
    $stmt = $conn->prepare("SELECT email, uname FROM user WHERE user_id = ?");
    $stmt->bind_param('i', $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if (!$row) {
        echo json_encode(['success' => false, 'error' => 'User not found']);
        exit();
    }

    $email = $row['email'];
    $uname = $row['uname'];

    // Generate a random 5-digit OTP
    $token = random_int(10000, 99999);

    // Save the OTP to the database
    $stmt = $conn->prepare("INSERT INTO token (user_id, code) VALUES (?, ?) ON DUPLICATE KEY UPDATE code = ?");
    $stmt->bind_param('iss', $userId, $token, $token);
    if ($stmt->execute()) {
        $title = "Password Reset Token 🔒";
        require_once('../../template/passwordResetToken.php');

        $res = sendCustomEmail($email, $uname, $title, $body);

        if ($res) {
            echo json_encode(['success' => true, 'message' => 'OTP sent to your email']);
        } else {
            echo json_encode(['success' => false, 'error' => 'Failed to send OTP email']);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'Failed to generate OTP']);
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>
