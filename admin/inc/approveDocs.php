<?php 
  session_start();
  require_once('../../inc/config/connection.php');
  require_once('../helper/sendMail.php');

  if(isset($_GET['user_id'])){
      $user_id = $_GET['user_id'];

    //   get the name of email of the vendor;

    $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $uname = $row['uname'];
    $email = $row['email'];

    // check if the users kyc docs have been approved;

    $sql2 = "SELECT * FROM kyc WHERE user_id = '$user_id' AND status = 'Approved'";
    $result1 = mysqli_query($conn, $sql2);
    if(mysqli_num_rows($result1) > 0){
            $_SESSION['error'] = "User have already been approved";
            header('location: ../kyc-docs');
    }

    // update the status of the user in the kyc table;

    $query = "UPDATE kyc SET status = 'Approved' WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $query);
    if($result){
          
          $title = "KYC Document Approval Alert ✅🔔";
          require_once('../../template/verifyDocs.template.php');
          $res = sendCustomEmail($email, $uname, $title, $body);
          if($res){
               $_SESSION['success'] = "KYC docs have been approved successfully";
               header('location: ../kyc-docs');
          }else{
               $_SESSION['error'] = "Error sending Approval email";
               header('location: ../kyc-docs');
          }
    }else{
        $_SESSION['error'] = "Error updating status";
        header('location: ../kyc-docs');
    }

     
  }
?>