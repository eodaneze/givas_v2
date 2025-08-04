<?php 
  session_start();
  require_once('../../inc/config/connection.php');
  require_once('../helper/sendMail.php');

  if(isset($_GET['id'])){
      $id = $_GET['id'];
      
      
      
    //   use the id to get the amount in the payout-request table
    
    $sql1 = "SELECT * FROM payout_request WHERE id = '$id'";
    $result = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result);
    $amount = $row1['amount'];
    $user_id = $row1['user_id'];
    $payment_option	 = $row1['payment_option'];
    $payout_role = $row1['role'];

    $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $uname = $row['uname'];
    $email = $row['email'];

   

    // update the status of the user in the payout_request table;

    $query = "UPDATE payout_request SET status = 'success' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if($result){
          
          $title = "Credit Alert 💰💰";
          require_once('../../template/approvePayout.template.php');
          $res = sendCustomEmail($email, $uname, $title, $body);
          if($res){
               $_SESSION['success'] = "$payout_role Payout Request have been approved successfully";
               if($payout_role == "Affiliate"){
                  header('location: ../aff-payout');
               }else{
                 header('location: ../vendor-payout');

               }
          }else{
               $_SESSION['error'] = "Error sending Approval email";
                 if($payout_role == "Affiliate"){
                  header('location: ../aff-payout');
               }else{
                 header('location: ../vendor-payout');

               }
          }
    }else{
        $_SESSION['error'] = "Error updating status";
         if($payout_role == "Affiliate"){
            header('location: ../aff-payout');
          }else{
            header('location: ../vendor-payout');

          }
    }

     
  }
?>