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
                JOIN withdrawal_balance ON user.user_id = withdrawal_balance.user_id 
                WHERE withdrawal_balance.amount > 0 AND withdrawal_balance.status = 0";
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
        $updateSql = "UPDATE withdrawal_balance SET status = 1 WHERE amount > 0 AND status = 0";
        $updateResult = mysqli_query($conn, $updateSql);

        if ($updateResult) {
            foreach ($users as $user) {
                $title = "Payout Enabled 💰💰";
                $uname = $user['username'];
                $email = $user['email'];

                // Load the email template
                require('../../template/enableWithdrawal.template.php');

                // Send email to each user
                sendCustomEmail($email, $uname, $title, $body);
            }

            $_SESSION['success'] = "Payouts have been enabled for eligible users.";
        } else {
            $_SESSION['error'] = "Failed to enable payouts.";
        }
    } else {
        // Disable withdrawals (change status from 1 to 0)
        $updateSql = "UPDATE withdrawal_balance SET status = 0 WHERE amount > 0 AND status = 1";
        $updateResult = mysqli_query($conn, $updateSql);

        if ($updateResult) {
            $_SESSION['success'] = "Payouts have been disabled successfully.";
        } else {
            $_SESSION['error'] = "Failed to disable payouts.";
        }
    }

    // Redirect only once at the end
    header('Location: ../');
    exit();
}
?>