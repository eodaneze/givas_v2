<?php
require_once('../inc/config/connection.php');

$affiliate_id = $_GET['a'] ?? null;
$product_id = $_GET['p'] ?? null;

if (!$product_id || !$affiliate_id) {
    die("Invalid affiliate or product ID.");
}



$stmt = $conn->prepare("SELECT sales_page_url FROM products WHERE product_id = ?");
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Product not found.");
}

$row = $result->fetch_assoc();
$sales_page_url = rtrim($row['sales_page_url'], '/');

// Final redirect URL
$redirect_url = $sales_page_url . "?p=$product_id&a=$affiliate_id";
header("Location: $redirect_url");
exit;
