<?php
  $title = "My Accounts";
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
                               <th>Username</th>
                               <th>Email</th>
                               <th>Withdrawal Balance</th>
                               <th>Current Phase</th>
                               <th>Action</th>
                            
                           </tr>
                       </thead>
                    <!--  -->
                    <tbody>
                        <?php 
                        // Get the logged-in user's account type
                        $user_id = $_SESSION['userId'];
                        $userCheckSql = "SELECT account_type FROM user WHERE user_id = '$user_id'";
                        $userCheckRes = mysqli_query($conn, $userCheckSql);
                        $loggedInUser = mysqli_fetch_assoc($userCheckRes);
                        $loggedInAccountType = $loggedInUser['account_type'];

                        // Fetch only secondary accounts linked to the logged-in user's email
                        $sql = "SELECT * FROM user WHERE email = '$email' AND account_type = 'secondary'";
                        $res = mysqli_query($conn, $sql);
                        $i = 1;

                        while ($row = mysqli_fetch_assoc($res)) {
                            $user_id = $row['user_id'];
                            $uname = $row['uname'];
                            $fname = $row['fname'];
                            $lname = $row['lname'];
                            $email = $row['email'];
                            $fullName = $fname . ' ' . $lname;

                            // get the withdrawal balance of the users that was linked to the primary account
                            $withdrawalSql = "SELECT * FROM withdrawal_balance WHERE user_id = '$user_id'";
                            $withdrawalResult = mysqli_query($conn, $withdrawalSql);
                            $widthdrawalRow = mysqli_fetch_assoc($withdrawalResult);
                            $balance = $widthdrawalRow['amount'];


                            $tables = [
                                'givas_phase_1',
                                'givas_phase_2',
                                'success_phase_1',
                                'success_phase_2',
                                'abundance_phase_1',
                                'abundance_phase_2'
                            ];

                            $phase = "Not Found"; // Default value if no phase is found

                            foreach ($tables as $table) {
                                $phase_query = "SELECT phase FROM $table WHERE user_id = '$user_id'";
                                $phase_result = mysqli_query($conn, $phase_query);

                                if ($phase_row = mysqli_fetch_assoc($phase_result)) {
                                    $phase = $phase_row['phase'];
                                    break; // ✅ Exit loop once a phase is found
                                }
                            }

                        ?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$fullName?></td>
                                <td><?=$uname?></td>
                                <td><?=$email?></td>
                                <th>$ <?=$balance?></th>
                                <td><?=$phase?></td>
                                <td>
                                    <?php if ($loggedInAccountType == 'primary') { ?>
                                        <a href='./switchAccount?user_id=<?=$user_id?>' target="_blank" class="btn btn-primary">Login Account</a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </tbody>

                    <!--  -->
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