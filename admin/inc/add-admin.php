<?php 
   session_start();
   require_once('../../inc/config/connection.php');
   require_once('../helper/sendMail.php');
   
   if(isset($_POST['add'])){
         $name = $_POST['name'];
         $email = $_POST['email'];
         $role = $_POST['role'];
         $privilege = $_POST['privilege'];
         $password = $_POST['password'];
         
         
         $sql = "INSERT INTO `admin`(`email`, `password`, `name`, `privillege`, `role`) VALUES ('$email','$password','$name','$privilege','$role')";
         $result = mysqli_query($conn, $sql);
         
         if($result){
              $title = "Admin Access Granted 🔓";
              require_once('../../template/addAdmin.template.php');
              $res = sendCustomEmail($email, $uname, $title, $body);
            $_SESSION['success'] = "Yo!😍, $name is now an admin in Givas with $privilege privillege. An email with the login credentails have been to $email";
            header('location: ../manage-admin');
             
         }else{
             
              $_SESSION['error'] = "Error adding admin";
              header('location: ../manage-admin');
         }
   }
?>