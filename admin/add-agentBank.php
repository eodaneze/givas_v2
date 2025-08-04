<?php
  $title = "Add Agent";
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
              <form action="./inc/add-agentBank.php" method="post">
                  <div class="row">
                      <div class="col-lg-6 mb-4">
                        <div class="row">
                             <div class="col-lg-12">
                                 <label>Payment Options</label>
                                 <?php 
                                    if(isset($_GET['id'])){
                                         $agent_id = $_GET['id'];
                                            $sql = "SELECT * FROM agent WHERE id = '$agent_id'";
                                            $result = mysqli_query($conn, $sql);
                                            while($row = mysqli_fetch_assoc($result)){
                                                $payment_option = json_decode($row['payment_option'], true);
                                                foreach($payment_option as $key => $value){
                                                    ?>
                                                    <div class="form-check">
                                                        <input class="form-control mb-3" type="text" name="payment_options[]" value="<?=$value?>" id="<?=$value?>">
                                                    </div>
                                                    <?php
                                            }
                                         }
                                        }
                                 ?>
                                   

                             </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                          <label>Add Bank Account</label>
                        <?php 
                        if(isset($_GET['id'])){
                            $agent_id = $_GET['id'];
                            $sql = "SELECT * FROM agent WHERE id = '$agent_id'";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                                $payment_option = json_decode($row['payment_option'], true);
                                foreach($payment_option as $key => $value){
                                    ?>
                                    <div class="form-group">
                                        <input type="hidden" name="agent_id" value="<?=$agent_id?>">
                                        <!-- <label for="bank_account_<?=$key?>">Bank Account for <?=$value?></label> -->
                                        <input class="form-control mb-3" type="text" name="bank_accounts[]" placeholder="Add bank account for <?=$value?>" id="bank_account_<?=$key?>">
                                    </div>
                                    <?php
                                }
                            }
                        }
                        ?>
                        <div class="">
                            <button name="add" class="btn btn-primary shadow">Submit</button>
                        </div>
                      </div>
                   
               
                  </div>
              </form>
       
           
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