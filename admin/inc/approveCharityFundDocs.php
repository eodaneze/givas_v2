<?php 
  session_start();
  require_once('../../inc/config/connection.php');
  require_once('../helper/sendMail.php');

  if(isset($_GET['id'])){
      $id = $_GET['id'];


    //   use the charity id to get the user id

    $userResult = mysqli_query($conn, "SELECT * FROM charity_fund WHERE id = '$id'");
    $userRow = mysqli_fetch_assoc($userResult);
    $user_id = $userRow['user_id'];
    $fund_amount = $userRow['fund_amount'];
    //   get the name of email of the vendor;

    $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $uname = $row['uname'];
    $email = $row['email'];

    // check if the users kyc docs have been approved;

    $sql2 = "SELECT * FROM charity_fund WHERE user_id = '$user_id' AND status = 'Approved'";
    $result1 = mysqli_query($conn, $sql2);
    if(mysqli_num_rows($result1) > 0){
            $_SESSION['error'] = "User charity fund proposal have already been approved";
            header('location: ../charity-fund-docs');
    }

    // update the status of the user in the kyc table;

    $query = "UPDATE charity_fund SET status = 'Approved' WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $query);
    if($result){
          
          $title = "Charity Fund Proposal Approval Alert ✅🔔";
          require_once('../../template/verifyProposalDocs.template.php');
          $res = sendCustomEmail($email, $uname, $title, $body);
          if($res){
               $_SESSION['success'] = "Proposal docs have been approved successfully";
               header('location: ../charity-fund-docs');
          }else{
               $_SESSION['error'] = "Error sending Approval email";
               header('location: ../charity-fund-docs');
          }
    }else{
        $_SESSION['error'] = "Error updating status";
        header('location: ../charity-fund-docs');
    }

     
  }
?>