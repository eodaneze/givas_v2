<?php 
  require_once('config.php');
 
  try{
    loadEnv();
    $hostname = getenv('DB_HOST');
    $username = getenv('DB_USER');
    $password = getenv('DB_PASS');
    $dbname = getenv('DB_NAME');

    $siteName = "Givas";
  
    $adminEmail = "givasWorld@gmail.com";
    $adminFirstName = "Admin";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    if (!$conn) {
        die("Failed to connect to database: " . mysqli_connect_error());
    }
  }catch(Exception $e){
    die("Error loading environment variables: " . $e->getMessage());
  }

?>