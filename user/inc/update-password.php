<?php
header('Content-Type: application/json');
session_start();
require_once('../../inc/config/connection.php');
require_once('../helper/sendMail.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $npassword = $_POST['npassword'];
    $cpassword = $_POST['cpassword'];
    $otp = $_POST['otp']; // Get the OTP from the client

    $user_id = $_SESSION['userId'];

    // Fetch the token from the database
    $sql = "SELECT * FROM token WHERE user_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $user_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (empty($npassword) || empty($cpassword)) {
        echo json_encode(['success' => false, 'message' => 'All fields are required']);
        exit;
    }

    if ($npassword !== $cpassword) {
        echo json_encode(['success' => false, 'message' => 'Password mismatch']);
        exit;
    }

    if (!$result || mysqli_num_rows($result) === 0) {
        echo json_encode(['success' => false, 'message' => 'Invalid user ID or OTP']);
        exit;
    }

    $tokenRow = mysqli_fetch_assoc($result);
    $token = $tokenRow['code'];

    if ($otp !== $token) {
        echo json_encode(['success' => false, 'message' => 'Invalid OTP']);
        exit;
    }

    // Hash the new password before updating
    $hashed_password = password_hash($cpassword, PASSWORD_BCRYPT);

    $update = "UPDATE user SET password = ? WHERE user_id = ?";
    $stmt = mysqli_prepare($conn, $update);
    mysqli_stmt_bind_param($stmt, "si", $hashed_password, $user_id);
    $res = mysqli_stmt_execute($stmt);

    if ($res) {
        // Send email notification
        $sql = "SELECT email, uname FROM user WHERE user_id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $user_id);
        mysqli_stmt_execute($stmt);
        $userResult = mysqli_stmt_get_result($stmt);
        $userRow = mysqli_fetch_assoc($userResult);

        $email = $userRow['email'];
        $uname = $userRow['uname'];

        $title = "Password Change 🔒";
        require_once('../../template/updatePassword.template.php');
        sendCustomEmail($email, $uname, $title, $body);

        // Delete the token from the token table
        $deleteSql = "DELETE FROM token WHERE user_id = ?";
        $stmt = mysqli_prepare($conn, $deleteSql);
        mysqli_stmt_bind_param($stmt, "i", $user_id);
        mysqli_stmt_execute($stmt);

        echo json_encode(['success' => true, 'message' => 'Password has been updated successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update password']);
    }
}
?>
