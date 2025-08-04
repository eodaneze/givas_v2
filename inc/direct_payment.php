<?php
  require_once('./config/connection.php');
  require_once('../helpers/adminUser.php');

// Process the uploaded file
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['proof'])) {
    // Get form data
    $amount = $_POST['amount'];
    $wallet_address = $_POST['wallet_address'];
    $userEmail = $_POST['email'];
    $no_account = $_POST['no_account'];

    // Handle file upload
    $file = $_FILES['proof'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($file["name"]);
    move_uploaded_file($file["tmp_name"], $target_file);

    // Save to database
    $stmt = $conn->prepare("INSERT INTO direct_payment (amount, wallet_address, email, no_account,  proof_filename, proof_file_path) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("dsssss", $amount, $wallet_address, $userEmail, $no_account, $file["name"], $target_file);

    if ($stmt->execute()) {
        // Send email to admin and the user making the deposit;
        $userTitle = "Deposit Confirmation";
        $adminTitle = "New Deposit Alert";
        require_once('../template/directPayment.template.php');
        $res = sendCustomEmailAdminUser($userEmail, $adminEmail,$adminFirstName, $userTitle, $adminTitle, $userBody, $adminBody);
        if($res){
            echo json_encode(['status' => 'success', 'message' => 'Proof of payment have been uploaded successfully']);
        }else{
            echo json_encode(['status' => 'error', 'message' => 'Error sending email']);
        };
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error saving payment details']);
    }

    $stmt->close();
}

$conn->close();
?>
