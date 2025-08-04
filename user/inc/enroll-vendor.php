<?php
session_start();
require_once('../../vendor/autoload.php');
require_once('../../inc/config/connection.php');
require_once('../helper/sendMail.php');

use Cloudinary\Cloudinary;

$cloudinary = new Cloudinary([
  'cloud' => [
      'cloud_name' => 'dodhzt3go',
      'api_key'    => '478614474648679',
      'api_secret' => 'LbXaums-b8ngdiC_P3LYVM_UjGA',
  ]
]);

$userId = $_SESSION['userId'] ?? null;
if (!$userId) {
  echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
  exit;
}

// use the user_id to get the uname in the user table

$userResult = mysqli_query($conn, "SELECT uname, email FROM user WHERE user_id = '$userId'");
$userRow = mysqli_fetch_assoc($userResult);
$uname = $userRow['uname'];
$email = $userRow['email'];

$bname = trim($_POST['bname'] ?? '');
$about = trim($_POST['about'] ?? '');
$bdesc = trim($_POST['bdescription'] ?? '');
$image = $_FILES['image'] ?? null;

// Word count validation again (server-side)
if (str_word_count($about) > 50 || str_word_count($bdesc) > 50) {
  echo json_encode(['status' => 'error', 'message' => 'Word limit exceeded.']);
  exit;
}

try {
  if ($image && $image['tmp_name']) {
    $uploaded = $cloudinary->uploadApi()->upload($image['tmp_name'], [
      'folder' => 'profile_uploads'
    ]);
    $imageUrl = $uploaded['secure_url'];

    // Generate unique 6-digit affiliate_id
    do {
      $affiliateId = mt_rand(100000, 999999);
      $check = mysqli_query($conn, "SELECT 1 FROM vendor WHERE affiliate_id = '$affiliateId'");
    } while(mysqli_num_rows($check) > 0);

    // Insert into vendor table
    $stmt = $conn->prepare("INSERT INTO vendor (user_id, bname, about, bdescription, image) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $userId, $bname, $about, $bdesc, $imageUrl);
    $stmt->execute();

    $title = "Givas Vendor 🥰";
    require_once('../../template/enrollVendor.template.php');
    $res = sendCustomEmail($email, $uname, $title, $body);
    if(!$res){
      echo json_encode(['status' => 'error', 'message' => 'Error sending email']);
    }

    echo json_encode(['status' => 'success', 'message' => 'Yo 🥰, Congratulations, you are now a vendor in givas community, you can now list out your courses and start making money in givas']);
  } else {
    echo json_encode(['status' => 'error', 'message' => 'Image is required.']);
  }
} catch (Exception $e) {
  echo json_encode(['status' => 'error', 'message' => 'Upload failed.']);
}
