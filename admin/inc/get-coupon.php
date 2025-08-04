<?php 
 session_start();
 require_once('../../inc/config/connection.php');
 require_once('../helper/sendMail.php');
   if(isset($_POST['generate'])){
        $email = 'user@gmail.com';
        $no_account = $_POST['no_account'];
        

        

        $coupon_code = strtoupper(substr(md5(uniqid(rand(), true)), 0, 8));

       
        $sql = "INSERT INTO coupon (email, code, expected_times) VALUES ('$userEmail', '$coupon_code', '$no_account')";
        $res = mysqli_query($conn, $sql);
        if($res){
            $_SESSION['success'] = "Coupon code has been generated sucessfully. This code will be used to create $no_account on Givas. Coupon code: $coupon_code";

            header("Location: ../generate-coupon");
        }else{
            $_SESSION['error'] = "An error occurred while generating coupon code";
            header("Location: ../generate-coupon");
        }
   }
?>