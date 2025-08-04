<?php
$title ="Admin Dashboard";
   require_once('./home_header.php');
   require_once('../inc/config/connection.php');


  $countUsers = "SELECT COUNT(*) AS total_users FROM user";
  $result = mysqli_query($conn, $countUsers);
  $user_row = mysqli_fetch_assoc($result);
  $user_count = $user_row['total_users'];


  // calculate the total amount for project

  $projectQuery = "SELECT SUM(amount) AS total_amount FROM project";
  $projectResult = mysqli_query($conn, $projectQuery);
  $project_row = mysqli_fetch_assoc($projectResult);
  $project_count = $project_row['total_amount'];



  // calculate the total amount for distribution funds and free account

  $fundQuery = "SELECT SUM(amount) AS total_free_account FROM  free_account";
  $fundResult = mysqli_query($conn, $fundQuery);
  $fund_row = mysqli_fetch_assoc($fundResult);
  $fund_count = $fund_row['total_free_account'];



  // get the total amount for gas fee in the gas_payment table

  $gasQuery = "SELECT SUM(amount) AS total_amount FROM gas_payment";
  $gasResult = mysqli_query($conn, $gasQuery);
  $gas_row = mysqli_fetch_assoc($gasResult);
  $gas_count = $gas_row['total_amount'];


  // get the total number of pending payout
  $payoutQuery = "SELECT COUNT(*) AS pending_payout FROM payout_request WHERE status = 'pending'";
  $payoutResult = mysqli_query($conn, $payoutQuery);
  $payout_row = mysqli_fetch_array($payoutResult);
  $payout_count = $payout_row['pending_payout'];


  // get the total amount of payouts
  $sql = "SELECT SUM(amount) AS total_payout FROM payout_request WHERE status = 'success'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $payout_total = $row['total_payout'];



  // get the total amount at extra
  $sql = "SELECT SUM(amount) AS total_extra FROM extra";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $givas_count = $row['total_extra'];
  
  
  
  
    // get the total number of pending kyc verification
  $kycQuery = "SELECT COUNT(*) AS pending_kyc FROM  kyc WHERE status = 'pending'";
  $kycResult = mysqli_query($conn, $kycQuery);
  $kyc_row = mysqli_fetch_array($kycResult);
  $kyc_count = $kyc_row['pending_kyc'];
  
  
  
//   get the status of the withdrawal
//   $statusSql = "SELECT * FROM withdrawal_balance WHERE amount > 30";
   $statusSql = "SELECT * FROM withdrawal_balance WHERE amount > 0";
   $statusResult = mysqli_query($conn, $statusSql);
   
   $status = 0; // Default value in case no record is found
    if ($statusRow = mysqli_fetch_assoc($statusResult)) {
        $status = $statusRow['status'];
    }
   
  //  get the total_number of users in pro plan
  $sql = "SELECT COUNT(*) AS total_pro_users FROM pro_users";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $pro_user_count = $row['total_pro_users'];

  // get the total entry_amount in the pro_users table
  $sql = "SELECT SUM(entery_amount) AS total_pro_amount FROM pro_users";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $pro_amount = $row['total_pro_amount'];
  
  
  
  // get the withdrawal status for pro users
  $sql = "SELECT * FROM pro_users";
  $res = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($res);
  $proWithdrawalStatus = $row['withdrawal_status']; 
  
  
     // get the total amount of approved charity funds
   $sql = "SELECT COALESCE(SUM(fund_amount), 0) AS total_charity FROM charity_fund WHERE status = 'Approved'";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
   $charity_total = $row['total_charity'];

  //  get the total amountfor course commision
  
  $commisionQuery = "SELECT SUM(amount) AS total_commision FROM  course_commission";
  $commisionResult = mysqli_query($conn, $commisionQuery);
  $commision_row = mysqli_fetch_assoc($commisionResult);
  $commision_count = $commision_row['total_commision'];
  
  
  
   
//   if($status == 0){
//       $status = 'Disabled';
//       $text = 'Disable';
//   }else{
//       $status = "Enabled";
//       $text = 'Enable';
//   };
?>
  <body>  
    <!-- loader starts-->
    <!-- <div class="loader-wrapper">
      <div class="loader"> 
        <div class="loader4"></div>
      </div>
    </div> -->
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php
        require_once('./home_navbar.php');
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
                  <h4><?=$title?> </h4>
                
                  <a class="btn btn-primary p-3 mt-4" href="./send_mail">Email Users</a>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> 
                        <svg class="stroke-icon">
                          <use href="./assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                        
                        
                     
                        
                   
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row size-column"> 
              <div class="col-xxl-12 box-col-12">
                <div class="row"> 
                  <a href='./users' class="col-xl-4 col-sm-6">
                    <div class="card o-hidden small-widget">
                      <div class="card-body total-project border-b-primary border-2"><span class="f-light f-w-500 f-14">All Users</span>
                        <div class="project-details"> 
                          <div class="project-counter"> 
                            <h2 class="f-w-600"><?=$user_count?></h2><span class="f-12 f-w-400"></span>
                          </div>
                          <div class="product-sub bg-primary-light">
                            <svg class="invoice-icon">
                              <use href="./assets/svg/icon-sprite.svg#color-swatch"></use>
                            </svg>
                          </div>
                        </div>
                        <ul class="bubbles">
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  
                  <?php 
                     if($privillege == "All"){
                         ?>
                              <div class="col-xl-4 col-sm-6">
                                <div class="card o-hidden small-widget">
                                  <div class="card-body total-Progress border-b-warning border-2"> <span class="f-light f-w-500 f-14">Sales Commision</span>
                                    <div class="project-details">
                                      <div class="project-counter">
                                        <h2 class="f-w-600">$ <?=number_format($commision_count, 2)?></h2><span class="f-12 f-w-400"></span>
                                      </div>
                                      <div class="product-sub bg-warning-light"> 
                                        <svg class="invoice-icon">
                                          <use href="./assets/svg/icon-sprite.svg#tick-circle"></use>
                                        </svg>
                                      </div>
                                    </div>
                                    <ul class="bubbles">
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-4 col-sm-6">
                                <div class="card o-hidden small-widget">
                                  <div class="card-body total-Progress border-b-warning border-2"> <span class="f-light f-w-500 f-14">Projects</span>
                                    <div class="project-details">
                                      <div class="project-counter">
                                        <h2 class="f-w-600">$ <?=number_format($project_count, 2)?></h2><span class="f-12 f-w-400"></span>
                                      </div>
                                      <div class="product-sub bg-warning-light"> 
                                        <svg class="invoice-icon">
                                          <use href="./assets/svg/icon-sprite.svg#tick-circle"></use>
                                        </svg>
                                      </div>
                                    </div>
                                    <ul class="bubbles">
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-4 col-sm-6">
                                <div class="card o-hidden small-widget">
                                  <div class="card-body total-Complete border-b-secondary border-2"><span class="f-light f-w-500 f-14">Distribution Fund</span>
                                    <div class="project-details">
                                      <div class="project-counter">
                                        <h2 class="f-w-600">$ <?=number_format($fund_count, 2)?></h2><span class="f-12 f-w-400"></span>
                                      </div>
                                      <div class="product-sub bg-secondary-light"> 
                                        <svg class="invoice-icon">
                                          <use href="./assets/svg/icon-sprite.svg#add-square"></use>
                                        </svg>
                                      </div>
                                    </div>
                                    <ul class="bubbles"> 
                                      <li class="bubble"> </li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"> </li>
                                      <li class="bubble"></li>
                                      <li class="bubble"> </li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"> </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-4 col-sm-6">
                                <div class="card o-hidden small-widget">
                                  <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Gas Fee</span>
                                    <div class="project-details"> 
                                      <div class="project-counter">
                                        <h2 class="f-w-600">$ <?=number_format($gas_count, 2)?></h2><span class="f-12 f-w-400"></span>
                                      </div>
                                      <div class="product-sub bg-light-light"> 
                                        <svg class="invoice-icon">
                                          <use href="./assets/svg/icon-sprite.svg#edit-2"></use>
                                        </svg>
                                      </div>
                                    </div>
                                    <ul class="bubbles"> 
                                      <li class="bubble"> </li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
            
                              <div class="col-xl-4 col-sm-6">
                                <div class="card o-hidden small-widget">
                                  <div class="card-body total-Complete border-b-secondary border-2"><span class="f-light f-w-500 f-14">Total Payout</span>
                                    <div class="project-details">
                                      <div class="project-counter">
                                        <h2 class="f-w-600">$ <?=number_format($payout_total, 2)?></h2><span class="f-12 f-w-400"></span>
                                      </div>
                                      <div class="product-sub bg-secondary-light"> 
                                        <svg class="invoice-icon">
                                          <use href="./assets/svg/icon-sprite.svg#add-square"></use>
                                        </svg>
                                      </div>
                                    </div>
                                    <ul class="bubbles"> 
                                      <li class="bubble"> </li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"> </li>
                                      <li class="bubble"></li>
                                      <li class="bubble"> </li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"> </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="col-xl-4 col-sm-6">
                                <div class="card o-hidden small-widget">
                                  <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Pending Payout</span>
                                    <div class="project-details"> 
                                      <div class="project-counter">
                                        <h2 class="f-w-600"><?=$payout_count?></h2><span class="f-12 f-w-400"></span>
                                      </div>
                                      <div class="product-sub bg-light-light"> 
                                        <svg class="invoice-icon">
                                          <use href="./assets/svg/icon-sprite.svg#edit-2"></use>
                                        </svg>
                                      </div>
                                    </div>
                                    <ul class="bubbles"> 
                                      <li class="bubble"> </li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-4 col-sm-6">
                                <div class="card o-hidden small-widget">
                                  <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Givas</span>
                                    <div class="project-details"> 
                                      <div class="project-counter">
                                        <h2 class="f-w-600">$ <?=number_format($givas_count, 2)?></h2><span class="f-12 f-w-400"></span>
                                      </div>
                                      <div class="product-sub bg-light-light"> 
                                        <svg class="invoice-icon">
                                          <use href="./assets/svg/icon-sprite.svg#edit-2"></use>
                                        </svg>
                                      </div>
                                    </div>
                                    <ul class="bubbles"> 
                                      <li class="bubble"> </li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-4 col-sm-6">
                                <div class="card o-hidden small-widget">
                                  <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Pending Verification</span>
                                    <div class="project-details"> 
                                      <div class="project-counter">
                                        <h2 class="f-w-600"><?=$kyc_count?></h2><span class="f-12 f-w-400"></span>
                                      </div>
                                      <div class="product-sub bg-light-light"> 
                                        <svg class="invoice-icon">
                                          <use href="./assets/svg/icon-sprite.svg#edit-2"></use>
                                        </svg>
                                      </div>
                                    </div>
                                    <ul class="bubbles"> 
                                      <li class="bubble"> </li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-4 col-sm-6">
                                <div class="card o-hidden small-widget">
                                  <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Pro Users</span>
                                    <div class="project-details"> 
                                      <div class="project-counter">
                                        <h2 class="f-w-600"><?=$pro_user_count?></h2><span class="f-12 f-w-400"></span>
                                      </div>
                                      <div class="product-sub bg-light-light"> 
                                        <svg class="invoice-icon">
                                          <use href="./assets/svg/icon-sprite.svg#edit-2"></use>
                                        </svg>
                                      </div>
                                    </div>
                                    <ul class="bubbles"> 
                                      <li class="bubble"> </li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-4 col-sm-6">
                                <div class="card o-hidden small-widget">
                                  <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Pro Plan Amount</span>
                                    <div class="project-details"> 
                                      <div class="project-counter">
                                        <h2 class="f-w-600">$ <?=number_format($pro_amount, 2)?></h2><span class="f-12 f-w-400"></span>
                                      </div>
                                      <div class="product-sub bg-light-light"> 
                                        <svg class="invoice-icon">
                                          <use href="./assets/svg/icon-sprite.svg#edit-2"></use>
                                        </svg>
                                      </div>
                                    </div>
                                    <ul class="bubbles"> 
                                      <li class="bubble"> </li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                               <div class="col-xl-4 col-sm-6">
                                <div class="card o-hidden small-widget">
                                  <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Charity Funds</span>
                                    <div class="project-details"> 
                                      <div class="project-counter">
                                        <h2 class="f-w-600">$ <?=number_format($charity_total, 2)?></h2><span class="f-12 f-w-400"></span>
                                      </div>
                                      <div class="product-sub bg-light-light"> 
                                        <svg class="invoice-icon">
                                          <use href="./assets/svg/icon-sprite.svg#edit-2"></use>
                                        </svg>
                                      </div>
                                    </div>
                                    <ul class="bubbles"> 
                                      <li class="bubble"> </li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                      <li class="bubble"></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                         <?php
                     }else{
                          echo "";
                     }
                  ?>
                
                </div>
              </div>
             
              <div class="col-xxl-3 d-xxl-block d-none activity-group box-col-none mt-5">
              <div class="col-xl-12 col-md-6">
                    <div class="card overflow-hidden"> 
                      <div class="card-body pt-0 project-ideas-card">
                        <div class="project-card">
                       
                         
                          </div>
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
            function showHideWithdrawal(newStatus) {
                  let code;
                  if(newStatus == 'Enable'){
                       code = 0;
                  }else{
                      code = 1; 
                  }
                Swal.fire({
                title: `${newStatus} Payout`,
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonText: `Yes, ${newStatus}`,
                cancelButtonText: "Cancel",
                customClass: {
                confirmButton: "swal-confirm-btn",
                cancelButton: "swal-cancel-btn",
                },
                }).then((result) => {
                    if (result.isConfirmed) {
                              window.location.href = `./inc/enableWithdrawal.php?status=${code}`;
                     }
                });
                }
                
            function showHideProWithdrawal(newStatus) {
                  let code;
                if(newStatus == 'Enable'){
                       code = 0;
                  }else{
                      code = 1; 
                  }
                    Swal.fire({
                    title: `${newStatus} Pro Plan Payout`,
                    text: "You won't be able to revert this!",
                    showCancelButton: true,
                    confirmButtonText: `Yes, ${newStatus}`,
                    cancelButtonText: "Cancel",
                    customClass: {
                    confirmButton: "swal-confirm-btn",
                    cancelButton: "swal-cancel-btn",
                },
                }).then((result) => {
                    if (result.isConfirmed) {
                              window.location.href = `./inc/enableProWithdrawal?status=${code}`;
                     }
                });
            }
        </script>
        
        <style>
            .swal-confirm-btn {
            background-color: #006666 !important;
            }
            .swal-cancel-btn {
            background-color: red !important;
            }
        </style>
        <!-- footer start-->
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