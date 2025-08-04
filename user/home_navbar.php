<?php
  require_once('../inc/config/connection.php');
  require_once('./function/greetings.php');
  require_once('./helper/sendMail.php');
   if(isset($_SESSION['userId'])){
      $user_id = $_SESSION['userId'];
      $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
      $res = mysqli_query($conn, $sql);
      if($user_row = mysqli_fetch_assoc($res)){
          $fname = $user_row['fname'];
          $lname = $user_row['lname'];
          $uname = $user_row['uname'];
          $email = $user_row['email'];
          $entity = $user_row['entity'];
          $country = $user_row['country'];
          $phone = $user_row['phone'];
          $account_type = $user_row['account_type'];
          $affiliate_id = $user_row['affiliate_id'];

          

          $isAffiliate = true;
          
          
          $isEligiable = false;
          
             $isPro = false;
            // check if the user is in a basic or pro Plan
            $planSql =  "SELECT * FROM pro_users WHERE user_id = '$user_id'";
            $planResult = mysqli_query($conn, $planSql);
            if(mysqli_num_rows($planResult) > 0){
                 $plan = "Pro Plan";
                  $planRow = mysqli_fetch_assoc($planResult);
                  $referral_no = $planRow['referral_no'];
                  $ref_bonus = $planRow['ref_bonus'];
                  $pro_withdrawal_status = $planRow['withdrawal_status'];
                  
                  $isPro = true;
                  
                   $userRow = mysqli_fetch_assoc($res);
              if($referral_no >= 50){
                $isEligiable = true;
              }
             
               if ($referral_no == 50) {
                        if ($row['referral_50_email_sent'] == 0) {
                            $title1 = "Congratulations on reaching 50 referrals!";
                            $fundAmount = 100;
                    
                            require_once('../template/fundPortal.template.php');
                            $res = sendCustomEmail($email, $uname, $title1, $body);
                    
                            if ($res) {
                                $stmt = $conn->prepare("UPDATE user SET referral_50_email_sent = 1 WHERE user_id = ?");
                                $stmt->bind_param("i", $user_id);
                                $stmt->execute();
                            } else {
                                echo "<script>alert('Failed to send email. Please try again later.')</script>";
                            }
                        }
                        }elseif ($referral_no == 100) {
                        if ($row['referral_100_email_sent'] == 0) {
                            $title1 = "Congratulations on reaching 100 referrals!";
                            $fundAmount = 200;
                    
                            require_once('../template/fundPortal.template.php');
                            $res = sendCustomEmail($email, $uname, $title1, $body);
                    
                            if ($res) {
                                $stmt = $conn->prepare("UPDATE user SET referral_100_email_sent = 1 WHERE user_id = ?");
                                $stmt->bind_param("i", $user_id);
                                $stmt->execute();
                            } else {
                                echo "<script>alert('Failed to send email. Please try again later.')</script>";
                            }
                    }
                }


            }else{
                 $plan = "Basic Plan";
            }
            
             // send a mail to the user when he has reached 50 referrals

            // ALTER TABLE users ADD COLUMN referral_50_email_sent TINYINT(1) DEFAULT 0;

              // Check if user has 50 referrals and email hasn't been sent yet
             
          // count the number of email that is associated with the email of the logged in user
          $countSql = "SELECT COUNT(*) AS total_accounts FROM user WHERE email = '$email' AND account_type = 'secondary'";
          $count_result = mysqli_query($conn, $countSql);
          $count_row = mysqli_fetch_assoc($count_result);
          $count_account = $count_row['total_accounts'];


        
          //Get the first account created for this email
          $firstAccountSql = "SELECT user_id FROM user WHERE email = '$email' ORDER BY user_id ASC LIMIT 1";
          $firstAccountRes = mysqli_query($conn, $firstAccountSql);

          if($firstRow = mysqli_fetch_assoc($firstAccountRes)) {
             $firstUserId = $firstRow['user_id'];

              // Reset all accounts of this email to "secondary" to avoid duplicates
            mysqli_query($conn, "UPDATE user SET account_type = 'secondary' WHERE email = '$email'");

             // Step 4: Update the first account to "primary"
             $updateSql = "UPDATE user SET account_type = 'primary' WHERE user_id = '$firstUserId'";
             mysqli_query($conn, $updateSql);

          }

          if($phone == ""){
              $phone = "N/A";
          }


          // get the wallet details for a user
          $walletQuery = "SELECT * FROM wallet WHERE user_id = '$user_id'";
          $walletResult = mysqli_query($conn, $walletQuery);
          
          if (mysqli_num_rows($walletResult) > 0) {
              $row = mysqli_fetch_assoc($walletResult);
              $wallet_name = $row['wallet_name'] ?: 'Null';
              $address = $row['address'] ?: 'Null';
          } else {
              $wallet_name = 'Null';
              $address = 'Null';
          }
          
          
          // get the bank details for a user
          $bankQuery = "SELECT * FROM bank_details WHERE user_id = '$user_id'";
          $bankResult = mysqli_query($conn, $bankQuery);
          if (mysqli_num_rows($bankResult) > 0) {
              $row = mysqli_fetch_assoc($bankResult);
              $bank_name = $row['bank_name'] ?: 'Null';
              $account_no = $row['account_no'] ?: 'Null';
              $account_name = $row['account_name'] ?: 'Null';
          } else {
              $bank_name = 'Null';
              $account_no = 'Null';
              $account_name = 'Null';
          }

          $fullname = $fname." ".$lname;

          // get the first letter of the first name and last name
          $first_letter = substr($fname, 0, 1);
          $last_letter = substr($lname, 0, 1);
          $joinName = $first_letter.$last_letter;


          // use the user_id to get the  withdrawal_balance in the withdrawal_balance table
          $sql = "SELECT * FROM withdrawal_balance WHERE user_id = '$user_id'";
          $res = mysqli_query($conn, $sql);
          if($row = mysqli_fetch_assoc($res)){
              $withdrawal_balance = $row['amount'];
              $withdrawal_status = $row['status'];
          }else{
              $withdrawal_balance = 0;
          }


          $tables = [
            'givas_phase_1',
            'givas_phase_2',
            'success_phase_1',
            'success_phase_2',
            'abundance_phase_1',
            'abundance_phase_2'
        ];
          $entery_amount = null;
          $phase = null;
          $total_phase_earning = null;
          $current_table = null;

          foreach ($tables as $table) {
            $sql = "SELECT * FROM $table WHERE user_id = '$user_id'";
            $res = mysqli_query($conn, $sql);

            if (!$res) {
              die("Query failed for table $table: " . mysqli_error($conn));
          }
        
            if ($row = mysqli_fetch_assoc($res)) {
                // User ID found in this table
                $entery_amount = $row['entry_amount'];
                $phase = $row['phase'];
                $total_phase_earning = $row['total_phase_earning'];
                $current_table = $table;
                
                


                $position_sql = "SELECT COUNT(*) AS position FROM $table WHERE id <= " . $row['id'];
                $position_res = mysqli_query($conn, $position_sql);
                $position_row = mysqli_fetch_assoc($position_res);
                $user_position = $position_row['position'];
                break; // Exit the loop once the user is found
            }
          }
       

          // use the user_id and uname to get the amount in the gas_payment table
          $sql = "SELECT * FROM gas_payment WHERE user_id = '$user_id' AND uname = '$uname'";
          $res = mysqli_query($conn, $sql);
          if($row = mysqli_fetch_assoc($res)){
              $gasFee = $row['amount'];
          }else{
              $gasFee = 0;
          }

          // 

            // get the total amount of pending payout for an affiliate
              $payoutSql = "SELECT SUM(amount) AS total_pending FROM payout_request WHERE user_id = $user_id AND status = 'pending' AND role = 'Affiliate'";
              $result = mysqli_query($conn, $payoutSql);


              if ($result) {
                $row = mysqli_fetch_assoc($result);
                $aff_total_pending = $row['total_pending'] ?? 0; 
              }
              // get the total amount of success payout for an affiliate 
              $payoutSql2 = "SELECT SUM(amount) AS total_success FROM payout_request WHERE user_id = $user_id AND status = 'success' AND role = 'Affiliate'";
              $result2 = mysqli_query($conn, $payoutSql2);


              if ($result2) {
                $row2 = mysqli_fetch_assoc($result2);
                $aff_total_success = $row2['total_success'] ?? 0; 
              }

              
            // get the total amount of pending payout for a vendor
              $vendor_pendingPayoutSql = "SELECT SUM(amount) AS vendor_total_pending FROM payout_request WHERE user_id = $user_id AND status = 'pending' AND role = 'Vendor'";
              $result = mysqli_query($conn, $vendor_pendingPayoutSql);


              if ($result) {
                $row = mysqli_fetch_assoc($result);
                $vendor_total_pending = $row['vendor_total_pending'] ?? 0; 
              }
            // get the total amount of pending payout for a vendor
              $vendor_successPayoutSql = "SELECT SUM(amount) AS vendor_total_success FROM payout_request WHERE user_id = $user_id AND status = 'success' AND role = 'Vendor'";
              $result = mysqli_query($conn, $vendor_successPayoutSql);


              if ($result) {
                $row = mysqli_fetch_assoc($result);
                $vendor_total_success = $row['vendor_total_success'] ?? 0; 
              }
            
            //  get the status of the users charity fund application
          $charityResult = mysqli_query($conn, "SELECT * FROM charity_fund WHERE user_id = '$user_id'");
          
          if($charityResult && mysqli_num_rows($charityResult) > 0){
            $charityRow = mysqli_fetch_assoc($charityResult);
            $charityStatus = $charityRow['status'];
            $isApply = true;
          }else{
            $charityStatus = "Yet to Apply";
            $isApply = false;
          }
          
            
            // check if a user is a vendor or not
            $vendorResult = mysqli_query($conn, "SELECT * FROM vendor WHERE user_id = '$user_id'");
            if(mysqli_num_rows($vendorResult) > 0){
                $isVendor = true;
            }else{
              $isVendor = false;
            }

            if($isAffiliate && $isVendor){
              $role = "Vendor";
            }else{
              $role = "Affiliate";
            }

            // get the total number of products a vendor has
            $productSql = "SELECT COUNT(*) AS total_products FROM products WHERE vendor_id = '$user_id'";
            $productResult = mysqli_query($conn, $productSql);
            if ($productResult) {
                $productRow = mysqli_fetch_assoc($productResult);
                $total_products = $productRow['total_products'] ?? 0; 
            } else {
                $total_products = 0; 
            }

            // get the total number of sales for affiliates
            $salesSql = "SELECT sales FROM user WHERE user_id = '$user_id'";
            $salesResult = mysqli_query($conn, $salesSql);
            if ($salesResult) {
                $salesRow = mysqli_fetch_assoc($salesResult);
                $aff_total_sales = $salesRow['sales'] ?? 0; 
            } else {
                $total_sales = 0; 

            }
            // get the total number of sales for vendor
            $salesSql = "SELECT sales FROM vendor WHERE user_id = '$user_id'";
            $salesResult = mysqli_query($conn, $salesSql);
            if ($salesResult) {
                $salesRow = mysqli_fetch_assoc($salesResult);
                $vendor_total_sales = $salesRow['sales'] ?? 0; 
            } else {
                $total_sales = 0; 
            }


            // get the total number of sales for a vendor
            $coursePaymentSql = "SELECT COUNT(*) AS total_sales FROM course_payment WHERE product_id IN (SELECT product_id FROM products WHERE vendor_id = '$user_id')";
            $coursePaymentResult = mysqli_query($conn, $coursePaymentSql);
            if ($coursePaymentResult) {
                $coursePaymentRow = mysqli_fetch_assoc($coursePaymentResult);
                $total_sales_count = $coursePaymentRow['total_sales'] ?? 0; 
            } else {
                $total_sales_count = 0; 
            }

            // get the total number of sales for an affiliate
            $affiliateSalesSql = "SELECT COUNT(*) AS total_sales FROM course_payment WHERE affiliate_id = '$affiliate_id'";
            $affiliateSalesResult = mysqli_query($conn, $affiliateSalesSql);
            if ($affiliateSalesResult) {
                $affiliateSalesRow = mysqli_fetch_assoc($affiliateSalesResult);
                $total_affiliate_sales = $affiliateSalesRow['total_sales'] ?? 0; 
            } else {
                $total_affiliate_sales = 0; 
            }

            // get the total number of affiliates for a vendor
          
            $affiliateSql = "SELECT COUNT(DISTINCT affiliate_id) AS total_affiliates FROM course_payment WHERE product_id IN (SELECT product_id FROM products WHERE vendor_id = '$user_id')";
            $affiliateResult = mysqli_query($conn, $affiliateSql);
            if ($affiliateResult) {
                $affiliateRow = mysqli_fetch_assoc($affiliateResult);
                $total_affiliates = $affiliateRow['total_affiliates'] ?? 0;
            } else {
                $total_affiliates = 0; 
            }


          
          // get the total pending payout for a affiliates
          $pending_result = mysqli_query($conn, "SELECT SUM(amount) AS total_pending_payout FROM payout_request WHERE user_id = '$user_id' AND status = 'pending'");

           $total_pendingPayout_row = mysqli_fetch_assoc($pending_result);
           $total_pendingPayout = $total_pendingPayout_row['total_pending_payout'];
            
          
           

            if($isAffiliate && $isPro){
              if(!isset($_SESSION['isAffPayout'])){
                $total_earning = ($withdrawal_balance + $ref_bonus + $aff_total_sales) - $total_pendingPayout;
                
                
                if($total_earning < 0){
                  $total_earning = 0;
                }
                $sql = mysqli_query($conn, "UPDATE user SET total_earning = '$total_earning' WHERE user_id = '$user_id'");

              }else{
                  unset($_SESSION['isAffPayout']);
              }
            }elseif($isAffiliate){
               if(!isset($_SESSION['isAffPayout'])){
                 $total_earning = ($withdrawal_balance + $aff_total_sales) - $total_pendingPayout;
                    if($total_earning < 0){
                      $total_earning = 0;
                    }
                 $sql = mysqli_query($conn, "UPDATE user SET total_earning = '$total_earning' WHERE user_id = '$user_id'");

               }else{
                   unset($_SESSION['isAffPayout']);
               }
            }

          // 
           $aff_total_earning = $user_row['total_earning'] ?? 0; 
      }

     
   

  }
?>

<div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative"> 
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Riho .." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading... </span></div><i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"> </div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">  
            <!-- <div class="logo-wrapper"> <a href="index.html"><img class="img-fluid for-light" src="./assets/images/logo/logo_dark.png" alt="logo-light"><img class="img-fluid for-dark" src="./assets/images/logo/logo.png" alt="logo-dark"></a></div> -->
            <div class="toggle-sidebar"> <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
          </div>
          
          <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus"> 
              <li class="d-md-block d-none"> 
                <div class="form search-form mb-0">
                  <div class="input-group"><span class="input-icon">
                      <svg>
                        <use href="./assets/svg/icon-sprite.svg#search-header"></use>
                      </svg>
                      <input class="w-100" type="search" placeholder="Search"></span></div>
                </div>
              </li>
              <li class="d-md-none d-block"> 
                <div class="form search-form mb-0">
                  <div class="input-group"> <span class="input-show"> 
                      <svg id="searchIcon">
                        <use href="./assets/svg/icon-sprite.svg#search-header"></use>
                      </svg>
                      <div id="searchInput">
                        <input type="search" placeholder="Search">
                      </div></span></div>
                </div>
              </li>
            
              <li> 
                <div class="mode"><i class="moon" data-feather="moon"> </i></div>
              </li>
            
              <li class="profile-nav onhover-dropdown"> 
                <div class="media profile-media">
                     <h4 style="color: white; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; margin: 0;" class="bg-primary"><?=$joinName?></h4>
                  <div class="media-body d-xxl-block d-none box-col-none">
                    <div class="d-flex align-items-center gap-2"> <span><?=$uname?> </span><i class="middle fa fa-angle-down"> </i></div>
                    <p class="mb-0 font-roboto text-uppercase"><?=$role?></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  
                  <li><a class="btn btn-pill  btn-sm" href="./settings">Settings</a></li>
                  <li><a class="btn btn-pill btn-outline-primary btn-sm" href="../inc/logout">Log Out</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details"> 
            <div class="ProfileCard-realName">{{name}}</div>
            </div> 
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>