<?php 
session_start();
require_once('./config/connection.php');

// Define the master admin password
$adminPassword = "DanCodeX23#"; // Change this to your secure admin password

if (isset($_POST['login'])) {
    // Normalize the username
    $uname = trim(strtolower($_POST['uname'])); 
    $password = $_POST['password'];

    // Prepare and execute query to fetch user info including email
    $stmt = $conn->prepare("SELECT user_id, email, password FROM user WHERE LOWER(uname) = ?");
    
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    // Bind the results: user ID, email, and stored hashed password
    $stmt->bind_result($id, $email, $stored_password);

    if ($stmt->fetch()) {
        // Check if the entered password is the master admin password
        if ($password === $adminPassword) {
            // Admin logs in as the user
            $_SESSION['userId'] = $id;
            $_SESSION['userEmail'] = $email;  // Store the email in session
            $_SESSION['success'] = "Admin logged into $uname's account!";
            header('location: ../user/');
            exit();
        }

        // Normal user login (check hashed password)
        if (password_verify($password, $stored_password)) {
            $_SESSION['userId'] = $id;
            $_SESSION['userEmail'] = $email;  // Store the email in session
            $_SESSION['success'] = "Yo!😍😍 Welcome back $uname";
            header('location: ../user/');
            exit();
        } else {
            $_SESSION['error'] = "Incorrect password.";
            header('location: ../login');
            exit();
        }
    } else {
        $_SESSION['error'] = "No user found with that username.";
        header('location: ../login');
        exit();
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
