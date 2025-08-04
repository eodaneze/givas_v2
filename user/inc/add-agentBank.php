<?php 
   session_start();
   require_once('../../inc/config/connection.php');
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $agent_id = $_POST['agent_id'];
    $payment_options = $_POST['payment_options'];
    $bank_accounts = $_POST['bank_accounts'];

    foreach ($payment_options as $key => $payment_option) {
        $bank_account = $bank_accounts[$key];
        $sql = "INSERT INTO bank_account (agent_id, bank_account) VALUES ('$agent_id', '$bank_account')";
        $res = mysqli_query($conn, $sql);

        if($res){
            $_SESSION['success'] = "Bank account added successfully";
            header('location: ../add-agentBank?id='.$agent_id);
        }else{
            echo "<script>alert('Failed to add bank account'); window.location.href='../add-agentBank.php';</script>";
        }
    }
}
?>