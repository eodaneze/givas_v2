<?php
require_once('../../inc/config/connection.php');
require_once('../helper/sendMail.php');
require_once '../../vendor/autoload.php'; // Cloudinary SDK

use Cloudinary\Cloudinary;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = ['success' => false];

    try {
        // Validate and sanitize input
        $user_id = intval($_POST['user_id']);
        $document_type = isset($_POST['document_type']) ? mysqli_real_escape_string($conn, $_POST['document_type']) : null;
        $document_number = isset($_POST['document_number']) ? mysqli_real_escape_string($conn, $_POST['document_number']) : null;

        // Get user info
        $userSql = "SELECT email, uname FROM user WHERE user_id = '$user_id'";
        $userResult = mysqli_query($conn, $userSql);

        if (!$userResult || mysqli_num_rows($userResult) === 0) {
            throw new Exception('User not found.');
        }

        $userRow = mysqli_fetch_assoc($userResult);
        $email = $userRow['email'];
        $uname = $userRow['uname'];

        if (empty($document_type)) {
            throw new Exception('Document type is required.');
        }

        // Check if KYC already exists
        $checkKycSql = "SELECT * FROM kyc WHERE user_id = '$user_id'";
        $checkKycResult = mysqli_query($conn, $checkKycSql);
        $isUpdating = mysqli_num_rows($checkKycResult) > 0;

        // Handle file upload to Cloudinary
        if (isset($_FILES['document_file']) && $_FILES['document_file']['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES['document_file'];

            // Validate file type
            $allowed_types = ['image/jpeg', 'image/png', 'application/pdf'];
            if (!in_array($file['type'], $allowed_types)) {
                throw new Exception('Invalid file type. Only JPEG, PNG, and PDF are allowed.');
            }

            // Validate file size (max 10MB)
            if ($file['size'] > 10 * 1024 * 1024) {
                throw new Exception('File size exceeds the 10MB limit.');
            }

            // Configure Cloudinary
           

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

            // Upload file to Cloudinary
            $uploadResult = $cloudinary->uploadApi()->upload(
                $file['tmp_name'],
                [
                    'folder' => 'kyc_documents',
                    'public_id' => time() . '_' . pathinfo($file['name'], PATHINFO_FILENAME),
                    'resource_type' => 'auto'
                ]
            );

            $file_path = $uploadResult['secure_url'];

            // Insert or update database record
            if ($isUpdating) {
                $sql = "
                    UPDATE kyc 
                    SET document_type = '$document_type', 
                        document_number = " . ($document_number ? "'$document_number'" : 'NULL') . ", 
                        file_path = '$file_path', 
                        status = 'pending', 
                        updated_date = NOW()
                    WHERE user_id = $user_id
                ";
            } else {
                $sql = "
                    INSERT INTO kyc (user_id, document_type, document_number, file_path, status, created_date)
                    VALUES (
                        $user_id,
                        '$document_type',
                        " . ($document_number ? "'$document_number'" : 'NULL') . ",
                        '$file_path',
                        'pending',
                        NOW()
                    )
                ";
            }

            if (!mysqli_query($conn, $sql)) {
                throw new Exception('Database error: ' . mysqli_error($conn));
            }

            // Send email notification
            $title = "KYC Document Upload";
            require_once('../../template/kycUpload.template.php');
            $res = sendCustomEmail($email, $uname, $title, $body);

            if ($res) {
                $response['success'] = true;
            }
        } else {
            throw new Exception('File upload is required.');
        }
    } catch (Exception $e) {
        $response['message'] = $e->getMessage();
    }

    echo json_encode($response);
    exit;
}
