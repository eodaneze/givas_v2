<?php 
   session_start();
   require_once('../../inc/config/connection.php');
   require_once('../helper/sendMail.php');
   if(isset($_POST['notify'])){
        $user_id = $_SESSION['userId'];
        // get the email of the user
        $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $email = $row['email'];
        $uname = $row['uname'];
        // check if the user has already subscribed to the newsletter
        $sql = "SELECT * FROM notify WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
             $_SESSION['error'] = "You have already been notified";
             header('location: ../');
        }else{
                $sql = "INSERT INTO notify(email, user_id) VALUES('$email', '$user_id')";
                $result = mysqli_query($conn, $sql);
                if($result){
                     $title = "Notification Subscription";
                     require_once('../../template/sendNotification.template.php');
                     $res = sendCustomEmail($email, $uname, $title, $body);
                     if($res){
                         $_SESSION['success'] = "Congratulations! you have successfully opted to get notification from us";
                         header('location: ../');

                     }
                }else{
                    $_SESSION['error'] = "Failed to send notification";
                    header('location: ../');
                }
            }
       
   }
?>