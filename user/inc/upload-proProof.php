<?php
require_once('../../inc/config/connection.php');
require_once('../helper/adminUser.php');
require_once '../../vendor/autoload.php'; // Cloudinary SDK

use Cloudinary\Cloudinary;

// Only run on POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_id = intval($_POST["user_id"]);
    $amount = floatval($_POST["amount"]);
    $wallet_address = $_POST["wallet_address"];
    $email = $_POST["email"];

    // Get username
    $sql = "SELECT uname FROM user WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $uname = $row['uname'] ?? '';

    if (!isset($_FILES["proof"]) || $_FILES["proof"]["error"] !== UPLOAD_ERR_OK) {
        echo "No file uploaded!";
        exit;
    }

    $file = $_FILES["proof"];

    // Validate file type
    $allowed_types = ['image/jpeg', 'image/png', 'application/pdf'];
    if (!in_array($file['type'], $allowed_types)) {
        echo "Invalid file type. Only JPEG, PNG, and PDF allowed.";
        exit;
    }

    // Max 10MB
    if ($file['size'] > 10 * 1024 * 1024) {
        echo "File too large!";
        exit;
    }

    // Upload to Cloudinary
    try {
        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => 'dodhzt3go',
                'api_key'    => '478614474648679',
                'api_secret' => 'LbXaums-b8ngdiC_P3LYVM_UjGA',
            ],
            'url' => ['secure' => true]
        ]);

        $uploadResult = $cloudinary->uploadApi()->upload(
            $file['tmp_name'],
            [
                'folder' => 'pro_plan_proofs',
                'public_id' => time() . '_' . pathinfo($file['name'], PATHINFO_FILENAME),
                'resource_type' => 'auto'
            ]
        );

        $filename = basename($uploadResult['public_id']);
        $file_path = $uploadResult['secure_url'];

        // Insert into database
        $stmt = $conn->prepare("INSERT INTO proPlan_direct_payment (user_id, amount, wallet_address, email, proof_filename, proof_file_path) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("idssss", $user_id, $amount, $wallet_address, $email, $filename, $file_path);

        if ($stmt->execute()) {
            $userTitle = "Pro Plan Payment";
            $adminTitle = "Pro Plan Payment";
            require_once('../../template/proDirectPayment.template.php');

            $res = sendCustomEmailAdminUser($email, $adminEmail, $adminFirstName, $userTitle, $adminTitle, $userBody, $adminBody);

            echo $res ? "success" : "error sending email";
        } else {
            echo "Database error!";
        }
    } catch (Exception $e) {
        echo "Cloudinary upload failed: " . $e->getMessage();
    }
}
?>
