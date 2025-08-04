<?php
// get_banks.php
require_once('../../inc/config/config.php');

try{
     loadEnv();
     $FLW_KEY = getenv('FLW_KEY');
    $FLW_BASE_URL = getenv('FLW_BASE_URL');

    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "$FLW_BASE_URL/banks/NG",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer $FLW_KEY",
        "Content-Type: application/json"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    
    if ($err) {
      echo json_encode(["status" => "error", "message" => "Failed to fetch banks"]);
    } else {
      echo $response;
    }

}catch(Exception $e){
   die("Error loading environment variables: " . $e->getMessage());
}
