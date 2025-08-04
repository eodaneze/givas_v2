<?php 
  $hostname = "localhost";
  $username = "u780727559_givas";
  $password = "5CLcANuU^Rk";
  $dbname = "u780727559_givas";

  $siteName = "Givas";
  
  $adminEmail = "givasWorld@gmail.com";
  $adminFirstName = "Admin";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);

  if(!$conn){
      echo "Failed to connect to database";
      die();
  }

?>