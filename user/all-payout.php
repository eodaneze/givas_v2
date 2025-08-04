<?php

if(isset($_GET['r'])){
  $url_role = $_GET['r'];
  
  if($url_role == "aff"){
    $payout_role = "Affiliate";
    
  }elseif($url_role == 'vendor'){
    $payout_role = "Vendor";
  }
}
$title = "$payout_role Payouts";
 require_once('./home_header.php');
?>


  <body>  
    
    
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
            <?php require_once('./banner.php') ?>
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
             <div class="table-responsive bg-white">
                  <table id="myTable" class="table table-striped text-nowrap">
                       <thead class="bg-light">
                           <tr>
                               <th>S/N</th>
                               <!-- <th>Fullname</th> -->
                               <th>Amount</th>
                               <th>Payment Method</th>
                               <th>Date</th>
                               <th>Status</th>
                           </tr>
                       </thead>
                       <tbody>
                           <?php 
                             
                              $sql = "SELECT * FROM payout_request WHERE user_id = '$user_id' AND role = '$payout_role'";
                              $res = mysqli_query($conn, $sql);
                              if(mysqli_num_rows($res) > 0){
                                  $i = 1;
                                  while($row = mysqli_fetch_assoc($res)){
                                      $id = $row['id'];
                                      $amount = $row['amount'];
                                      $status = $row['status'];
                                      $payment_option = $row['payment_option'];

                                      if($payment_option == ""){
                                          $payment_option = "Crypto";
                                         
                                      }
                                      $createddate = $row['createddate'];
                                      
                                      
                                      ?>
                                      <tr>
                                          <td><?=$i?></td>
                                          <!-- <td><?=$fullname?></td> -->
                                          <td>$<?=number_format($amount, 2)?></td>
                                          <td class="text-capitalize <?=$payment_option == 'bank' ? 'text-primary' : 'text-danger'?>"><?=$payment_option?></td>
                                          <td><?=$createddate?></td>
                                          <td>
                                            <button class="btn <?=$status == 'success' ? 'btn-success' : 'btn-danger'?> btn-sm shadow"><?=$status?></button>
                                          </td>
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

       

        <script>
            function generateCoupon(id) {
                Swal.fire({
                title: "Assign Coupon code?",
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonText: "Yes, Assign",
                cancelButtonText: "Cancel",
                customClass: {
                confirmButton: "swal-confirm-btn",
                cancelButton: "swal-cancel-btn",
                },
                }).then((result) => {
                if (result.isConfirmed) {
                // If user confirms, redirect to delete.php with the record ID
                window.location.href = "./inc/generate-coupon.php?id=" + id;
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