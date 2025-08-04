<?php 
    session_start();
    require_once('../../inc/config/connection.php');

    if(isset($_POST['update'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $entity = $_POST['entity'];
        $user_id = $_POST['user_id'];


        $sql = "UPDATE `user` SET `fname`='$fname',`lname`='$lname',`email`='$email',`country`='$country',`entity`='$entity' ,`phone`='$phone' WHERE `user_id` = '$user_id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            $_SESSION['success'] = "Profile have been updated successfully";
            header('location: ../settings');
        }
    }
?>