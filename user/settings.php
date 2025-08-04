<?php
  $title = "Settings";
   require_once('./home_header.php');
  
?>

 <style>
    .btn-active {
      background-color: #006666 !important;
      color: white;
    }
  </style>
 
  <body>  
    
    
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php
        require_once('./home_navbar.php');
        require_once('./model/edit-profile.php');
        require_once('./model/kyc.php');
        require_once('./model/update-wallet.php');
        require_once('./model/update-password.php');
        require_once('./model/update_bankDetails.php');
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
           <div class="container-fluid mt-4">
              <div class="mb-3 border-bottom pb-4">
                <button class="btn btn-active" id="personalDetailsBtn">Personal Details</button>
                <button class="btn" id="walletBtn">Wallet</button>
                <?php 
                  if($country == "Nigeria" || $country == "nigeria"){
                    echo '<button class="btn" id="bankBtn">Bank Details</button>';
                  } else {
                    echo '<button class="btn" id="bankBtn" disabled>Bank Details</button>';
                  }
                ?>
              
                <button class="btn" id="passwordBtn">Security</button>
                <button class="btn" id="kycBtn">KYC</button>
              </div>
              <div id="personalDetailsSection">
                <!-- Show personal details here -->
                <div  class="mt-4 border p-4">
                    <div class="row mb-4">
                        <div class="col-lg-8">
                          <h4 class="mb-3">Personal Details</h4>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Profile</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <h6><?=$fullname?></h6>
                            <p>Fullname</p>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <h6><?=$email?></h6>
                            <p>Email</p>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <h6><?=$uname?></h6>
                            <p>Username</p>
                        </div>
                        <div class="col-lg-4">
                            <h6><?=$phone?></h6>
                            <p>Phone Number</p>
                        </div>
                        <div class="col-lg-4">
                            <h6><?=$country?></h6>
                            <p>Country</p>
                        </div>
                        <div class="col-lg-4">
                            <h6><?=$entity?></h6>
                            <p>Entity</p>
                        </div>
                    </div>
                </div>
              </div>
              <div id="walletSection" style="display: none;">
                  <div class="mt-4 border p-4">
                    <div class="row mb-4">
                          <div class="col-lg-8">
                            <h4 class="mb-3">Wallet</h4>
                            <p>Update your wallet details</p>
                          </div>
                          <div class="col-lg-4">
                              <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Update Wallet</button>
                          </div>

                          <div class="row mt-5">
                              <div class="col-lg-6">
                                   <h5><?=$wallet_name?></h5>
                                   <p>Wallet Name</p>
                              </div>
                              <div class="col-lg-6">
                                   <h5><?=$address?></h5>
                                   <p>Wallet Address</p>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6 mb-4">
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                  

                                </div>
                                <div class="col-lg-12 mb-4">
                                    
                                </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-6">
                               <img src="./assets/images/login/2.jpg" class="img-fluid" alt="">
                          </div>
                        
                      </div>
                  </div>
              </div>
              <div id="bankSection" style="display: none;">
                  <div class="mt-4 border p-4">
                    <div class="row mb-4">
                          <div class="col-lg-8">
                            <h4 class="mb-3">Bank Details</h4>
                            <p>Update your Bank Details</p>
                          </div>
                          <div class="col-lg-4">
                              <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">Update Bank</button>
                          </div>

                          <div class="row mt-5">
                              <div class="col-lg-4">
                                   <h5><?=$bank_name?></h5>
                                   <p>Bank Name</p>
                              </div>
                              <div class="col-lg-4">
                                   <h5><?=$account_name?></h5>
                                   <p>Account Name</p>
                              </div>
                              <div class="col-lg-4">
                                   <h5><?=$account_no?></h5>
                                   <p>Account Number</p>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6 mb-4">
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                  

                                </div>
                                <div class="col-lg-12 mb-4">
                                    
                                </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-6">
                               <img src="./assets/images/login/2.jpg" class="img-fluid" alt="">
                          </div>
                        
                      </div>
                  </div>
              </div>
              <div id="passwordSection" style="display: none;">
                
                  <div class="mt-4">
                      <h5>Security</h5>
                      <div class="row border rounded-3 p-4 mt-4">
                         <div class="col-lg-8">
                              <h4>Change Password</h4>
                              <p>Manage and update your account password</p>
                         </div>
                         <div class="col-lg-4">
                         <input type="hidden" id="userId" name="user_id" value="<?= $user_id ?>" />
                             <button class="btn btn-outline-primary" id="resetPasswordBtn">Reset Password</button>
                         </div>
                      </div>
                  </div>
              </div>
              <div id="kycSection" style="display: none;">
              <div class="mt-4 border p-4">
                    <div class="row mb-4">
                          <div class="col-lg-8">
                            <h4 class="mb-3">Identification Document</h4>
                            <p>Upload a valid identification document</p>
                          </div>
                          <div class="col-lg-4">
                              <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">Verify KYC</button>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6 mb-4">
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                  

                                </div>
                                <div class="col-lg-12 mb-4">
                                    
                                </div>
                              
                            </div>
                          </div>
                          <div class="col-lg-6">
                               <img src="./assets/images/login/2.jpg" class="img-fluid" alt="">
                          </div>
                        
                      </div>
                  </div>
              </div>
            </div>
          <!-- Container-fluid Ends-->
        </div>

       



<script src="./assets/js/update-password.js"></script>




<script>
  

</script>



        <style>
            .swal-confirm-btn {
            background-color: #006666 !important;
            }
            .swal-cancel-btn {
            background-color: red !important;
            }
        </style>

        <script src="./assets/js/main.js"></script>
       <?php
          require_once('./footer.php');
          require_once('./sweet-alert.php')
         ?>
      </div>
    </div>
   <?php 
     require_once('./script.php')
   ?>
  </body>
</html>


<div class="container-fluid">
    
</div>


