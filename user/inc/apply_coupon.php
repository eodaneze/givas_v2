<?php
session_start();
require_once('../../inc/config/connection.php');
require_once('../helper/sendMail.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = mysqli_real_escape_string($conn, trim($_POST['coupon_code'] ?? ''));
    $user_id = $_SESSION['userId'];
    $userEmail = $_SESSION['userEmail'] ?? null;
    

    // use the user_id to get the uname in the user table
    $query = "SELECT * FROM user WHERE user_id = '$user_id'";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($res);
    $uname = $row['uname'] ?? null;

    $amount = '20';

    $refLink = "https://givas.org/register?next&ref=$uname";

    if (empty($code)) {
        echo json_encode(['status' => 'error', 'message' => 'Coupon code is required.']);
        exit;
    }

    // Check if coupon exists
    $query = "SELECT * FROM pro_coupon WHERE coupon = '$code'";
    $result = mysqli_query($conn, $query);

    


    if (mysqli_num_rows($result) === 0) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid or expired coupon code.']);
        exit;
    } else {

         // check if this user joined pro plan with a ref link
            $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($res);
            $referral = $row['referral'] ?? null;
            
            if($referral){
                // use the ref to get the user_id
                $query = "SELECT * FROM user WHERE uname = '$referral'";
                $res = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($res);
                $referral_id = $row['user_id'];

             

                // now use the referral_id to get update the ref_bonus of the user that is earning the bonus in the pro_users table
                $ref_bonus = 13;
                $updateSql = "UPDATE pro_users SET ref_bonus = ref_bonus + $ref_bonus WHERE user_id = $referral_id";
                $res = mysqli_query($conn, $updateSql);

               

            }

               // insert into the pro_users table
               $proQuery = "INSERT INTO `pro_users`(`user_id`, `email`, `entery_amount`) VALUES ('$user_id','$userEmail', '$amount')";
               $proRes = mysqli_query($conn, $proQuery);
              if($proRes){
                    $title = "Pro Plan Activated ✅";
                    require_once('../../template/activatePro.template.php');
        
                    $result = sendCustomEmail($userEmail, $uname, $title, $body);
                    // Coupon is valid — delete it and return success
                    $delete = mysqli_query($conn, "DELETE FROM pro_coupon WHERE coupon = '$code'");
            
                    echo json_encode(['status' => 'success', 'message' => 'Congratulations!!, you have successfully upgradeed to Givas pro plan.']);
                    exit;
                
            }else{
                $error = mysqli_error($conn); // Get the actual error message from MySQL
                echo json_encode(['status' => 'error', 'message' => "Error activating pro plan: $error"]);
                exit;
            }
    }
}
?>
