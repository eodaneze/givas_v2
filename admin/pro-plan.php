<?php
  $title = "Pro Plan Payment";
   require_once('./home_header.php');
   require_once('./model/confirm_account.php')
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
                               <th>Email</th>
                               <th>Amount</th>
                               <th>Proof</th>
                               <th>date</th>
                               <th>Operation</th>
                           </tr>
                       </thead>
                       <tbody>
                           <?php 
                              $sql = "SELECT * FROM  proplan_direct_payment";
                              $res = mysqli_query($conn, $sql);
                              if(mysqli_num_rows($res) > 0){
                                  $i = 1;
                                  while($row = mysqli_fetch_assoc($res)){
                                      $id = $row['id'];
                                      $amount = $row['amount'];
                                      $email = $row['email'];
                                      $wallet_address = $row['wallet_address'];
                                      $proof_file_path = $row['proof_file_path'];
                                      $user_id = $row['user_id'];
                                      
                                      ?>
                                      <tr>
                                          <td><?=$i?></td>
                                          <td><?=$email?></td>
                                        
                                          <td>$<?=number_format($amount, 2)?>/<sub>$</sub></td>
                                          <td>
                                              <!--<a href="https://givas.org/user/inc/<?=$proof_file_path?>" download="">Click to download</a>-->
                                               <a href="<?=$proof_file_path?>" download="" target="_blank">Click to download</a>
                                              
                                          </td>
                                          <td><?=$row['created_at']?></td>
                                          <td>
                                              <?php 
                                                if($user_id){
                                                   ?>
                                                       <button class="btn btn-primary btn-sm shadow" onclick="activatePro(<?= $user_id ?>, <?= $amount ?>)">Activate Plan</button>
                                                       
                                                   <?php
                                                }else{
                                                    ?>
                                                          <button class="btn btn-primary btn-sm shadow" onclick="generateCoupon(<?=$id?>)">Send Coupon</button>
                                                    <?php
                                                }
                                              ?>
                                             
                                          <!-- <button class="btn btn-secondary btn-sm shadow" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="setModalId(<?=$id?>)">Confirm</button> -->

                                          
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
                        
                        window.location.href = `./inc/generate-coupon-ref?id=${id}`;
                        }
                    });
                }
            function activatePro(id, amount){
                Swal.fire({
                        title: "Activate Pro?",
                        text: "You won't be able to revert this!",
                        showCancelButton: true,
                        confirmButtonText: "Yes, Activate",
                        cancelButtonText: "Cancel",
                        customClass: {
                        confirmButton: "swal-confirm-btn",
                        cancelButton: "swal-cancel-btn",
                        },
                    }).then((result) => {
                        if (result.isConfirmed) {
                        // If user confirms, redirect to delete.php with the record ID
                        window.location.href = `./inc/activate-pro?id=${id}&amount=${amount}`;
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