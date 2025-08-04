<?php 
 session_start();
 require_once('../../inc/config/connection.php');
 require_once('../helper/sendMail.php');
   if(isset($_GET['id'])){
      $user_id = $_GET['id'];
      $amount = $_GET['amount'];
      $sql = "SELECT * FROM  proplan_direct_payment WHERE user_id = $user_id";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        $userEmail = $row['email'];


        // use the user_id to get the uname in the user table;

        $userSql = "SELECT * FROM user WHERE user_id = '$user_id'";
        $res = mysqli_query($conn, $userSql);
        $row = mysqli_fetch_assoc($res);
        $uname = $row['uname'];


        

        $refLink = "https://givas.org/register?next&ref=$uname";
        // aviod duplicate email

        $query = "SELECT * FROM  pro_users WHERE email = '$userEmail'";
        $result =mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) > 0){
            $_SESSION['error'] = "this user email already exist as a pro user";
            header('Location: ../pro-plan');
        }else{

            $query = "INSERT INTO `pro_users`(`user_id`, `email`, `entery_amount`) VALUES ('$user_id','$userEmail', '$amount')";
            $res = mysqli_query($conn, $query);
            if($res){
                $title = "Pro Plan Activated ✅";
                require_once('../../template/activatePro.template.php');
    
                $result = sendCustomEmail($userEmail, $uname, $title, $body);
                if($result){
                    // check if this user joined basic plan with a ref link
                    $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
                    $res = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($res);
                    $referral = $row['referral'];
                    if($referral){
                        $query = "SELECT * FROM user WHERE uname = '$referral'";
                        $res = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($res);
                        $referral_id = $row['user_id'];

                        // add 50% of the amount to the referral user
                        $ref_bonus = 13;
                        $updateSql = "UPDATE pro_users SET ref_bonus = ref_bonus + $ref_bonus WHERE user_id = $referral_id";
                        $res = mysqli_query($conn, $updateSql);
                        
                    }
                    $_SESSION['success'] = "Pro plan has been activated for the user with the email: $userEmail";
                    // delete the user from the pro plan direct payment after activating pro plan
                    $sql = "DELETE FROM proplan_direct_payment WHERE user_id = $user_id";
                    $res = mysqli_query($conn, $sql);
                    header("Location: ../pro-plan");
                }else{
                      $_SESSION['error'] = "error sending email";
                      header('Location: ../pro-plan');
                  }
    
            }else{
                echo "error activating pro plan" . mysqli_error($conn);
                // header('Location: ../pro-plan');
            }
        }
        
        




       

        // $fullName = preg_replace('/[0-9]+/', '', strstr($userEmail, '@', true));

        

       
   }
?>