<?php
  $title = "Affiliate Payouts";
   require_once('./home_header.php');
   require_once('./model/confirm_account.php')
?>

<style>
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 90%;
            max-height: 90%;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            color: white;
            font-size: 24px;
            cursor: pointer;
        }
        .dropdown-toggle {
            background: none;
            border: none;
            box-shadow: none;
            font-size: 16px;
            cursor: pointer;
        }

        .dropdown-menu {
            min-width: 150px;
            font-size: 14px;
        }

        .dropdown-menu .dropdown-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }
    </style>
  <body>  
    
  <script src="./tinymce/js/tinymce/tinymce.min.js"></script>

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
                 <div class="table-responsive bg-white mt-4">
                           <table class="table table-striped text-nowrap">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Fullname</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Amount</th>
                                        <th>Payment Method</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                       $sql = "SELECT * FROM payout_request WHERE status = 'pending' AND role = 'Affiliate'";
                                       $res = mysqli_query($conn, $sql);
                                       if(mysqli_num_rows($res) > 0){
                                          $num = 1;
                                           while($row = mysqli_fetch_assoc($res)){
                                            $id = $row['id'];
                                            $status = $row['status'];
                                            $amount = $row['amount'];
                                            $payment_option = $row['payment_option'];
                                            $user_id = $row['user_id'];

                                            if($payment_option == ""){
                                                $payment_option = "Crypto";
                                            }
                                            
                                            $userSql = "SELECT * FROM user WHERE user_id = '$user_id'";
                                            $result = mysqli_query($conn, $userSql);
                                            $userRow = mysqli_fetch_assoc($result);
                                            $fname = $userRow['fname'];
                                            $lname = $userRow['lname'];
                                            $email = $userRow['email'];
                                            $uname = $userRow['uname'];
                                            
                                            $fullname = $fname . ' ' . $lname;
                                            
                                            $walletSql = "SELECT * FROM wallet WHERE user_id = '$user_id'";
                                            $walletRes = mysqli_query($conn, $walletSql);
                                            $walletRow = mysqli_fetch_assoc($walletRes);
                                            $walletAddress = $walletRow['address'];

                                            // get the bank details using the user_id
                                            $bankSql = "SELECT * FROM bank_details WHERE user_id = '$user_id'";
                                            $bankRes = mysqli_query($conn, $bankSql);
                                            $bankRow = mysqli_fetch_assoc($bankRes);
                                            $bank_name = $bankRow['bank_name'] ?? 'N/A';
                                            $account_no = $bankRow['account_no'] ?? 'N/A';
                                            $account_name = $bankRow['account_name'] ?? 'N/A';
                                            

                                                     
                                                
                                               ?>
                                                  <tr>
                                                      
                                                    <td><?=$num++?></td>
                                                    <td><?=$fullname?></td>
                                                    <td><?=$uname?></td>
                                                    <td><?=$email?></td>
                                                    <td>$<?=number_format($amount, 2)?></td>
                                                    <td class="text-capitalize">
                                                      <?=$payment_option?><br>
                                                      <?php if($payment_option == 'bank'){ ?>
                                                        <strong>Bank Name:</strong> <?=$bank_name?><br>
                                                        <strong>Account No:</strong> <?=$account_no?><br>
                                                        <strong>Account Name:</strong> <?=$account_name?>
                                                      <?php } else { ?>
                                                        <strong>Wallet Address:</strong> <?=$walletAddress?>
                                                      <?php } ?>
                                                    </td>
                                                    <td><button class="btn <?=$status == 'pending' ? 'btn-danger' : 'btn-success'?> btn-sm shadow"><?=$status?></button></td>
                                                    <td>
                                                         <!-- <div class="dropdown">
                                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-ellipsis-v"></i>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);" onclick="approvePayout(<?=$id?>)">
                                                                        <i class="fa fa-check-circle text-success"></i> Approve
                                                                    </a>
                                                                </li>
                                                                
                                                                
                                                            </ul>
                                                        </div> -->
                                                         <button class="btn btn-success" onclick="approvePayout(<?=$id?>)">Click to Approve</button>
                                                    </td>
                                                  </tr>
                                               
                                               <?php
                                           }
                                       }else{
                                           ?>
                                                <p>No Payout request yet!</p>
                                           <?php
                                       }
                                    ?>
                                    <tr>

                                    </tr>
                                </tbody>
                           </table>
                      </div>
       
           
          </div>
          <!-- Container-fluid Ends-->
        </div>

      


  <script>
    function approvePayout(id) {
    Swal.fire({
      title: "Approve Payout?",
      text: "You won't be able to revert this!",
      showCancelButton: true,
      confirmButtonText: "Yes, Approve it",
      cancelButtonText: "Cancel",
      confirmButtonColor: "#006666",
      cancelButtonColor: "#d33",
    }).then((result) => {
      if (result.isConfirmed) {
        // If user confirms, redirect to delete.php with the record ID
        window.location.href =
          `./inc/approvePayout?id=${id}`;
      }
    });
  }
  </script>
  
  
    
   
       <script src="./assets/js/kyc.js"></script>

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