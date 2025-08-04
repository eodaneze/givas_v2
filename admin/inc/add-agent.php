<?php 
  session_start();
  require_once('../../inc/config/connection.php');

  if(isset($_POST['add'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
   

    // check for empty fields
    if(empty($fname) || empty($lname) || empty($phone) || empty($country)){
       echo "<script>alert('All fields are required'); window.location.href='../add-agent.php';</script>";
      exit();
    }

    $sql = "INSERT INTO agent (lname, fname, phone, country) VALUES ('$fname', '$lname', '$phone', '$country')";
    $query = mysqli_query($conn, $sql);

    if($query){
        $agent_id = mysqli_insert_id($conn);
        $_SESSION['success'] = "Agent have been added successfully";
        header('location: ../add-agent');
    }else{
      echo "<script>alert('Failed to add agent'); window.location.href='../add-agent.php';</script>";
    }
  }
?>
