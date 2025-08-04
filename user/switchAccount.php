<?php
session_start();
require_once('./inc/config/connection.php');

if (isset($_GET['user_id'])) {
    $new_user_id = $_GET['user_id'];

    // Validate if the new user ID exists
    $sql = "SELECT * FROM user WHERE user_id = '$new_user_id'";
    $res = mysqli_query($conn, $sql);
    
    if ($row = mysqli_fetch_assoc($res)) {
        // Update the session to switch accounts
        $_SESSION['userId'] = $new_user_id;
        $_SESSION['success'] = "Switched to account: " . $row['uname'];

        // Redirect to user dashboard
        header("Location: ../user/");
        exit();
    } else {
        $_SESSION['error'] = "Account not found.";
        header("Location: ../user/");
        exit();
    }
} else {
    $_SESSION['error'] = "Invalid request.";
    header("Location: ../user/");
    exit();
}
?>
