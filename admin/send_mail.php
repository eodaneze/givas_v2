<?php
  $title = "Send Email";
   require_once('./home_header.php');
   require_once('./model/confirm_account.php')
?>

  <body>  
      <script src="./tinymce/js/tinymce/tinymce.min.js"></script>
  <script>
    tinymce.init({
      selector: '#mailMessage',
      height: 200,
      menubar: false,
      plugins: 'lists link image preview',
      toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | link image preview',
      branding: false
    });
  </script>
    
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
               <form action="./inc/sendEmail" method="post">
                   <div class="row">
                      <div class="col-lg-12 mb-3">
                           <label>Title</label>
                           <input name="title" type="text" class="form-control p-3">
                      </div>
                      <div class="col-lg-12 mb-3">
                           <label>Body</label>
                           <textarea name="message" id="mailMessage" class="form-control"></textarea>
                      </div>
                      <div class="col-lg-12">
                          <button class="btn btn-primary p-3">Send</button>
                      </div>
                   </div>

               </form>
           
          </div>
          <!-- Container-fluid Ends-->
        </div>

       

      
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


