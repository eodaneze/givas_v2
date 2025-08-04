<?php
   $title ="Affiliate Deashboard";
   require_once('./home_header.php');
   require_once('./sessionCheck.php');
  
  // require_once('./model/welcome.modal.php')
   
 
   ?>
  <body> 
    
  
    <!-- loader starts-->
    
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php
        require_once('./home_navbar.php');
        require_once('./model/about-phase.php');
        require_once('./model/update-wallet.php');
         require_once('./model/aff-payoutRequest.php');
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
           <?php require_once('./banner.php') ?>
         
          
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row size-column"> 
              <div class="col-xxl-12 box-col-12">
                <div class="row"> 
                
                  <div class="col-xl-4 col-sm-6">
                    <div class="card o-hidden small-widget">
                      <div class="card-body total-Progress border-b-warning border-2"> <span class="f-light f-w-500 f-14">Total Earnings</span>
                        <div class="project-details">
                          <div class="project-counter">
                            <h2 class="f-w-600">$ <?=number_format($aff_total_earning, 2)?></h2><span class="f-12 f-w-400"></span>
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
                      <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Total Payout</span>
                        <div class="project-details"> 
                          <div class="project-counter">
                            <h2 class="f-w-600">$ <?=number_format($aff_total_success, 2)?></h2><span class="f-12 f-w-400"></span>
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
                  
                                       <div class="col-xl-4 col-sm-6 bg-">
                                         <div class="card o-hidden small-widget bg-dark">
                                           <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14 terxt-white">Next Payout</span>
                                             <div class="project-details"> 
                                             
                                                <div class="project-counte">
                                                  <input type="hidden" name="amount" value="<?=$ref_bonus?>">
                                                  <input type="hidden" name="user_id" value="<?=$user_id?>">
                                                  <h2 class="f-w-600 text-white">$ <?=number_format($aff_total_earning , 2)?></h2>
                                                  <div class="mt-4">
                                                    <button class="btn btn-primary d-flex align-items-center justify-content-center p-3 w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                       Request Payout
                                                     
                                                    </button>
            
                                                  </div>
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
                                        <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Number Of Sales</span>
                                          <div class="project-details"> 
                                            <div class="project-counter">
                                              <h2 class="f-w-600"><?=$total_affiliate_sales?></h2><span class="f-12 f-w-400"></span>
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
                      <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Pending Payout</span>
                        <div class="project-details"> 
                          <div class="project-counter">
                            <h2 class="f-w-600">$ <?=number_format( $aff_total_pending, 2)?></h2><span class="f-12 f-w-400"></span>
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
                  
                   <!-- <?php 
                     if($withdrawal_balance > 0 && $withdrawal_status == 1){
                            
               
                        ?>
                           <div class="col-xl-3 col-sm-6 bg-">
                             <div class="card o-hidden small-widget bg-dark">
                               <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14 terxt-white">Next Payout</span>
                                 <div class="project-details"> 
                                 <form id="payoutForm" action="./inc/request-payout.php" method="post">
                                    <div class="project-counte">
                                      <input type="hidden" name="amount" value="<?=$withdrawal_balance?>">
                                      <input type="hidden" name="user_id" value="<?=$user_id?>">
                                      <h2 class="f-w-600 text-white">$ <?=number_format($withdrawal_balance, 2)?></h2>
                                      <div class="mt-4">
                                        <button id="requestButton" class="btn btn-primary d-flex align-items-center justify-content-center" name="request" type="button">
                                          <span id="buttonText">Request Payout</span>
                                          <div id="spinner" class="spinner" style="display: none; margin-left: 5px;"></div>
                                        </button>

                                      </div>
                                    </div>
                                  </form>
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

                     }
                  ?> -->
                         
                                       
                                 
                  
                    <?php 
                     if($account_type == 'primary'){
                       ?>
                          <a href='my-accounts' class="col-xl-4 col-sm-6">
                            <div class="card o-hidden small-widget">
                              <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">No of Accounts</span>
                                <div class="project-details"> 
                                  <div class="project-counter">
                                    <h2 class="f-w-600"><?=$count_account?></h2><span class="f-12 f-w-400"></span>
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
                          </a>
                       
                       <?php
                     }
                  ?>
               
                 
                  
                  <div class="col-xl-4 col-sm-6">
                    <div class="card o-hidden small-widget">
                      <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Total Phase Earnings</span>
                        <div class="project-details"> 
                          <div class="project-counter">
                            <h2 class="f-w-600">$ <?=$total_phase_earning?></h2><span class="f-12 f-w-400"></span>
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

                   
                           
                           
                       
                    
                  
                
                </div>
                 <?php 
                    if($plan == 'Pro Plan'){
                      
                        $refLink = "https://givas.org/register?next&ref=$uname";
                        ?>
                           <div class="row">
                              <div class="col-lg-6">
                                  <label>Referral Link</label>
                                  <div class="input-group mb-3">
                                      <input type="text" class="form-control" id="referralLink" value="<?=$refLink?>" readonly>
                                      <button class="btn btn-primary" type="button" id="copyButton">Copy</button>
                                      <span id="copyMessage" style="margin-left: 10px; color: green; font-weight: bold; display: none;">Copied!</span>
                                  </div>

                                  <script>
                                      document.getElementById("copyButton").addEventListener("click", function() {
                                          var referralLink = document.getElementById("referralLink");
                                          var copyMessage = document.getElementById("copyMessage");

                                          referralLink.select();
                                          referralLink.setSelectionRange(0, 99999); // For mobile devices
                                          document.execCommand("copy");

                                          // Show "Copied!" message
                                          copyMessage.style.display = "inline";
                                          
                                          // Hide message after 2 seconds
                                          setTimeout(function() {
                                              copyMessage.style.display = "none";
                                          }, 2000);
                                      });
                                  </script>

                              </div>
                           </div>
                        <?php
                    }
                 ?>
                <div class="row">
                    <div class="col-xxl-9 mb-4">
                      <!---------------------------------  -->
                      <?php 
                         $logged_in_user_id = $_SESSION['userId'];
                         $sql_logged_user_details = "SELECT uname FROM user WHERE user_id = '$logged_in_user_id'";
                          $res_logged_user_details = mysqli_query($conn, $sql_logged_user_details);
                          $logged_user_details = mysqli_fetch_assoc($res_logged_user_details);
                          $logged_in_username = $logged_user_details['uname'];
                          if($phase == 'Givas: Phase 1'){

                              ?>
                                    <!--  -->
                                    <div class="table-responsive bg-white border rounded-3">
                                        <?php
                                        // Step 1: Get the logged-in user's record in givas_phase_1
                                        $sql_logged_user = "SELECT * FROM givas_phase_1 WHERE user_id = '$logged_in_user_id'";
                                        $res_logged_user = mysqli_query($conn, $sql_logged_user);
                                        $logged_user = mysqli_fetch_assoc($res_logged_user);
                                        $is_current_earner = $logged_user['is_current_earner'];

                                        

                                        if ($logged_user && $is_current_earner == 1) {
                                            // Step 2: Fetch users under the logged-in user
                                            $sql_users_below = "SELECT * FROM givas_phase_1 WHERE current_earner_id = '$logged_in_user_id' ORDER BY user_id";
                                            $res_users_below = mysqli_query($conn, $sql_users_below);

                                            $users_below = [];
                                            if ($res_users_below) {
                                                while ($row = mysqli_fetch_assoc($res_users_below)) {
                                                    // Fetch details from the user table for each user
                                                    $user_id = $row['user_id'];
                                                    $sql_user = "SELECT * FROM user WHERE user_id = '$user_id'";
                                                    $res_user = mysqli_query($conn, $sql_user);
                                                    $user_details = mysqli_fetch_assoc($res_user);

                                                    if ($user_details) {
                                                        $users_below[] = $user_details;
                                                    }
                                                }
                                            }

                                            

                                           
                                        ?>
                                        
                                        <!-- Step 4: Display the users below the logged-in user -->

                                        <?php 
                                           if($is_current_earner == 1){
                                              ?>
                                              
                                           <table class="table table-bordered">
                                               <thead>
                                                   <tr>
                                                       <th>#</th>
                                                       <th>Username</th>
                                                       <th>First Name</th>
                                                       <th>Last Name</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <?php if (!empty($users_below)): ?>
                                                       <tr>
                                                           <td colspan="4">Users under <strong>You (Username: <?= $logged_in_username?>)</strong></td>
                                                       </tr>
                                                       <?php foreach ($users_below as $index => $user): ?>
                                                           <tr>
                                                               <td><?= $index + 1 ?></td>
                                                               <td><?= $user['uname'] ?></td>
                                                               <td><?= $user['fname'] ?></td>
                                                               <td><?= $user['lname'] ?></td>
                                                           </tr>
                                                       <?php endforeach; ?>
                                                   <?php else: ?>
                                                       <tr>
                                                           <td colspan="4">No users under you.</td>
                                                       </tr>
                                                   <?php endif; ?>
                                               </tbody>
                                           </table>
                                              <?php

                                           }else{
                                              ?>
                                                  <p>You are not currently earning from any user</p>
                                              <?php
                                           }
                                        ?>
                                        
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <!--  -->
                              
                              <?php
                          }elseif($phase == 'Givas: Phase 2'){
                            ?>
                               <!--  -->
                                    <!--  -->
                                    <div class="table-responsive bg-white border rounded-3">
                                        <?php
                                        // Step 1: Get the logged-in user's record in givas_phase_1
                                        $sql_logged_user = "SELECT * FROM givas_phase_2 WHERE user_id = '$logged_in_user_id'";
                                        $res_logged_user = mysqli_query($conn, $sql_logged_user);
                                        $logged_user = mysqli_fetch_assoc($res_logged_user);
                                        $is_current_earner = $logged_user['is_current_earner'];

                                        if ($logged_user && $is_current_earner) {
                                            // Step 2: Fetch users under the logged-in user
                                            $sql_users_below = "SELECT * FROM givas_phase_2 WHERE current_earner_id = '$logged_in_user_id' ORDER BY user_id LIMIT 10";
                                            $res_users_below = mysqli_query($conn, $sql_users_below);

                                            $users_below = [];
                                            if ($res_users_below) {
                                                while ($row = mysqli_fetch_assoc($res_users_below)) {
                                                    // Fetch details from the user table for each user
                                                    $user_id = $row['user_id'];
                                                    $sql_user = "SELECT * FROM user WHERE user_id = '$user_id'";
                                                    $res_user = mysqli_query($conn, $sql_user);
                                                    $user_details = mysqli_fetch_assoc($res_user);

                                                    if ($user_details) {
                                                        $users_below[] = $user_details;
                                                    }
                                                }
                                            }
                                         ?>
                                        
                                        <!-- Step 4: Display the users below the logged-in user -->
                                         <?php 
                                            ?>                                                     
                                              
                                            <?php
                                             if($is_current_earner == 1){
                                                ?>
                                                
                                                  <table class="table table-bordered">
                                                     
                                                      <thead>
                                                          <tr>
                                                              <th>#</th>
                                                              <th>Username</th>
                                                              <th>First Name</th>
                                                              <th>Last Name</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <?php if (!empty($users_below)): ?>
                                                              <tr>
                                                                  <td colspan="4">Users under <strong>You (Username: <?= $logged_in_username?>)</strong></td>
                                                              </tr>
                                                              <?php foreach ($users_below as $index => $user): ?>
                                                                  <tr>
                                                                      <td><?= $index + 1 ?></td>
                                                                      <td><?= $user['uname'] ?></td>
                                                                      <td><?= $user['fname'] ?></td>
                                                                      <td><?= $user['lname'] ?></td>
                                                                  </tr>
                                                              <?php endforeach; ?>
                                                          <?php else: ?>
                                                              <tr>
                                                                  <td colspan="4">No users under you.</td>
                                                              </tr>
                                                          <?php endif; ?>
                                                      </tbody>
                                                  </table>
                                                <?php
                                             }else{
                                               ?>You don't have any user under you<?php
                                             }
                                         ?>
                                        
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <!--  -->
                               <!--  -->
                            
                            <?php

                          }elseif($phase == 'Success: Phase 1'){
                            ?>
                                    <!--  -->
                                    <div class="table-responsive bg-white border rounded-3">
                                        <?php
                                        // Step 1: Get the logged-in user's record in givas_phase_1
                                        $sql_logged_user = "SELECT * FROM success_phase_1 WHERE user_id = '$logged_in_user_id'";
                                        $res_logged_user = mysqli_query($conn, $sql_logged_user);
                                        $logged_user = mysqli_fetch_assoc($res_logged_user);
                                        $is_current_earner = $logged_user['is_current_earner'];

                                        if ($logged_user && $is_current_earner) {
                                            // Step 2: Fetch users under the logged-in user
                                            $sql_users_below = "SELECT * FROM success_phase_1 WHERE current_earner_id = '$logged_in_user_id' ORDER BY user_id";
                                            $res_users_below = mysqli_query($conn, $sql_users_below);

                                            $users_below = [];
                                            if ($res_users_below) {
                                                while ($row = mysqli_fetch_assoc($res_users_below)) {
                                                    // Fetch details from the user table for each user
                                                    $user_id = $row['user_id'];
                                                    $sql_user = "SELECT * FROM user WHERE user_id = '$user_id'";
                                                    $res_user = mysqli_query($conn, $sql_user);
                                                    $user_details = mysqli_fetch_assoc($res_user);

                                                    if ($user_details) {
                                                        $users_below[] = $user_details;
                                                    }
                                                }
                                            }
                                         ?>
                                        
                                        <!-- Step 4: Display the users below the logged-in user -->
                                         <?php 
                                            ?>                                                     
                                              
                                            <?php
                                             if($is_current_earner == 1){
                                                ?>
                                                
                                                  <table class="table table-bordered">
                                                     
                                                      <thead>
                                                          <tr>
                                                              <th>#</th>
                                                              <th>Username</th>
                                                              <th>First Name</th>
                                                              <th>Last Name</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <?php if (!empty($users_below)): ?>
                                                              <tr>
                                                                  <td colspan="4">Users under <strong>You (Username: <?= $logged_in_username?>)</strong></td>
                                                              </tr>
                                                              <?php foreach ($users_below as $index => $user): ?>
                                                                  <tr>
                                                                      <td><?= $index + 1 ?></td>
                                                                      <td><?= $user['uname'] ?></td>
                                                                      <td><?= $user['fname'] ?></td>
                                                                      <td><?= $user['lname'] ?></td>
                                                                  </tr>
                                                              <?php endforeach; ?>
                                                          <?php else: ?>
                                                              <tr>
                                                                  <td colspan="4">No users under you.</td>
                                                              </tr>
                                                          <?php endif; ?>
                                                      </tbody>
                                                  </table>
                                                <?php
                                             }else{
                                               ?>You don't have any user under you<?php
                                             }
                                         ?>
                                        
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <!--  -->
                            <?php
                               
                          }elseif($phase == 'Success: Phase 2'){
                            ?>
                                 <!--  -->

                                 <div class="table-responsive bg-white border rounded-3">
                                        <?php
                                        // Step 1: Get the logged-in user's record in givas_phase_1
                                        $sql_logged_user = "SELECT * FROM success_phase_2 WHERE user_id = '$logged_in_user_id'";
                                        $res_logged_user = mysqli_query($conn, $sql_logged_user);
                                        $logged_user = mysqli_fetch_assoc($res_logged_user);
                                        $is_current_earner = $logged_user['is_current_earner'];

                                        if ($logged_user && $is_current_earner) {
                                            // Step 2: Fetch users under the logged-in user
                                            $sql_users_below = "SELECT * FROM success_phase_2 WHERE current_earner_id = '$logged_in_user_id' ORDER BY user_id";
                                            $res_users_below = mysqli_query($conn, $sql_users_below);

                                            $users_below = [];
                                            if ($res_users_below) {
                                                while ($row = mysqli_fetch_assoc($res_users_below)) {
                                                    // Fetch details from the user table for each user
                                                    $user_id = $row['user_id'];
                                                    $sql_user = "SELECT * FROM user WHERE user_id = '$user_id'";
                                                    $res_user = mysqli_query($conn, $sql_user);
                                                    $user_details = mysqli_fetch_assoc($res_user);

                                                    if ($user_details) {
                                                        $users_below[] = $user_details;
                                                    }
                                                }
                                            }
                                         ?>
                                        
                                        <!-- Step 4: Display the users below the logged-in user -->
                                         <?php 
                                            ?>                                                     
                                              
                                            <?php
                                             if($is_current_earner == 1){
                                                ?>
                                                
                                                  <table class="table table-bordered">
                                                     
                                                      <thead>
                                                          <tr>
                                                              <th>#</th>
                                                              <th>Username</th>
                                                              <th>First Name</th>
                                                              <th>Last Name</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <?php if (!empty($users_below)): ?>
                                                              <tr>
                                                                  <td colspan="4">Users under <strong>You (Username: <?= $logged_in_username?>)</strong></td>
                                                              </tr>
                                                              <?php foreach ($users_below as $index => $user): ?>
                                                                  <tr>
                                                                      <td><?= $index + 1 ?></td>
                                                                      <td><?= $user['uname'] ?></td>
                                                                      <td><?= $user['fname'] ?></td>
                                                                      <td><?= $user['lname'] ?></td>
                                                                  </tr>
                                                              <?php endforeach; ?>
                                                          <?php else: ?>
                                                              <tr>
                                                                  <td colspan="4">No users under you.</td>
                                                              </tr>
                                                          <?php endif; ?>
                                                      </tbody>
                                                  </table>
                                                <?php
                                             }else{
                                               ?>You don't have any user under you<?php
                                             }
                                         ?>
                                        
                                        <?php
                                        }
                                        ?>
                                    </div>
                                 <!--  -->
                            
                            <?php

                          }elseif($phase == 'Abundance: Phase 1'){
                            ?>
                                 <!--  -->
                                 <div class="table-responsive bg-white border rounded-3">
                                        <?php
                                        // Step 1: Get the logged-in user's record in givas_phase_1
                                        $sql_logged_user = "SELECT * FROM abundance_phase_1 WHERE user_id = '$logged_in_user_id'";
                                        $res_logged_user = mysqli_query($conn, $sql_logged_user);
                                        $logged_user = mysqli_fetch_assoc($res_logged_user);
                                        $is_current_earner = $logged_user['is_current_earner'];

                                        if ($logged_user && $is_current_earner) {
                                            // Step 2: Fetch users under the logged-in user
                                            $sql_users_below = "SELECT * FROM abundance_phase_1 WHERE current_earner_id = '$logged_in_user_id' ORDER BY user_id";
                                            $res_users_below = mysqli_query($conn, $sql_users_below);

                                            $users_below = [];
                                            if ($res_users_below) {
                                                while ($row = mysqli_fetch_assoc($res_users_below)) {
                                                    // Fetch details from the user table for each user
                                                    $user_id = $row['user_id'];
                                                    $sql_user = "SELECT * FROM user WHERE user_id = '$user_id'";
                                                    $res_user = mysqli_query($conn, $sql_user);
                                                    $user_details = mysqli_fetch_assoc($res_user);

                                                    if ($user_details) {
                                                        $users_below[] = $user_details;
                                                    }
                                                }
                                            }
                                         ?>
                                        
                                        <!-- Step 4: Display the users below the logged-in user -->
                                         <?php 
                                            ?>                                                     
                                              
                                            <?php
                                             if($is_current_earner == 1){
                                                ?>
                                                
                                                  <table class="table table-bordered">
                                                     
                                                      <thead>
                                                          <tr>
                                                              <th>#</th>
                                                              <th>Username</th>
                                                              <th>First Name</th>
                                                              <th>Last Name</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <?php if (!empty($users_below)): ?>
                                                              <tr>
                                                                  <td colspan="4">Users under <strong>You (Username: <?= $logged_in_username?>)</strong></td>
                                                              </tr>
                                                              <?php foreach ($users_below as $index => $user): ?>
                                                                  <tr>
                                                                      <td><?= $index + 1 ?></td>
                                                                      <td><?= $user['uname'] ?></td>
                                                                      <td><?= $user['fname'] ?></td>
                                                                      <td><?= $user['lname'] ?></td>
                                                                  </tr>
                                                              <?php endforeach; ?>
                                                          <?php else: ?>
                                                              <tr>
                                                                  <td colspan="4">No users under you.</td>
                                                              </tr>
                                                          <?php endif; ?>
                                                      </tbody>
                                                  </table>
                                                <?php
                                             }else{
                                               ?>You don't have any user under you<?php
                                             }
                                         ?>
                                        
                                        <?php
                                        }
                                        ?>
                                    </div>
                                 <!--  -->
                            
                            <?php

                          }elseif($phase == 'Abundance: Phase 2'){
                            ?>
                                <!--  -->
                                <div class="table-responsive bg-white border rounded-3">
                                        <?php
                                        // Step 1: Get the logged-in user's record in givas_phase_1
                                        $sql_logged_user = "SELECT * FROM abundance_phase_2 WHERE user_id = '$logged_in_user_id'";
                                        $res_logged_user = mysqli_query($conn, $sql_logged_user);
                                        $logged_user = mysqli_fetch_assoc($res_logged_user);
                                        $is_current_earner = $logged_user['is_current_earner'];

                                        if ($logged_user && $is_current_earner) {
                                            // Step 2: Fetch users under the logged-in user
                                            $sql_users_below = "SELECT * FROM abundance_phase_2 WHERE current_earner_id = '$logged_in_user_id' ORDER BY user_id";
                                            $res_users_below = mysqli_query($conn, $sql_users_below);

                                            $users_below = [];
                                            if ($res_users_below) {
                                                while ($row = mysqli_fetch_assoc($res_users_below)) {
                                                    // Fetch details from the user table for each user
                                                    $user_id = $row['user_id'];
                                                    $sql_user = "SELECT * FROM user WHERE user_id = '$user_id'";
                                                    $res_user = mysqli_query($conn, $sql_user);
                                                    $user_details = mysqli_fetch_assoc($res_user);

                                                    if ($user_details) {
                                                        $users_below[] = $user_details;
                                                    }
                                                }
                                            }
                                         ?>
                                        
                                        <!-- Step 4: Display the users below the logged-in user -->
                                         <?php 
                                            ?>                                                     
                                              
                                            <?php
                                             if($is_current_earner == 1){
                                                ?>
                                                
                                                  <table class="table table-bordered">
                                                     
                                                      <thead>
                                                          <tr>
                                                              <th>#</th>
                                                              <th>Username</th>
                                                              <th>First Name</th>
                                                              <th>Last Name</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <?php if (!empty($users_below)): ?>
                                                              <tr>
                                                                  <td colspan="4">Users under <strong>You (Username: <?= $logged_in_username?>)</strong></td>
                                                              </tr>
                                                              <?php foreach ($users_below as $index => $user): ?>
                                                                  <tr>
                                                                      <td><?= $index + 1 ?></td>
                                                                      <td><?= $user['uname'] ?></td>
                                                                      <td><?= $user['fname'] ?></td>
                                                                      <td><?= $user['lname'] ?></td>
                                                                  </tr>
                                                              <?php endforeach; ?>
                                                          <?php else: ?>
                                                              <tr>
                                                                  <td colspan="4">No users under you.</td>
                                                              </tr>
                                                          <?php endif; ?>
                                                      </tbody>
                                                  </table>
                                                <?php
                                             }else{
                                               ?>You don't have any user under you<?php
                                             }
                                         ?>
                                        
                                        <?php
                                        }
                                        ?>
                                    </div>
                                <!--  -->
                            
                            <?php
                          }
                      ?>
                      <!-- ------------------- -->
                  </div>
                  <div class="col-xxl-3 d-xxl-block d-none activity-group box-col-none">
                  <div class="col-xl-12 col-md-6">
                        <div class="card overflow-hidden"> 
                          <div class="card-body pt-0 project-ideas-card">
                            <div class="project-card">
                              <div><span class="f-22 f-w-500 text-center">Welcome to Givas</span>
                                <div class="btn-showcase text-center">
                                    <button class="btn btn-pill btn-outline-primary-2x b-r-8 active" data-bs-toggle="modal" data-bs-target="#exampleModal2">Update Wallet</button></div>
                              </div>
                            </div>
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
        <!-- footer start-->
         <?php 
            require_once('./footer.php');
            require_once('./sweet-alert.php');
         ?>
      </div>
    </div>

    <style>
  /* Spinner styling */
  .spinner {
    border: 4px solid rgba(255, 255, 255, 0.3);
    border-top: 4px solid white;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    animation: spin 1s linear infinite;
  }

  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
</style>

<script>
  document.getElementById("requestButton").addEventListener("click", function () {
    const button = this;
    const spinner = document.getElementById("spinner");
    const buttonText = document.getElementById("buttonText");

    // Change button text to spinner
    buttonText.style.display = "none";
    spinner.style.display = "inline-block";
    button.disabled = true;

    // Delay the form submission for 5 seconds
    setTimeout(() => {
      document.getElementById("payoutForm").submit();
    }, 5000);
  });
</script>
<script>
  document.getElementById("requestProButton").addEventListener("click", function () {
    const button = this;
    const spinner = document.getElementById("spinner");
    const buttonText = document.getElementById("buttonText");

    // Change button text to spinner
    buttonText.style.display = "none";
    spinner.style.display = "inline-block";
    button.disabled = true;

    // Delay the form submission for 5 seconds
    setTimeout(() => {
      document.getElementById("ProPayoutForm").submit();
    }, 5000);
  });
</script>
<?php
   if(mysqli_num_rows($planResult) > 0){
       
       if($referral_no == 50 || $referral_no == 100){
           ?>
            <script>
              const items = ['🎈', '💐', '🌸', '🌼', '🎉'];
            
              function createFallingItem() {
                const item = document.createElement('div');
                item.classList.add('falling');
                item.innerText = items[Math.floor(Math.random() * items.length)];
                item.style.left = Math.random() * 100 + 'vw';
                item.style.fontSize = Math.random() * 20 + 20 + 'px';
                document.body.appendChild(item);
            
                setTimeout(() => {
                  item.remove();
                }, 5000);
              }
            
              setInterval(createFallingItem, 300);
            </script>
           
           <?php
       }
   }
?>
    <?php require_once('./main-script.php') ?>
  </body>
</html>