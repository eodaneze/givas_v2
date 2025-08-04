<?php
  $title = "Manage Admin";
   require_once('./home_header.php');
   require_once('./model/add-admin.modal.php')
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
                <div class="col-lg-6">
                  <h4>
                     <?= $title ?></h4>
                     
                     <div class="mt-3 d-flex align-items-center">
                         <button class="btn btn-primary btn-sm shadow fs-5" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus-circle"></i> Add Admin</button>
                     </div>
                </div>
                <div class="col-lg-6">
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
          <div class="container-fluid mt-5">
              <!--<form action="./inc/add-agent.php" method="post">-->
              <!--    <div class="row">-->
              <!--        <div class="col-lg-6 mb-4">-->
              <!--          <label>FullName</label>-->
              <!--            <input placeholder="Enter Fullname" type="text" name = 'fname' class="form-control">-->
              <!--        </div>-->
              <!--        <div class="col-lg-6 mb-4">-->
              <!--          <label>Email</label>-->
              <!--            <input placeholder="Enter Email" type="text" name = 'email' class="form-control">-->
              <!--        </div>-->
              <!--        <div class="col-lg-6 mb-4">-->
              <!--            <label >Orders</label>-->
              <!--            <input placeholder="Enter number of orders" type="text" name = 'order' class="form-control">-->
              <!--        </div>-->
              <!--        <div class="col-lg-6 mb-4">-->
              <!--             <label>Completion</label>-->
              <!--            <input placeholder="Enter completion rate in %" type="text" name = 'completion' class="form-control">-->
              <!--        </div>-->
              <!--        <div class="col-lg-6 mb-4">-->
              <!--             <label>Exchange Rate</label>-->
              <!--            <input placeholder="Enter exchange rate" type="text" name = 'rate' class="form-control">-->
              <!--        </div>-->
              <!--        <div class="col-lg-6 mb-4">-->
              <!--             <label>Available Amount</label>-->
              <!--            <input placeholder="Enter available amount" type="text" name = 'amount' class="form-control">-->
              <!--        </div>-->
              <!--        <div class="col-lg-12 mb-4">-->
              <!--              <label>Payment Options</label>-->
              <!--              <div id="payment-options">-->
              <!--                  <div class="input-group mb-3">-->
              <!--                      <input type="text" name="payment_options[]" class="form-control" placeholder="Enter payment option">-->
              <!--                      <button type="button" class="btn btn-primary add-payment-option">Add More</button>-->
              <!--                  </div>-->
              <!--              </div>-->
              <!--          </div>-->
              <!--        <div class="">-->
              <!--            <button name="add" class="btn btn-primary shadow">Submit</button>-->
              <!--        </div>-->
              <!--    </div>-->
              <!--</form>-->
              
              <div class="table-responsive">
                  <table class="table table-bordered">
                        <thead>
                              <tr>
                                    <th>S/N</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Privilege</th>
                                    <th>Password</th>
                                    <th>Action</th>
                              </tr>
                        </thead>
                        <tbody>
                             <?php 
                                $sql = "SELECT * FROM admin";
                                $result = mysqli_query($conn, $sql);
                                $num = 1;
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                         $name = $row['name'];
                                         $email = $row['email'];
                                         $privillege = $row['privillege'];
                                         $role = $row['role'];
                                         $password = $row['password'];
                                        ?>
                                              <tr>
                                                    <td><a href=''><?=$num++?></a></td>
                                                    <td><?=$name?></td>
                                                    <td><?=$email?></td>
                                                    <td><?=$role?></td>
                                                    <td class="bg-light"><?=$privillege?></td>
                                                    <td><?=$password?></td>
                                                    <td class="bg-light">
                                                         <a class="btn btn-danger btn-sm shadow text-uppercase"><i class="fa fa-trash-o"></i> Delete</a>
                                                    </td>
                                              </tr>
                                        
                                        <?php
                                    }
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