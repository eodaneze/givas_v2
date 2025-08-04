<?php 
  session_start();
  header("Cache-Control: no-cache, must-revalidate");
  header("Expires: Sat, 1 Jan 2000 00:00:00 GMT");
  header("Pragma: no-cache");

  require_once('../inc/config/connection.php');

  if($_SERVER['HTTP_HOST'] == 'localhost'){
     $host = "http://localhost/givas_v2";
  }else{
    $host = "https://givas.org";
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/favicon-16x16.png" />
    <title>
        <?php 
          if(isset($title)){
            echo $title;
            }else{
                echo "Givas User";
            }

        ?>
    </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/scrollbar.css">
    <!-- Range slider css-->
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/rangeslider/rSlider.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/prism.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/fullcalender.css">
     <link rel="stylesheet" href="..assets/vendors/fontawesome/css/all.min.css" />
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!--<link rel="stylesheet" type="text/css" href="./assets/css/index.css">-->
    <link id="color" rel="stylesheet" href="./assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/banner.css">
    <link rel="stylesheet" href="./assets/css/market-place.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		<link href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.5.2/dist/select2-bootstrap4.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    
  </head>