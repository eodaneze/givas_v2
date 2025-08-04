<?php 
 session_start();
    require_once('../../inc/config/connection.php');
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        // login admin using email and password and save the id in a session

        // Prepare and bind
        $stmt = $conn->prepare("SELECT admin_id, password FROM admin WHERE email = ?");
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }
        $stmt->bind_param("s", $email);

        // Execute statement
        $stmt->execute();

        // Bind result variables
        $stmt->bind_result($id, $stored_password);

        // Fetch value
        if ($stmt->fetch()) {
            // Directly compare passwords
            if ($password === $stored_password) {
                // Start session and save admin id
                session_start();
                $_SESSION['adminId'] = $id;
                $_SESSION['success'] = "You are now logged in.";
                header('location: ../');
            } else {
                $_SESSION['error'] = "Incorrect password.";
                header('location: ../login');
            }
        } else {
            $_SESSION['error'] = "No admin found with that email.";
            header('location: ../login');
            
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
?>
