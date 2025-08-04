<?php 
  session_start();
  require_once('../../inc/config/connection.php');
  require_once('../helper/sendMail.php');

  if(isset($_GET['pid'])){
      $product_id = $_GET['pid'];

    //   use the product_id to get the vendor_idin the products table and use the vendor_id to get the cvendor details in the users teble

      $productResult = mysqli_query($conn, "SELECT * FROM products WHERE product_id = '$product_id'");
      $productRow = mysqli_fetch_assoc($productResult);
      $pname = $productRow['pname'];
      $vendor_id = $productRow['vendor_id'];

    //   get the name of email of the vendor;

    $sql = "SELECT * FROM user WHERE user_id = '$vendor_id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $uname = $row['uname'];
    $email = $row['email'];

    // check if the vendors products have been published;

    $sql2 = "SELECT * FROM products WHERE product_id = '$product_id' AND status = 'Published'";
    $result1 = mysqli_query($conn, $sql2);
    if(mysqli_num_rows($result1) > 0){
            $_SESSION['error'] = "This product have already been published";
            header('location: ../product-details?pid='.$product_id);
    }

    // update the status of the user in the kyc table;

    $query = "UPDATE products SET status = 'Published' WHERE product_id = '$product_id'";
    $result = mysqli_query($conn, $query);
    if($result){
          
          $title = "Product Published Alert ✅🔔";
          require_once('../../template/publishProduct.template.php');
          $res = sendCustomEmail($email, $uname, $title, $body);
          if($res){
               $_SESSION['success'] = "Product have been Published successfully";
               header('location: ../product-details?pid='.$product_id);
          }else{
               $_SESSION['error'] = "Error sending Published email";
               header('location: ../product-details?pid='.$product_id);
          }
    }else{
        $_SESSION['error'] = "Error updating status";
        header('location: ../product-details?pid='.$product_id);
    }

     
  }
?>