<?php
  $title = "Agent List";
   require_once('./home_header.php');
   require_once('../function/country.php');
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
               <div class="mb-4">
                    <button class="btn btn-primary shadow" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Add Agent</button>
               </div>
             
               <div class="table-responsive">
                    <table class="table table-bordered">
                         <thead>
                             <tr>
                               <th>S/N</th>
                               <th>FullName</th>
                               <th>Phone</th>
                               <th>Country</th>
                               <th>Action</th>
                                 
                             </tr>
                         </thead>
                         <tbody>
                             <?php 
                                $sql = "SELECT * FROM agent";
                                $result = mysqli_query($conn, $sql);
                                $num = 1;
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        $fname = $row['fname'];
                                        $lname = $row['lname'];
                                        $country = $row['country'];
                                        $phone = $row['phone'];
                                        $agent_id = $row['id'];
                                        
                                        $fullname = $fname . ' ' . $lname;
                                        
                                        ?>
                                        
                                             <tr>
                                                 <td><?=$num++?></td>
                                                 <td><?=$fullname?></td>
                                                 <td><?=$phone?></td>
                                                 <td><?=$country?></td>
                                                 <td><button class="btn btn-danger shadow btn-sm" onclick="deleteAgent(<?=$agent_id?>)"><i class="fa fa-trash-o"></i> Delete</button></td>
                                             </tr>
                                        <?php
                                    }
                                    
                                }else{
                                     echo "No agent have been added yet";
                                }
                             ?>
                         </tbody>
                    </table>
               </div>
           
          </div>
          <!-- Container-fluid Ends-->
        </div>
        


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Agent</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
             <form action="./inc/add-agent.php" method="post">
                  <div class="row">
                      <div class="col-lg-12 mb-4">
                        <label>FirstName</label>
                          <input placeholder="Enter FirstName" type="text" name = 'fname' class="form-control">
                      </div>
                      <div class="col-lg-12 mb-4">
                        <label>LastName</label>
                          <input placeholder="Enter LastName" type="text" name = 'lname' class="form-control">
                      </div>
                      <div class="col-lg-12 mb-4">
                          <label >Phone Number (Start with country code)</label>
                          <input placeholder="+2346655656713" type="text" name = 'phone' class="form-control">
                      </div>
                      <div class="form-group col-lg-12">
                                      <label class="col-form-label">Country</label>
                                      <select class="form-control" name="country" required>
                                          <option value="">Select your country</option>
                                          <?php foreach ($countries as $country): ?>
                                              <option value="<?= htmlspecialchars($country); ?>"><?= htmlspecialchars($country); ?></option>
                                          <?php endforeach; ?>
                                      </select>
                          </div>
                   
                      <div class="mt-4">
                          <button name="add" class="btn btn-primary shadow">Submit</button>
                      </div>
                  </div>
              </form>
      </div>
     
    </div>
  </div>
</div>


        <script>
            function deleteAgent(id) {
                Swal.fire({
                title: `Delete Agent`,
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonText: `Yes, Delete`,
                cancelButtonText: "Cancel",
                customClass: {
                confirmButton: "swal-confirm-btn",
                cancelButton: "swal-cancel-btn",
                },
                }).then((result) => {
                    if (result.isConfirmed) {
                              window.location.href = `./inc/deleteAgent.php?id=${id}`;
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