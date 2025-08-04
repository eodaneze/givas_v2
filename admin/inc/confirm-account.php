<?php 

session_start();
require_once('../../inc/config/connection.php');
  if(isset($_POST['confirm'])){
     $no_account = $_POST['no_account'];
     $payment_id =$_POST['payment_id'];


    //  update the number of account for a particular user
    $query = "UPDATE direct_payment SET no_account = '$no_account' WHERE id ='$payment_id'";
    $res = mysqli_query($conn, $query);

    if($res){
         $_SESSION['success'] = "Expected number of accounts have been updated successfully";
         header('location: ../direct-payment');
    }else{
        $_SESSION['error'] = "Error updating number of account";
        header('location: ../direct-payment');
    }
  }
?>