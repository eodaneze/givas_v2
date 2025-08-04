<?php
  require_once('./inc/config/connection.php');
  if(isset($_GET['id'])){
    $agent_id = $_GET['id'];
    $sql = "SELECT * FROM agent WHERE id = '$agent_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name']; 
    $rate = $row['rate']; 
    $payment_option = json_decode($row['payment_option'], true);
}
$title = $name;
require_once('./account_header.php');
  require_once('./model/direct-payment.model.php');
  require_once('./model/contact-agent.php');
?>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0"> 
      <div class="row m-0">
        <div class="col-xl-7 p-0 d-none d-xl-block"><img class="bg-img-cover bg-center" src="./givasAdmin/assets/images/login/1.jpg" alt="looginpage"></div>
        <div class="col-xl-5 p-0"> 
          <div class="login-card login-dark">
            <div>
              <!-- <div><a class="logo text-start" href="index.html"><img class="img-fluid for-dark" src="./givasAdmin/assets/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-light" src="./givasAdmin/assets/images/logo/logo_dark.png" alt="looginpage"></a></div> -->
              <div class="login-main"> 
                <form class="theme-form">
                  <h4>Deposit Fund</h4>
                 
                        
                        
                          <p>How much do you want to deposit?</p>

                          <form action="">
                             <label>Deposting</label>
                              <input type="text" value="$10.00" readonly class="form-control">
                          </form>
        
                          <div class="mt-3 d-flex justify-content-between">
                               <p><strong>NGN<?=number_format($rate, 2)?></strong></p>
                               <p class="text-primary">Agent Rate</p>
                          </div>
                         <div class="mt-3 mb-4">
                               <p>Payment Options</p>
                               <?php 
                                    foreach($payment_option as $option){
                                        ?>
                                           <button class="btn btn-light rounded-3"><?=$option?></button>
                                        <?php
                                    }

                                    if(isset($_GET['id'])){
                                        $agent_id = $_GET['id'];
                                        // Fetch bank accounts associated with the agent
                                        $bank_sql = "SELECT * FROM bank_account WHERE agent_id = '$agent_id'";
                                       
                                        $bank_result = mysqli_query($conn, $bank_sql);
                                        if(mysqli_num_rows($bank_result) > 0){
                                            ?>
                                                <div>
                                                     <?php 
                                                         
                                                        while($bank_row = mysqli_fetch_assoc($bank_result)){
                                                            ?>
                                                            
                                                                <button class="btn"><?=$bank_row['bank_account']?></button>
            
                                                            
                                                            
                                                            <?php
                                                        }
                                                     ?>
                                                </div>
                                            <?php
                                        }
                                    }

                                ?>
                             
                         </div>
                         
                     
               
                 
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="./assets/js/jquery.min.js"></script>
      <!-- Bootstrap js-->
      <script src="./assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="./assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="./assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="./assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- calendar js-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="./assets/js/script.js"></script>
    </div>
  </body>
</html>