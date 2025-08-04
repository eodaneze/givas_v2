<?php
// resolve_account.php
require_once('../../inc/config/config.php');

try{
    loadEnv();
    $FLW_KEY = getenv('FLW_KEY');
    $FLW_BASE_URL = getenv('FLW_BASE_URL');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $account_number = $_POST['account_number'];
        $bank_code = $_POST['bank_code'];
    
        $payload = json_encode([
            'account_number' => $account_number,
            'account_bank' => $bank_code
        ]);
    
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "$FLW_BASE_URL/accounts/resolve",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $FLW_KEY",
                "Content-Type: application/json"
            ),
        ));
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
    
        if ($err) {
            echo json_encode(['status' => 'error', 'message' => 'Curl Error: ' . $err]);
    
        } else {
            echo $response;
        }
    }

}catch(Exception $e){
    die("Error loading environment variables: " . $e->getMessage());
}
