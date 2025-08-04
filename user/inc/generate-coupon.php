<?php 
 session_start();
 require_once('../../inc/config/connection.php');
 require_once('../helper/sendMail.php');
   if(isset($_GET['id'])){
      $id = $_GET['id'];
      $sql = "SELECT * FROM direct_payment WHERE id = $id";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        $userEmai = $row['email'];
        $fullName = preg_replace('/[0-9]+/', '', strstr($userEmai, '@', true));

        

        $coupon_code = strtoupper(substr(md5(uniqid(rand(), true)), 0, 8));

       
        $sql = "INSERT INTO coupon (email, code) VALUES ('$userEmai', '$coupon_code')";
        $res = mysqli_query($conn, $sql);
        if($res){
            $title = "Givas Coupon Code 👨🏻‍💻";
            require_once('../../template/sendCoupon.template.php');
            $result = sendCustomEmail($userEmai, $fullName, $title, $body);
            $_SESSION['success'] = "Coupon code has been generated and sent to the user with the emial: $userEmai";

            // delete the user from the direct payment after sending coupen
            $sql = "DELETE FROM direct_payment WHERE id = $id";
            $res = mysqli_query($conn, $sql);
            header("Location: ../direct-payment.php");
        }else{
            $_SESSION['error'] = "An error occurred while generating coupon code";
            header("Location: ../direct-payment.php");
        }
   }
?>