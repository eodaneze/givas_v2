<?php 
  session_start();
  require_once('../../inc/config/connection.php');
  require_once('../helper/sendMail.php');
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id = $_GET['id'];

      $data = json_decode(file_get_contents('php://input'), true);
      $message = $data['message'];

     
       //   use the charity id to get the user id

    $userResult = mysqli_query($conn, "SELECT * FROM charity_fund WHERE id = '$id'");
    $userRow = mysqli_fetch_assoc($userResult);
    $user_id = $userRow['user_id'];
    $fund_amount = $userRow['fund_amount'];
    //   get the name of email of the vendor;

    $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $uname = $row['uname'];
    $email = $row['email'];

      $query = "UPDATE charity_fund SET status = 'Rejected' WHERE user_id = '$user_id'";
      $result = mysqli_query($conn, $query);
      
      if ($result) {
          $title = "Charity Fund Proposal Document Rejection ❌❌";
          require_once('../../template/rejectProposalDocs.template.php');
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
