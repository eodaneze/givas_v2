<?php
session_start();
require_once('../../inc/config/connection.php');
require_once('../../inc/config/config.php');
require_once('../helper/sendMail.php');


try{
    loadEnv();
    $FLW_KEY = getenv('FLW_KEY');
    $FLW_BASE_URL = getenv('FLW_BASE_URL');

    $user_id = $_SESSION['userId'];
if (!isset($user_id)) {
    echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
    exit;
}
// use the user_id to get the user email and uname in the users table
$sql = "SELECT * FROM user WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
if ($row) {
    $email = $row['email'];
    $uname = $row['uname'];
} else {
    echo json_encode(['status' => 'error', 'message' => 'User not found']);
    exit;
}
$bank_code = $_POST['bname'];
$account_no = $_POST['account_no'];
$account_name = $_POST['account_name'];

// Validate
if (empty($bank_code) || empty($account_no) || empty($account_name)) {
    echo json_encode(['status' => 'error', 'message' => 'All fields are required']);
    exit;
}

// Fetch bank name from the bank code
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "$FLW_BASE_URL/banks/NG",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer $FLW_KEY",
        'Content-Type: application/json'
    ]
]);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    echo json_encode(['status' => 'error', 'message' => 'Curl Error: ' . $err]);

    exit;
}

$responseArray = json_decode($response, true);

if (!$responseArray || !isset($responseArray['data'])) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid response from Flutterwave']);
    exit;
}

$banks = $responseArray['data'];

$bank_name = '';
foreach ($banks as $bank) {
    if ($bank['code'] == $bank_code) {
        $bank_name = $bank['name'];
        break;
    }
}

// Check if the user already has bank details
$query = "SELECT id FROM bank_details WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->store_result();

 $title = "Bank Details Updated ⬆️⬆️";
 require_once('../../template/updateBank.template.php');

if ($stmt->num_rows > 0) {
    $updated_date = date('Y-m-d H:i:s');
    // If record exists, update it
    $update_stmt = $conn->prepare("UPDATE bank_details SET bank_name = ?, account_name = ?, account_no = ?, updated_date = ? WHERE user_id = ?");
    $update_stmt->bind_param("ssssi", $bank_name, $account_name, $account_no, $updated_date, $user_id,);

    if ($update_stmt->execute()) {
       
        $res = sendCustomEmail($email, $uname, $title, $body);
       
          
     

        echo json_encode(['status' => 'success', 'message' => 'Bank details updated']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to update details']);
    }
    // Close the update statement after execution
    if ($update_stmt) {
        $update_stmt->close();
    }
} else {
    // If no record exists, insert a new one
    $insert_stmt = $conn->prepare("INSERT INTO bank_details (user_id, bank_name, account_name, account_no) VALUES (?, ?, ?, ?)");
    $insert_stmt->bind_param("isss", $user_id, $bank_name, $account_name, $account_no);

    if ($insert_stmt->execute()) {
        $res = sendCustomEmail($email, $uname, $title, $body); 
        if(!$res){
            echo json_encode(['status' => 'error', 'message' => 'Failed to send email']);
            exit;
        }

        echo json_encode(['status' => 'success', 'message' => 'Bank details saved']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to save details']);
    }
    // Close the insert statement after execution
    if ($insert_stmt) {
        $insert_stmt->close();
    }
}

// Close the general query statement
$stmt->close();

}catch(Exception $e){
   die("Error loading environment variables: " . $e->getMessage());
}

?>
