<?php
session_start();
require_once('../../inc/config/connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'] ?? null;
    $selected_button = $_POST['selected_button'] ?? null;

    if (!$product_id || !$selected_button) {
        http_response_code(400);
        echo "Invalid data";
        exit;
    }

    // Sanitize
    $product_id = intval($product_id);
    $selected_button = mysqli_real_escape_string($conn, $selected_button);

    $sql = "UPDATE products SET isgenerate_button = 1 WHERE product_id = $product_id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo 'success';
    } else {
        http_response_code(500);
        echo "Failed to update product.";
    }
}
