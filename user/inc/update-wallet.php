<?php
 session_start();
 require_once('../helper/sendMail.php');
 require_once('../../inc/config/connection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    // Include database connection

    // Get the form data
    $wallet_name = mysqli_real_escape_string($conn, $_POST['wname']);
    $wallet_address = mysqli_real_escape_string($conn, $_POST['waddress']);
    $user_id = $_SESSION['userId']; // Assuming you are using session to get the logged-in user

    // Fetch user details from the user table
    $user_query = "SELECT * FROM user WHERE user_id = $user_id";
    $user_result = mysqli_query($conn, $user_query);

    if ($user_result && mysqli_num_rows($user_result) > 0) {
        $user_details = mysqli_fetch_assoc($user_result);
        $uname = $user_details['uname'];
        $email = $user_details['email'];
    } else {
        echo json_encode(['success' => false, 'message' => 'User not found.']);
        exit;
    }


    // Validate input
    if (empty($wallet_name) || empty($wallet_address)) {
        echo json_encode(['success' => false, 'message' => 'All fields are required.']);
        exit;
    }

    // Update or Insert into Wallet table
    // $query = "INSERT INTO wallet (wallet_name, address, user_id) 
    // VALUES ('$wallet_name', '$wallet_address', $user_id)
    // ON DUPLICATE KEY UPDATE wallet_name = VALUES(wallet_name), address = VALUES(address)";


    $query = "INSERT INTO wallet (wallet_name, address, user_id) 
    VALUES ('$wallet_name', '$wallet_address', $user_id)
    ON DUPLICATE KEY UPDATE 
    wallet_name = VALUES(wallet_name), 
    address = VALUES(address)";

    if (mysqli_query($conn, $query)) {
        $title = "Wallet Address Update ⬆️";
        require_once('../../template/updateWallet.template.php');
        $res = sendCustomEmail($email, $uname, $title, $body);

        if($res){
            echo json_encode(['success' => true, 'message' => 'Wallet updated successfully!']);

        }else{
             echo json_encode(['success' => false, 'message' => 'error sending email']);
        }

    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update wallet. Please try again.']);
    }

    exit;
}
