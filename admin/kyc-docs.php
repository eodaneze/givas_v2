<?php
  $title = "KYC Documents";
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
                               <th>Email</th>
                               <th>Type</th>
                               <th>Number</th>
                               <th>Image</th>
                               <th>Status</th>
                               <th></th>
                           </tr>
                       </thead>
                       <tbody>
                           <?php 
                              $sql = "SELECT * FROM kyc WHERE status = 'Pending'";
                              $res = mysqli_query($conn, $sql);
                              if(mysqli_num_rows($res) > 0){
                                  $i = 1;
                                  while($row = mysqli_fetch_assoc($res)){
                                      $id = $row['id'];
                                      $user_id = $row['user_id'];
                                      $document_type = $row['document_type'];
                                      $document_number = $row['document_number']?: 'NULL';
                                      $file_path = $row['file_path'];
                                      $status = $row['status'];
                                      
                                      // get the details of the user using the userid
                                      $userSql = "SELECT * FROM user WHERE user_id = '$user_id'";
                                      $userResult = mysqli_query($conn, $userSql);
                                      $userRow = mysqli_fetch_assoc($userResult);
                                      $uname = $userRow['uname'];
                                      $email = $userRow['email'];
                                      
                                      ?>
                                      <tr>
                                          <td><?=$i?></td>
                                          <td><?=$uname?></td>
                                          <td><?=$email?></td>
                                          <td><?=$document_type?></td>
                                          <td><?=$document_number?></td>
                                          <td>
                                            <a href="#" onclick="openModal('<?=$file_path?>'); return false;">Preview Image</a>
                                            <!--<a href="#" onclick="openModal('../user/inc/<?=$file_path?>'); return false;">Preview Image</a>-->
                                          </td>
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
                                                        <a class="dropdown-item" href="javascript:void(0);" onclick="approveDocs(<?=$user_id?>)">
                                                            <i class="fa fa-check-circle text-success"></i> Approve
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);" onclick="rejectDocs(<?=$user_id?>)">
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

        <!-- preview kyc docs modal -->
        <div id="imageModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img id="modalImage" class="modal-content">
        </div>


  <script>
     function openModal(imageSrc) {
    document.getElementById('modalImage').src = imageSrc;
    document.getElementById('imageModal').style.display = 'block';
      }

      function closeModal() {
          document.getElementById('imageModal').style.display = 'none';
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