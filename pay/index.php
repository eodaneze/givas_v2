<?php
require_once('../inc/config/connection.php');


function redirectWithAlert($message) {
    $encodedMsg = urlencode($message);
    header("Location: middleware/?msg=$encodedMsg");
    exit;
}

// Check for required GET parameters
if (!isset($_GET['p']) || !isset($_GET['a'])) {
    redirectWithAlert('Missing product or affiliate ID.');
}

$product_id = $_GET['p'];
$affiliate_id = $_GET['a'];

// Check if product exists
$product_result = mysqli_query($conn, "SELECT * FROM products WHERE product_id = '$product_id'");
if (!$product_result || mysqli_num_rows($product_result) == 0) {
    redirectWithAlert('Invalid product selected.');
}
$product_row = mysqli_fetch_assoc($product_result);
$pname = $product_row['pname'];
$vendor_id = $product_row['vendor_id'];

// get the user using the vendor_id
$vendor_result = mysqli_query($conn, "SELECT * FROM user WHERE user_id = '$vendor_id'");
if (!$vendor_result || mysqli_num_rows($vendor_result) == 0) {
    redirectWithAlert('Invalid vendor for the selected product.');
}
$vendor_row = mysqli_fetch_assoc($vendor_result);
$vendor_name = $vendor_row['fname'] . ' '. $vendor_row['lname'];

// Check if affiliate exists
$affiliate_result = mysqli_query($conn, "SELECT * FROM user WHERE affiliate_id = '$affiliate_id'");
if (!$affiliate_result || mysqli_num_rows($affiliate_result) == 0) {
    redirectWithAlert('Invalid affiliate ID.');
}

// Now load the rest only if checks pass
$title = "$pname By $vendor_name ::. Givas Payment";
require_once('./home_header.php');
require_once('./market-place.php');
require_once('./function/countries.php');

$pname = $product_row['pname'];

$words = explode(' ', $pname); // Split the string by space
$initials = '';

foreach ($words as $word) {
    if (!empty($word)) {
        $initials .= strtoupper($word[0]); // Get the first character and convert to uppercase
    }
}

$vendor_id = $product_row['vendor_id'];
$image = $product_row['image'];


?>


<style>
      @media (max-width:700px) {
        .all-payment-right-content {
            margin: 0 30px;
        }
    }
</style>

  <body>  
   
    <nav class="pay-nav shadow">
        <div class="pay-nav-content">
            <img width="50" src="./assets/images/Givas.png" alt="">
        </div>
    </nav>

    <section class="all-payment">
        <div class="all-payment-content">
            <div class="all-payment-left p-5" style="background-color: #f0f0f0;">
                <h1 class="text-uppercase mb-3" style="color: #555; font-size: 50px"><?=$pname?>(<?=$initials?>)</h1>
                <h5 class="mb-3" style="color: #777; font-size: 25px">By <?=$vendor_name?></h5>
                <img src="<?=$image?>" alt="" class="img-fluid" style="width: 100%; height: 400px; object-fit: cover; border-radius: 10px;">
            </div>
            <div class="all-payment-right">
                
                <div class="all-payment-right-content">
                    <div id="steps">
                                <form id="paymentForm2">
                                    <!-- first step -->
                                        <div class="form-step active">
                                                <h5>80% Complete</h5>
                                                <div class="outer-line">
                                                    <div class="inner-line"></div>
                                                </div>
                                                    <div class="payment-details pt-5">
                                                        <h1 class="fs-2">Payment Details</h1>
                                                        <p>Complete your details by providing your payment details</p>
                                                        
                                                            <div class="payment-input py-4">
                                                                    <label for="fullname">Fullname</label>
                                                                    <input type="text" class="p-3 form-control" placeholder="Fullname" name="fname" id="fname">
                                                                    <label for="phoneNumber">Phone Number</label>
                                                                    <input type="tel" class="p-3" placeholder="Phone Number" name="phone" id="phone">
                                                                    <label for="email">Email Address</label>
                                                                    <input type="email" class="p-3" placeholder="Email Address" name="email" id="email">
                                                                    <input type="hidden" name="product_id" id="product_id" value="<?=$product_id?>">
                                                                    <input type="hidden" name="affiliate_id" id="affiliate_id" value="<?=$affiliate_id?>">
                                                                    <label for="country">Country</label>
                                                                    
                                                                    <select class="p-3" name="country" id="country">
                                                                        <option value="" disabled selected>Select Country....</option>
                                                                        <?php foreach ($flutterwave_countries as $code => $country): ?>
                                                                            <option value="<?= $code ?>"><?= $country['country'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                    <div class="pay-next-cta">
                                                                        <button type="button" class="accept-cta mb-2" id="nextBtn">
                                                                            Next
                                                                        </button>
                                                                        <p><i class="fa fa-lock"></i> Payments are secured and encrypted</p>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                </div>
                                    </form>
                                 <!-- end of first step -->

                                    
                                  
                                   <!----------------------  -->
                                   <?php if (isset($_SESSION['form_data'])): ?>
                                        <?php 
                                            $fullname = $_SESSION['form_data']['fullname'];
                                            $email = $_SESSION['form_data']['email'];
                                            $phone = $_SESSION['form_data']['phone'];
                                            $country = $_SESSION['form_data']['country'];
                                            $product_id = $_SESSION['form_data']['product_id'];
                                            $affiliate_id = $_SESSION['form_data']['affiliate_id'];

                                            // Use the product id to find the price
                                            $product_query = mysqli_query($conn, "SELECT * FROM products WHERE product_id = '$product_id'");
                                            $product_row = mysqli_fetch_assoc($product_query);
                                            $price = $product_row['price'];
                                            $currency = $flutterwave_countries[$country]['currency'];
                                            $to_usd = $flutterwave_countries[$country]['from_usd'];
                                            $price_in_usd = $price * $to_usd;
                                            $price_in_usd = number_format($price_in_usd, 2);
                                            $price = number_format($price, 2);

                                            // Get payment methods for country
                                            $payment_methods = $flutterwave_countries[$country]['payment_methods'];
                                            $payment_methods_list = implode(', ', $payment_methods);
                                            $country_name = strtoupper($flutterwave_countries[$country]['country']);
                                        ?>

                                        <form id="paymentForm">
                                            <input type="hidden" name="fullname" value="<?= htmlspecialchars($fullname) ?>">
                                            <input type="hidden" name="email" value="<?= htmlspecialchars($email) ?>">
                                            <input type="hidden" name="phone" value="<?= htmlspecialchars($phone) ?>">
                                            <input type="hidden" name="country" value="<?= htmlspecialchars($country) ?>">
                                            <input type="hidden" name="currency" value="<?= htmlspecialchars($currency) ?>">
                                            <input type="hidden" name="price" value="<?= htmlspecialchars($price) ?>">
                                            <input type="hidden" name="price_in_usd" value="<?= htmlspecialchars($price_in_usd) ?>">
                                            <input type="hidden" name="product_id" value="<?= htmlspecialchars($product_id) ?>">
                                            <input type="hidden" name="affiliate_id" value="<?= htmlspecialchars($affiliate_id) ?>">

                                            <div class="form-step">
                                                <h5>90% Complete</h5>
                                                <div class="outer-line2">
                                                    <div class="inner-line2"></div>
                                                </div>
                                                <div class="payment-details pt-3">
                                                    <h1 class="text-uppercase mb-3" style="color: #555; font-size: 25px">
                                                        <?= $pname ?>(<?= $initials ?>)
                                                    </h1>

                                                    <div class="row mb-4">
                                                        <div class="col-6">
                                                            <h6>Total</h6>
                                                        </div>
                                                        <div class="col-6">
                                                            <h6>$<?= $price ?>(<?= $currency ?> <?= $price_in_usd ?>)</h6>
                                                        </div>
                                                    </div>

                                                    <div class="pay-input border p-3 mb-4">
                                                        <div class="pay-select">
                                                            <p><input type="radio" checked name="myRadio" id="option-3"></p>
                                                            <label for="option-3"></label>
                                                        </div>
                                                        <div>
                                                            <h4>Pay with <?= $currency ?> (<?= $country_name ?>)</h4>
                                                            <p><?= $payment_methods_list ?></p>
                                                        </div>
                                                    </div>

                                                    <p>
                                                        Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.
                                                    </p>

                                                    <div class="pay-cancel-cta">
                                                        <button type="button" id="payButton" class="accept-cta">
                                                            <span id="payBtnText">Pay</span>
                                                            <span id="paySpinner" class="spinner-border spinner-border-sm d-none"></span>
                                                        </button>

                                                        <button type="button" class="cancel-cta" onclick="changeStep(-1)">Back</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    <?php endif; ?>

                                   <!----------------------  -->
                            </div>
                                    
                       </div>
                     
                 </div>
                </div>
            </div>
            </div>
        </div>
    </section>

<script>
  let currentStep = 0; // Declare globally

  function changeStep(stepChange) {
    const steps = document.querySelectorAll('.form-step');

    console.log("The step is: "+steps);
    
    steps[currentStep].classList.remove('active');
    currentStep += stepChange;

    if (currentStep < 0) currentStep = 0;
    if (currentStep > 0 && currentStep < steps.length) currentStep = steps.length - 1;

    // Save current step to localStorage
    localStorage.setItem('currentStep', currentStep);

    // Reload the page after saving step
    window.location.reload();
  }

  document.addEventListener('DOMContentLoaded', function () {
    const steps = document.querySelectorAll('.form-step');
    const savedStep = parseInt(localStorage.getItem('currentStep'));

    if (!isNaN(savedStep) && savedStep >= 0 && savedStep < steps.length) {
      steps.forEach(step => step.classList.remove('active')); // remove all active steps
      currentStep = savedStep;
      steps[currentStep].classList.add('active'); // activate saved step
    } else {
      steps[0].classList.add('active');
    }
  });
</script>



<script>
document.getElementById('payButton').addEventListener('click', function () {
    const payBtnText = document.getElementById('payBtnText');
    const paySpinner = document.getElementById('paySpinner');

    payBtnText.textContent = 'Processing...';
    paySpinner.classList.remove('d-none');

    setTimeout(() => {
        const formData = new FormData(document.getElementById('paymentForm'));

        fetch('./inc/init_flutterwave_payment', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.status === 'success') {
                window.location.href = data.payment_link;
            } else {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'error',
                    title: data.message,
                    timer: 4000,
                    showConfirmButton: false,
                    timerProgressBar: true
                });
                payBtnText.textContent = 'Pay';
                paySpinner.classList.add('d-none');
            }
        })
        .catch(() => {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                title: 'Network error, try again!',
                timer: 4000,
                showConfirmButton: false,
                timerProgressBar: true
            });
            payBtnText.textContent = 'Pay';
            paySpinner.classList.add('d-none');
        });

    }, 3000);
});
</script>





<?php 
   require_once('./script.php')
?>

  </body>
</html>

