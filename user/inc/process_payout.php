<?php
session_start();
require_once('../../inc/config/connection.php');
require_once('../helper/sendMail.php');

header('Content-Type: application/json');

$user_id = $_SESSION['userId'] ?? null;




$amount = floatval($_POST['amount'] ?? 0);
$payment_option = $_POST['payment_option'] ?? 'crypto';

if(!$user_id){
    echo json_encode(["status" => "error", "message" => "Unauthorized access"]);
    exit;
}

if($amount <= 0){
    echo json_encode(["status" => "error", "message" => "Invalid amount entered"]);
    exit;
}

if($payment_option == 'bank'){
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
    
}else{
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

}




// use the user_id to get the total_earning from the user table
$sql = "SELECT total_earning, email, uname FROM user WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_earning = floatval($row['total_earning']);
    $email = $row['email'];
    $uname = $row['uname'];

  
} else {
    echo json_encode(["status" => "error", "message" => "User not found"]);
    exit;
}




if($amount > $total_earning){
    echo json_encode(["status" => "error", "message" => "Payout amount cannot be greater than your total earning"]);
    exit;
}

// Insert into payout table
$stmt = $conn->prepare("INSERT INTO payout_request (user_id, amount, payment_option) VALUES (?, ?, ?)");
$stmt->bind_param("ids", $user_id, $amount, $payment_option);

if($stmt->execute()){
    // update the user table to reduce the total_earning
    $new_total_earning = $total_earning - $amount;
    
    $update_stmt = $conn->prepare("UPDATE user SET total_earning = ? WHERE user_id = ?");
    $update_stmt->bind_param("di", $new_total_earning, $user_id);
    $update_stmt->execute();

    if($update_stmt->execute()){
         $title = "Affiliate Payout Request 💵";
         require_once('../../template/affPayoutRequest.template.php');
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
