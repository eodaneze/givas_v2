<?php
require_once('../../inc/config/connection.php');
require_once('../helper/sendMail.php');
require_once('../function/countries.php');


if (!isset($_GET['transaction_id'])) {
   echo "Unable to retrieve transaction ID.";
    exit;
}

$tx_id = $_GET['transaction_id'];

// Step 1: Verify transaction with the real transaction_id
$verify_url = "https://api.flutterwave.com/v3/transactions/$tx_id/verify";

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $verify_url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer FLWSECK_TEST-0b485e10daf59a8a69b635cde65636e0-X", 
        "Content-Type: application/json"
    ]
]);
$verify_response = curl_exec($curl);
curl_close($curl);

$res = json_decode($verify_response, true);



if ($res['status'] === 'success') {
    // $customer_email = $res['data']['customer']['email'];
    $amount_paid = $res['data']['amount'];
    $currency_paid = $res['data']['currency'];
    $tx_ref = $res['data']['tx_ref'];

    

    // Step 2: Update course_payment record
    mysqli_query($conn, "UPDATE course_payment SET status='Successful' WHERE tx_ref='$tx_ref' AND status='Pending'");

    $payment = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM course_payment WHERE tx_ref='$tx_ref' ORDER BY id DESC LIMIT 1"));
    if (!$payment) {
        echo "Payment record not found.";
        exit;
    }
    
    $product_id = $payment['product_id'];
    $affiliate_id = $payment['affiliate_id'];
    $customer_email = $payment['email'];
    $customer_name = $payment['fname'];
    $customer_phone = $payment['phone'];

    // split the customer name to fname and lname for free account
    $split_name = explode(' ', $customer_name);
    $customer_fname = $split_name[0] ?? '';
    $customer_lname = $split_name[1] ?? '';


    // use the affiliate_id to get the affiliate username and email in the user table
    $affiliate = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE affiliate_id = '$affiliate_id'"));
    if (!$affiliate) {
        echo "Affiliate not found.";
        exit;
    }
    $aff_uname = $affiliate['uname'];
    $aff_email = $affiliate['email'];


    $product = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE product_id = '$product_id'"));
    $course_price = $product['price'];
    $vendor_id = $product['vendor_id'];
    $download_url = $product['download_url'];
    $webinar_url = $product['webinar_url'];
    $product_image = $product['image'];
    $pname = $product['pname'];

    if (empty($download_url)) {
        echo "<script>alert('Download URL not found. Contact support.');</script>";
        exit;
    }


    // use the vendor_id to get the vendor username and email in the user table
    $vendor_result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE user_id = '$vendor_id'"));
    if (!$vendor_result) {
        echo "<script>alert('Vendor not found');</script>";
        exit;
    }
    $vendor_uname = $vendor_result['uname'];
    $vendor_email = $vendor_result['email'];

    // Step 3: Split commissions
    $affiliate_commission = $course_price * 0.50;
    $vendor_commission = $course_price * 0.40;
    $admin_commission = $course_price * 0.10;

    mysqli_query($conn, "UPDATE user SET sales = sales + $affiliate_commission WHERE affiliate_id = '$affiliate_id'");
    mysqli_query($conn, "UPDATE vendor SET sales = sales + $vendor_commission WHERE user_id = '$vendor_id'");

    $check = mysqli_query($conn, "SELECT * FROM course_commission");
    if (mysqli_num_rows($check) > 0) {
        mysqli_query($conn, "UPDATE course_commission SET amount = amount + $admin_commission");
    } else {
        mysqli_query($conn, "INSERT INTO course_commission (amount) VALUES ($admin_commission)");
    }

    // if(strpos($download_url, 'https://') !== 0){
    //     $download_url = 'https://' . ltrim($download_url, '/');
    // }
    $escaped_url = addslashes($download_url);


    // if a user buys the omg course
    if($pname == 'Online Money Guaranteed'){
        $customer_aff_id = sprintf('%05d', mt_rand(0, 99999));
        $customer_password = 'Givas1234';
        $hashed_customer_password = password_hash($customer_password, PASSWORD_BCRYPT);
        $login_link = "http://localhost/givas_v2/login";

        // before creating an account for him, make sure the email is not existing in the system already
        $check_customer_email = mysqli_query($conn, "SELECT * FROM user WHERE email = '$customer_email'");

        if(mysqli_num_rows($check_customer_email) == 0){
            // create an account for the customer
            $query = mysqli_query($conn, "INSERT INTO user(`affiliate_id`, `fname`, `lname`, `uname`, `email`, `entity`, `password`, `country`)VALUE('$customer_aff_id', '$customer_fname', '$customer_lname', '$customer_fname', '$customer_email', 'Individual', '$hashed_customer_password', 'Nigeria')");

            if($query){
               $title = "Free Affiliate Account 💃🏻💃🏻";
               require_once('../template/omgFreeAccount.template.php');
               $res = sendCustomEmail($customer_email, $customer_fname, $title, $body);

               if(!$res){
                   echo "<script>alert('Error sending vendor email');</script>";
               }
            }
        }

    }

     // Send email to affiliate
         $title = "New Sale Notification - Givas";
         require_once('../template/affSales.template.php');
         $result = sendCustomEmail($aff_email, $aff_uname, $title, $body);
            if (!$result) {
                echo "Failed to send email to affiliate.";
            }

        // send email to vendor
        require_once('../template/vendorSales.template.php');
        $res = sendCustomEmail($vendor_email, $vendor_uname, $title, $body);

        if(!$res){
            echo "<script>alert('Error sending vendor email');</script>";
        }

        // send email to customer
         
        $title = "$pname Purchase ✅";
        require_once('../template/customerPurchase.template.php');
        $response = sendCustomEmail($customer_email, $customer_fname, $title, $body);

        if(!$response){
            echo "<script>alert('Error sending customer email');</script>";
        }

      echo "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <title>Payment Success</title>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <style>
                    body, html {
                        margin: 0;
                        padding: 0;
                        height: 100vh;
                        overflow: hidden;
                        background: white;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        background-color: #f0f0f0;
                    }

                    #splash-screen {
                        width: 100%;
                        height: 100%;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    #splash-screen img {
                        max-width: 100px;
                        animation: zoomLoop 2s ease-in-out infinite;
                    }

                    @keyframes zoomLoop {
                        0% { transform: scale(1); }
                        50% { transform: scale(1.1); }
                        100% { transform: scale(1); }
                    }
                </style>
            </head>
            <body>
                <div id='splash-screen'>
                    <img src='https://givas.org/assets/images/Givas.png' alt='GIVAS Logo'>
                </div>

                <script>
                    // Show success toast
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: 'Payment successful!',
                        timer: 3000,
                        showConfirmButton: false,
                        timerProgressBar: true
                    });

                    // Redirect after toast ends
                    setTimeout(function() {
                      
                        window.location.href = '$escaped_url';
                    }, 3000);
                </script>
            </body>
            </html>";


      

        exit;


} else {
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'error',
        title: 'Payment verification failed!',
        timer: 4000,
        showConfirmButton: false,
        timerProgressBar: true
    });
    setTimeout(function() {
        window.location.href = 'retry_page.php';
    }, 3000);
    </script>";
    exit;
}
?>
