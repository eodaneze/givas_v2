<?php 
   session_start();
   require_once('../../inc/config/connection.php');

   
   if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
       $user_id = $_REQUEST['user_id'];
       $amount = $_REQUEST['amount'];
    
        // check if there  is a record in the wallert table

        $sql = "SELECT * FROM wallet WHERE user_id = '$user_id'";
        $res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res) > 0){
            // check if the users kyc docs have been approved;
            $sql1 = "SELECT * FROM kyc WHERE user_id = '$user_id' AND status = 'Approved'";
            $result = mysqli_query($conn, $sql1);
            
            if(mysqli_num_rows($result) > 0){
                // insert into the payout request table
                
                
                $query = "INSERT INTO `payout_request`(`amount`, `user_id`) VALUES ('$amount','$user_id')";
                $result = mysqli_query($conn, $query);
                if($result){
                    // update the withdrawal balance table
                    $updateSql = "UPDATE withdrawal_balance SET amount = amount - ? WHERE user_id = ?";
                    $stmt = $conn->prepare($updateSql);
                    $stmt->bind_param("di", $amount,$user_id);  // 'd' specifies the type as double (for decimal values)
                    $stmt->execute();
                    $stmt->close();
                   $_SESSION['success'] ="Payout request have been sent sucessfully";
                   header('location: ../');
                }else{
                    $_SESSION['error'] = 'Error requesting payout. Please try again';
                 header('location: ../');
                }
                
            }else{
                $_SESSION['error'] = "Account not verified!, Please make sure your kyc document have been approved before requesting for payout";
                 header('location: ../');
            }
        }else{
             $_SESSION['error'] = 'Please update your wallet to request payout';
             header('location: ../');
        }
    }

?>