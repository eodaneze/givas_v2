<?php 
  session_start();
  require_once('../../inc/config/connection.php');
  require_once('../helper/sendMail.php');
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $product_id = $_GET['pid'];

      $data = json_decode(file_get_contents('php://input'), true);
      $message = $data['message'];

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

      $query = "UPDATE products SET status = 'Rejected' WHERE product_id = '$product_id'";
      $result = mysqli_query($conn, $query);
      
      if ($result) {
          $title = "Product Rejection ❌❌";
          require_once('../../template/rejectProduct.template.php');
          $res = sendCustomEmail($email, $uname, $title, $body);

          if ($res) {
              echo json_encode(['success' => true, 'message' => 'Rejection email sent successfully.']);
          } else {
              echo json_encode(['success' => false, 'message' => 'Failed to send rejection email.']);
          }
      } else {
          echo json_encode(['success' => false, 'message' => 'Error updating verification status.']);
      }
  } else {
      echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
  }
?>
