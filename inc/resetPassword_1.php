<?php 
  session_start();
  require_once('./config/connection.php');

  if(isset($_POST['reset_1'])){
       $password = $_POST['password'];
       $cpassword = $_POST['cpassword'];
       $email = $_POST['email'];
       $token = $_POST['token'];

       if(empty($password) || empty($cpassword)){
           $_SESSION['error'] = "All fields are required";
           header('location: ../reset-password?email='.$email.'&token='.$token);
           exit();
       } elseif ($password !== $cpassword) {
           $_SESSION['error'] = "Password must be equal to confirm password";
           header('location: ../reset-password?email='.$email.'&token='.$token);
           exit();
       } else {
           // Hash the password before storing
           $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

           $sql = "UPDATE `user` SET `password` = ? WHERE `email` = ?";
           $stmt = mysqli_prepare($conn, $sql);

           if ($stmt) {
               mysqli_stmt_bind_param($stmt, "ss", $hashedPassword, $email);
               $result = mysqli_stmt_execute($stmt);

               if($result){
                   $_SESSION['success'] = "🎉 Password reset was successful! You can now log in with your new details.";
                   header('location: ../login');
               } else {
                   $_SESSION['error'] = "Error resetting password";
                   header('location: ../reset-password?email='.$email.'&token='.$token);
               }
               mysqli_stmt_close($stmt);
           } else {
               $_SESSION['error'] = "Database error";
               header('location: ../reset-password?email='.$email.'&token='.$token);
           }
       }
  }
?>
