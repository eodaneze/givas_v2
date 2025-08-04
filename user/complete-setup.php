<?php
  $title = "Complete Setup";
   require_once('./home_header.php');
   
   
   ?>
<link rel="stylesheet" href="./assets/css/index.css">

<body>  
  
  
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php
        require_once('./home_navbar.php');
        require_once('./model/contact-agent.php')
      ?>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
           <?php 
              require_once('./sidebar.php')
           ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h4>
                     <?= $title ?></h4>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> 
                        <svg class="stroke-icon">
                          <use href="./assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active"><?=$title?></li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
                    
               
                 <div class="d-flex align-items-center justify-content-center">
                       <div class="row">
                           <div class="col-lg-12 bg-white pro-main p-4 rounded-3 border">
                                 <div class="arrow-back">
                                    <a href="" class="back-icon">
                                        <i class="fa fa-arrow-left"></i>

                                    </a>
                                    <p>Back to Plans</p>
                                 </div>

                                 <div class="all-pro rounded-4">
                                   <div class="pro-content">
                                        <div class="pro-top">
                                            <h4>Pro</h4>
                                            <p>Activate Pro Plan</p>
                                        </div>
                                        <div class="pro-down">
                                             <h4>$20</h4>
                                        </div>
                                   </div>
                                   <div class="my-3">
                                      <h5>Have a coupon code from us? <a href="#" id="toggleCouponForm" class="">Click Here</a></h5>
                                   </div>

                                 </div>
                                 <div id="couponFormSection" class="fold-box">
                                    <form id="couponForm" class="mt-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label>Coupon Code</label>
                                                    <a href="#" id="hideCouponForm"><i class="fa fa-eye-slash"></i> Hide</a>
                                                </div>
                                                <input type="text" name="coupon_code" id="coupon_code" class="coupon-input" placeholder="Enter your coupon code" required>
                                                <input type="hidden" id="user_id" value='<?=$user_id?>'>
                                                <input type="hidden" name="email"  value='<?=$email?>'>
                                                <input type="hidden" name="uname"  value='<?=$uname?>'>
                                            </div>
                                            <div class="col-lg-12 mt-4">
                                                <button type="submit" class="btn-pri button-reg" id="applyBtn">
                                                    Apply Coupon
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <!-- payment option -->
                                <div id="paymentOptions" class="mt-4">
                                    <p>Select any of the buttons below to make payment ⏬⏬</p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <button type="button" class="btn-pri button-reg" id="openModal">
                                                Direct Payment
                                            </button>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="button" class="btn-main button-reg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Contact Agent
                                            </button>
                                        </div>
                                    </div>
                                </div>
                           </div>
                       </div>
                 </div>

              
           
          </div>
          <!-- Container-fluid Ends-->
        </div>

    
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const toggleLink = document.getElementById('toggleCouponForm');
                const hideLink = document.getElementById('hideCouponForm');
                const formSection = document.getElementById('couponFormSection');
                const paymentOptions = document.getElementById('paymentOptions');

                toggleLink.addEventListener('click', function (e) {
                    e.preventDefault();
                    formSection.classList.add('show');
                    paymentOptions.style.display = 'none';
                });

                hideLink.addEventListener('click', function (e) {
                    e.preventDefault();
                    formSection.classList.remove('show');
                    paymentOptions.style.display = 'block';
                });
            });
        </script>


        <script src="./assets/js/main.js"></script>
       <?php
           require_once('./model/proPlan-directPayment.modal.php');
          require_once('./footer.php');
          require_once('./sweet-alert.php');
          require_once('./script.php')
         ?>

         <script src="./assets/js/upload-proProof.js"></script>


         <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

<script>
document.getElementById('couponForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const couponCode = document.getElementById('coupon_code').value.trim();
    const applyBtn = document.getElementById('applyBtn');

    if (couponCode === '') {
        alertify.error('Please enter a coupon code');
        return;
    }

    // Change button text + spinner
    applyBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Processing, please wait...';
    applyBtn.disabled = true;

    // Wait for 2 seconds then send AJAX
    setTimeout(() => {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', './inc/apply_coupon', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            applyBtn.innerHTML = 'Apply Coupon';
            applyBtn.disabled = false;

            if (xhr.status === 200) {
                let res = JSON.parse(xhr.responseText);
                if (res.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: res.message,
                        confirmButtonColor: '#006666',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href = './';
                    });
                } else {
                    alertify.error(res.message);
                }
            } else {
                alertify.error('Something went wrong. Try again.');
            }
        };
        xhr.send('coupon_code=' + encodeURIComponent(couponCode));
    }, 2000);
});
</script>

      </div>
    </div>
  
  </body>
</html>


<div class="container-fluid">
    
</div>