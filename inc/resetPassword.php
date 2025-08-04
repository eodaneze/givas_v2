<?php 
   session_start();
 require_once('./config/connection.php');
 require_once('../function/resetToken.php');
 require_once('../helpers/sendMail.php');
 require_once('../function/hashEmail.php');
   if(isset($_POST['reset'])){
       $email = $_POST['email'];
    //   echo $email;
    //   die();

       if($email == ""){
         $_SESSION['error'] = "Please enter your email to reset password";
         header('location: ../forget-password');
       }else{
            //    check if the email exisit in the db
            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            

            if($row && mysqli_num_rows($result) > 0){
                    $uname = $row['uname'];
                    $resetToken = generateResetToken(); 
                    $link = "https://givas.org/reset-password?email=$email&&token=$resetToken"; 
                    $title = "Password Reset 🔒🔒";
                    require_once('../template/passwordReset.template.php');
                    $res = sendCustomEmail($email, $link, $title, $body);
                    $hashed_email = hashEmail($email);

                    if($res){
                        $_SESSION['success'] = "A password reset link have been sent to $hashed_email";
                        header('location: ../forget-password');
                    }else{
                           $_SESSION['error'] = "Error sending password reset link";
                            header('location: ../forget-password');
                    }
            }else{
              
                  $_SESSION['error'] = "No user exist with $email, please use the same email that you used during registration!";
                  header('location: ../forget-password');
                  
            }
       }
   }
?>