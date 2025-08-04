<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['form_data'] = [
        'fullname' => $_POST['fname'] ?? '',
        'email' => $_POST['email'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'country' => $_POST['country'] ?? '',
        'product_id' => $_POST['product_id'] ?? '',
        'affiliate_id' => $_POST['affiliate_id'] ?? ''
    ];

    echo json_encode(['status' => 'success']);
    exit;
}

echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
