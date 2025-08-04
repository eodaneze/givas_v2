<?php
  $title = "Givas Plan";
   require_once('./home_header.php');
?>
<style>
      button{
          border: none;
          width: 100%;
          padding: 25px 0;
          border-radius: 10px;
          margin-top: 30px;
          font-weight: bold;
          font-size: 16px;
      }
      .btn-1{
        background-color: #006666;
        color: white;
      }
</style>

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
                    
                <div class="row justify-content-center mt-5">
                    <!-- Basic Plan -->
                    <div class="col-md-5 mb-4">
                        <div class="pricing-card bg-light p-5 rounded-4">
                            <div class="d-flex justify-content-between">
                                    <h3 class="fw-bold" style="color: #006666;">Basic</h3>
                                    <h4  style="color: #006666;">$12<span class="fs-6"></span></h4>
                            </div>
                            <button class="btn-1 fw-bold">Current Plan</button>
                        </div>
                    </div>
                    <!-- Pro Plan -->
                    <div class="col-md-5 mb-4">
                        <div class="pricing-card shadow  text-white p-5 rounded-4" style="background-color: #006666;">
                            <div class="d-flex justify-content-between">
                                <h3 class="fw-bold text-white">Pro <span class="badge text-bg-light" style="font-size: 10px;">Popular</span></h3>
                                <h4 class="text-light">$20<span class="fs-6"></span></h4>
                            </div>
                            <button class="btn-2 fw-bold" id="activateBtn">Activate this plan</button>
                        </div>
                    </div>
                </div>  


              
           
          </div>
          <!-- Container-fluid Ends-->
        </div>

       

       
        
        <script>
              document.addEventListener("DOMContentLoaded", function() {
                let btn = document.getElementById("activateBtn");

                // Reset the button if the user is not returning from a redirect
                if (sessionStorage.getItem("redirected") === "true") {
                    btn.innerHTML = "Activate this plan"; // Reset text
                    btn.style.backgroundColor = ""; // Reset background color
                    btn.disabled = false; // Enable button
                    sessionStorage.removeItem("redirected"); // Clear stored state
                }

                btn.addEventListener("click", function() {
                    btn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Redirecting, please wait...';
                    btn.style.backgroundColor = "#f0f0f0"; // Change background color
                    btn.disabled = true; // Disable button

                    sessionStorage.setItem("redirected", "true"); // Store redirect state

                    setTimeout(() => {
                        window.location.href = "./complete-setup";
                    }, 4000);
                });
            });
        </script>

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