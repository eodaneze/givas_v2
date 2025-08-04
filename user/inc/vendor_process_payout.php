<?php
session_start();
require_once('../../inc/config/connection.php');
require_once('../helper/sendMail.php');

header('Content-Type: application/json');

$user_id = $_SESSION['userId'] ?? null;


$amount = floatval($_POST['amount'] ?? 0);
$payment_option = $_POST['payment_option'] ?? 'crypto';
$role = 'Vendor';

// get the the users bank details from the bank_details table using the user_id
$sql = "SELECT * FROM bank_details WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $bank_details = $result->fetch_assoc();
    $bank_name = $bank_details['bank_name'];
    $account_no = $bank_details['account_no'];
    $account_name = $bank_details['account_name'];
} else {
    echo json_encode(["status" => "error", "message" => "Bank details not found"]);
    exit;
}

// get the users wallet address from the wallet table using the user_id
$sql = "SELECT address FROM wallet WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $wallet = $result->fetch_assoc();
    $wallet_address = $wallet['address'];
} else {
    echo json_encode(["status" => "error", "message" => "Wallet address not found"]);
    exit;
}


// use the user_id email and uname of the vendor from the user table
$sql = "SELECT email, uname FROM user WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // $total_earning = floatval($row['total_earning']);
    $email = $row['email'];
    $uname = $row['uname'];

  
} else {
    echo json_encode(["status" => "error", "message" => "User not found"]);
    exit;
}

// get the total sales of the vendor using the user_id

$sql = "SELECT sales FROM vendor WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $vendor_total_sales = floatval($row['sales']);
} else {
    echo json_encode(["status" => "error", "message" => "Vendor sales not found"]);
    exit;
} 

if(!$user_id){
    echo json_encode(["status" => "error", "message" => "Unauthorized access"]);
    exit;
}

if($amount <= 0){
    echo json_encode(["status" => "error", "message" => "Invalid amount entered"]);
    exit;
}

if($amount > $vendor_total_sales){
    echo json_encode(["status" => "error", "message" => "Payout amount cannot be greater than your total earning"]);
    exit;
}

// Insert into payout table
$stmt = $conn->prepare("INSERT INTO payout_request (user_id, amount, payment_option, role) VALUES (?, ?, ?, ?)");
$stmt->bind_param("idss", $user_id, $amount, $payment_option, $role);

if($stmt->execute()){
    // update the user table to reduce the total_earning
    $new_total_earning = $vendor_total_sales - $amount;
    
    $update_stmt = $conn->prepare("UPDATE vendor SET sales = ? WHERE user_id = ?");
    $update_stmt->bind_param("di", $new_total_earning, $user_id);
    $update_stmt->execute();

    if($update_stmt->execute()){
         $title = "Vendor Payout Request 💵";
         require_once('../../template/vendorPayoutRequest.template.php');
         $res = sendCustomEmail($email, $uname, $title, $body);
         if(!$res){
            echo json_encode(["status" => "error", "message" => "Failed to send email"]);
            exit;
         }else{
            $_SESSION['isAffPayout'] = true;
            echo json_encode(["status" => "success", "message" => "Payout request submitted successfully"]);
            exit;
         }
    }
    
} else {
    echo json_encode(["status" => "error", "message" => "Database error occurred"]);
}
