<?php 
  session_start();
  require_once('../../inc/config/connection.php');

  if(isset($_POST['add'])){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $order = $_POST['order'];
    $completion = $_POST['completion'];
    $rate = $_POST['rate'];
    $amount = $_POST['amount'];
    $payment_options = $_POST['payment_options'];
    $payment_options_json = json_encode($payment_options);

    // check for empty fields
    if(empty($fname) || empty($email) || empty($order) || empty($completion) || empty($rate) || empty($amount)){
       echo "<script>alert('All fields are required'); window.location.href='../add-agent.php';</script>";
      exit();
    }

    $sql = "INSERT INTO agent (name, email, orders, completion, rate, available_amount, payment_option) VALUES ('$fname', '$email', '$order', '$completion', '$rate', '$amount', '$payment_options_json')";
    $query = mysqli_query($conn, $sql);

    if($query){
        $agent_id = mysqli_insert_id($conn);
        $_SESSION['success'] = "Agent added successfully, Please add the account number that is associated with the agent payment option";
        header('location: ../add-agentBank?id='.$agent_id);
    }else{
      echo "<script>alert('Failed to add agent'); window.location.href='../add-agent.php';</script>";
    }
  }
?>
