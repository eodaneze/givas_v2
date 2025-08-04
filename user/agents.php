<?php
  $title = "All Agents";
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
                               <th>FullName</th>
                               <th>Email</th>
                               <th>Exchange Rate</th>
                               <th>Available Amount</th>
                               <th>Payment Option</th>
                               <th></th>
                           </tr>
                       </thead>
                       <tbody>
                           <?php 
                              $sql = "SELECT * FROM agent";
                              $res = mysqli_query($conn, $sql);
                                $i = 1;
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $name = $row['name'];
                                    $email = $row['email'];
                                    $rate = $row['rate'];
                                    $amount = $row['available_amount'];
                                    $payment_option = json_decode($row['payment_option'], true);
                                    ?>
                                    <tr>
                                        <td><?=$i?></td>
                                        <td><?=$name?></td>
                                        <td><?=$email?></td>
                                        <td>NGN<?=number_format($rate, 2)?>/<sub>$</sub></td>
                                        <td>$0.00 - $<?=number_format($amount, 2)?></td>
                                        <td>
                                            <?php 
                                                foreach($payment_option as $option){
                                                    ?>
                                                    <span><?=$option?></span><?= $option !== end($payment_option) ? ',' : '' ?>
                                                    <?php
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <!-- <button class="btn btn-sm btn-primary shadow">Edit</button> -->
                                            <button class="btn btn-sm btn-danger shadow">Delete</button>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                           ?>
                       </tbody>
                  </table>
             </div>
       
           
          </div>
          <!-- Container-fluid Ends-->
        </div>

       

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