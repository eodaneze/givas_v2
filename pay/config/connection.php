<?php 
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "givas";

  $siteName = "Givas";
  
  $adminEmail = "givasWorld@gmail.com";
  $adminFirstName = "Admin";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);

  if(!$conn){
      echo "Failed to connect to database";
      die();
  }

?>