<?php 
  session_start();
  require_once('../../inc/config/connection.php');
  require_once('../helper/sendMail.php');
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $user_id = $_GET['user_id'];

      $data = json_decode(file_get_contents('php://input'), true);
      $message = $data['message'];

      // Get the name and email of the vendor
      $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
      $res = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($res);
      $uname = $row['uname'];
      $email = $row['email'];

      $query = "UPDATE kyc SET status = 'Rejected' WHERE user_id = '$user_id'";
      $result = mysqli_query($conn, $query);
      
      if ($result) {
          $title = "KYC Document Rejection ❌❌";
          require_once('../../template/rejectDocs.php');
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
