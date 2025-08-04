<?php
  $title = "Charity Fund Documents";
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
             <div class="table-responsive">
                  <table id="myTable" class="table table-bordered">
                       <thead class="bg-light">
                           <tr>
                               <th>S/N</th>
                               <th>Username</th>
                               <th>Wallet</th>
                               <th>Image</th>
                               <td>No of Referral</td>
                               <th>Status</th>
                               <th></th>
                           </tr>
                       </thead>
                       <tbody>
                           <?php 
                              $sql = "SELECT * FROM charity_fund WHERE status = 'Pending'";
                              $res = mysqli_query($conn, $sql);
                              if(mysqli_num_rows($res) > 0){
                                  $i = 1;
                                  while($row = mysqli_fetch_assoc($res)){
                                      $id = $row['id'];
                                      $user_id = $row['user_id'];
                                      $file_path = $row['file_path'];
                                      $status = $row['status'];
                                      
                                      // get the details of the user using the userid
                                      $userSql = "SELECT * FROM user WHERE user_id = '$user_id'";
                                      $userResult = mysqli_query($conn, $userSql);
                                      $userRow = mysqli_fetch_assoc($userResult);
                                      $uname = $userRow['uname'];
                                      $email = $userRow['email'];


                                    //   use the user_id to make a search in the pro_users table to get the number of referrals
                                        $proResult = mysqli_query($conn, "SELECT * FROM pro_users WHERE user_id = '$user_id'");
                                        $proRow = mysqli_fetch_assoc($proResult);
                                        $referral_no = $proRow['referral_no'];


                                        // use the user_id to get his wallet address in the wallet table
                                        $walletResult = mysqli_query($conn, "SELECT * FROM wallet WHERE user_id = '$user_id'");
                                        $walletRow = mysqli_fetch_assoc($walletResult);
                                        $wallet = $walletRow['address']
                                      
                                      ?>
                                      <tr>
                                          <td><?=$i?></td>
                                          <td><?=$uname?></td>
                                          <td><?=$wallet?></td>
                                          
                                          <td>
                                            <a href="../user/inc/<?=$file_path?>" download="">Download Proposal</a>
                                          </td>
                                          <td><?=$referral_no?></td>
                                          <td><?=$status?></td>
                                          <!--  -->
                                          <td>
                                            <!-- Three-dotted menu -->
                                            <div class="dropdown">
                                                <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);" onclick="approveDocs(<?=$id?>)">
                                                            <i class="fa fa-check-circle text-success"></i> Approve
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);" onclick="rejectDocs(<?=$id?>)">
                                                            <i class="fa fa-minus-circle text-danger"></i> Reject
                                                        </a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                          </td>
                                          <!--  -->
                                          
                  
                                      </tr>
                                      <?php
                                      $i++;
                                  }

                              }else{
                                    ?>
                                    <tr>
                                        <td colspan="7" class="text-center">No record found</td>
                                    </tr>
                                    <?php
                              }
                           ?>
                       </tbody>
                  </table>
             </div>
       
           
          </div>
          <!-- Container-fluid Ends-->
        </div>

      
    
   
       <script src="./assets/js/charity-fund.js"></script>

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