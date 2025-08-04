<?php
session_start();
require_once('../../inc/config/connection.php');
require_once('../function/countries.php');

// Only POST allowed
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get session values
    $fullname = $_SESSION['form_data']['fullname'];
    $email = $_SESSION['form_data']['email'];
    $phone = $_SESSION['form_data']['phone'];
    $country = $_SESSION['form_data']['country'];
    $product_id = $_SESSION['form_data']['product_id'];
    $affiliate_id = $_SESSION['form_data']['affiliate_id'];

    // Get country data
    if (!isset($flutterwave_countries[$country])) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid country selected.'
        ]);
        exit;
    }

    $country_info = $flutterwave_countries[$country];
    $currency_code = $country_info['currency_code']; // ✅ Correct 3-letter code
    $currency_symbol = $country_info['currency'];
    $from_usd = $country_info['from_usd'];
    $payment_methods = implode(',', array_map('strtolower', $country_info['payment_methods']));

    // Get product price
    $product_query = mysqli_query($conn, "SELECT * FROM products WHERE product_id = '$product_id'");
    $product = mysqli_fetch_assoc($product_query);
    $price_usd = $product['price'];
    $pname = $product['pname'];
    $converted_price = round($price_usd * $from_usd, 2);

    $tx_ref = uniqid("TX_");
    $redirect_url = "http://localhost/givas_v2/pay/inc/verify_flutterwave";

 

    // Store payment temporarily
    mysqli_query($conn, "INSERT INTO course_payment (product_id, affiliate_id, fname, email, phone, country, status, tx_ref)
        VALUES ('$product_id', '$affiliate_id', '$fullname', '$email', '$phone', '$country', 'Pending', '$tx_ref')");

    $paymentData = [
        'tx_ref' => $tx_ref,
        'amount' => $converted_price,
        'currency' => $currency_code,
        'redirect_url' => $redirect_url,
        'payment_options' => $payment_methods,
        'customer' => [
            'email' => $email,
            'phonenumber' => $phone,
            'name' => $fullname
        ],
        'customizations' => [
            'title' => $pname,
            'logo' => 'http://localhost/givas_v2/pay/assets/images/Givas.png',
            'description' => 'Access premium course'
        ]
    ];

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($paymentData),
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer FLWSECK_TEST-0b485e10daf59a8a69b635cde65636e0-X", // ✅ Use your actual secret key
            "Content-Type: application/json"
        ]
    ]);
    $response = curl_exec($curl);
    curl_close($curl);

    $res = json_decode($response, true);

    if ($res && $res['status'] === 'success') {
        echo json_encode([
            'status' => 'success',
            'payment_link' => $res['data']['link']
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => $res['message'] ?? 'Payment initialization failed.'
        ]);
    }
}
?>
