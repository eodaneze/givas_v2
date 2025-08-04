<?php 
 session_start();
 require_once('../../inc/config/connection.php');
 require_once('../helper/sendMail.php');
 require_once('../function/pro-coupon.php');
   if(isset($_GET['id'])){
      $id = $_GET['id'];
      $sql = "SELECT * FROM proplan_direct_payment WHERE id = $id";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        $userEmail = $row['email'];
        $amount = $row['amount'];
        $fullName = preg_replace('/[0-9]+/', '', strstr($userEmail, '@', true));

        

        $coupon_code = strtoupper(substr(md5(uniqid(rand(), true)), 0, 8));
        $pro_coupon_code = generateCouponCode();
        
        
       

       
        $sql = "INSERT INTO coupon (email, code, expected_times) VALUES ('$userEmail', '$coupon_code', 1)";
        $res = mysqli_query($conn, $sql);

        $query = "INSERT INTO  pro_coupon(coupon)VALUES('$pro_coupon_code')";
        $queryRes = mysqli_query($conn, $query);
        if($res && $queryRes){
            $title = "Givas Coupon Code 👨🏻‍💻";
            require_once('../../template/sendProCoupon.template.php');
            $result = sendCustomEmail($userEmail, $fullName, $title, $body);
            $_SESSION['success'] = "Coupon code has been generated and sent to the user with the email: $userEmail";

            // delete the user from the direct payment after sending coupen
            $sql = "DELETE FROM proplan_direct_payment WHERE id = $id";
            $res = mysqli_query($conn, $sql);
            header("Location: ../pro-plan");
        }else{
            $_SESSION['error'] = "An error occurred while generating coupon code";
            header("Location: ../pro-plan");
        }
   }
?>