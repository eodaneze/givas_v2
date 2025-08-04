<?php 
session_start();
require_once('../../inc/config/connection.php');
require_once('../helper/sendMail.php');

if (isset($_GET['status'])) {
    $status = $_GET['status'];

    if ($status == 0) {
        // Enable withdrawals (change status from 0 to 1)
        $sql = "SELECT user.email, user.uname 
                FROM user 
                JOIN  pro_users ON user.user_id =  pro_users.user_id 
                WHERE  pro_users.ref_bonus >= 30 AND  pro_users.withdrawal_status	 = 0";
        $result = mysqli_query($conn, $sql);

        $users = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = [
                    'username' => $row['uname'],
                    'email' => $row['email']
                ];
            }
        }

        // Update status to 1 for selected users
        $updateSql = "UPDATE pro_users SET withdrawal_status = 1 WHERE ref_bonus >= 30 AND withdrawal_status = 0";
        $updateResult = mysqli_query($conn, $updateSql);

        if ($updateResult) {
            foreach ($users as $user) {
                $title = "Pro Plan Payout Enabled 💰💰";
                $uname = $user['username'];
                $email = $user['email'];

                // Load the email template
                require('../../template/enableProWithdrawal.template.php');

                // Send email to each user
                $res = sendCustomEmail($email, $uname, $title, $body);
                if(!$res){
                    $_SESSION['error'] = "Failed to send email";
                }
            }

            $_SESSION['success'] = "Pro Plan Payouts have been enabled for eligible users.";
        } else {
            $_SESSION['error'] = "Failed to enable payouts.";
        }
    }elseif($status == 1){
        // Disable withdrawals (change status from 1 to 0)
        $updateSql = "UPDATE pro_users SET withdrawal_status = 0 WHERE ref_bonus >= 30 AND withdrawal_status = 1";
        $updateResult = mysqli_query($conn, $updateSql);

        if ($updateResult) {
            $_SESSION['success'] = "Pro Plan Payouts have been disabled successfully.";
        } else {
            $_SESSION['error'] = "Failed to disable payouts.";
        }
    }

    // Redirect only once at the end
    header('Location: ../');
    exit();
}
?>