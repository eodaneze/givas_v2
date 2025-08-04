<?php
require_once('../../inc/config/connection.php');
require_once ('../../vendor/autoload.php');
use Cloudinary\Cloudinary;

session_start();
$userId = $_SESSION['userId'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $pname = $_POST['pname'];
    $pdecrip = $_POST['pdecrip'];
    $category = $_POST['category'];
    $ptype = $_POST['ptype'];
    $price = $_POST['price'];
    $commission = $_POST['commission'];
    $approve_type = $_POST['approve_type'];
    $sales_page_url = $_POST['sales_page_url'];
    $download_url = $_POST['download_url'];
    $webinar_url = $_POST['webinar_url'];
    $jv_page_url = $_POST['jv_page_url'];
    $product_id = rand(10000, 99999);
    $status = 'Unpublished';

    if (!isset($_FILES['image']) || $_FILES['image']['error'] !== 0) {
        echo json_encode(['status' => 'error', 'message' => 'Image upload failed']);
        exit;
    }

    $cloudinary = new Cloudinary([
        'cloud' => [
            'cloud_name' => 'dodhzt3go',
            'api_key'    => '478614474648679',
            'api_secret' => 'LbXaums-b8ngdiC_P3LYVM_UjGA',
        ],
        'url' => [
            'secure' => true
        ]
    ]);

    try {
        $upload = $cloudinary->uploadApi()->upload($_FILES['image']['tmp_name']);
        $image_url = $upload['secure_url'];
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Cloudinary upload failed']);
        exit;
    }

   
  

    $stmt = $conn->prepare("INSERT INTO products (product_id, vendor_id, pname, pdecrip, category, ptype, price, commission, approve_type, sales_page_url, download_url, webinar_url, jv_page_url, status, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iissssdiissssss", $product_id, $userId, $pname, $pdecrip, $category, $ptype, $price, $commission, $approve_type, $sales_page_url, $download_url, $webinar_url, $jv_page_url, $status, $image_url);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Product created successfully', 'pid' => $product_id]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to insert product']);
    }

    $stmt->close();
    $conn->close();
}
?>
