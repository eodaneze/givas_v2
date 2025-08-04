<?php 
   $title = "Reset Password";
  require_once('./account_header.php');
  
    if(isset($_GET['email']) && isset($_GET['token'])){
      $email = $_GET['email'];
      $token = $_GET['token'];
  }
?>
  <body>
    <!-- login page start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-5 d-none d-lg-block"><img class="bg-img-cover bg-center" src="./admin/assets/images/login/2.jpg" alt="looginpage"></div>
        <div class="col-xl-7 p-0">    
          <div class="login-card login-dark">
            <div>
              <!-- <div><a class="logo text-start" href="index.html"> <img class="img-fluid for-dark" src="./givasAdmin/assets/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-light" src="./givasAdmin/assets/images/logo/logo_dark.png" alt="looginpage"></a></div> -->
              <div class="login-main"> 
                 <div class="mb-4 text-center">
                   <a href="./"><img src="assets/images/Givas.png" width="50px" alt=""></a>
                 </div>
                <form class="theme-form" action="./inc/resetPassword_1.php" method="POST">
                  <h4>Create New Password</h4>
                  <p>Enter your new password here</p>
                   <div class="form-group mb-4">
                        <label class="col-form-label">New Password</label>
                        <div class="form-input position-relative">
                            <input class="form-control p-3" name="password" type="password" required placeholder="*********" id="password">
                            <input type="hidden" name="email" value="<?=$email?>">
                            <input type="hidden" name="token" value="<?=$token?>">
                            <div class="show-hide" onclick="togglePassword('password', 'eyeIcon1')">
                                <i class="fa-solid fa-eye" style="color: #07847f; cursor: pointer" id="eyeIcon1"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group mb-4">
                        <label class="col-form-label">Confirm Password</label>
                        <div class="form-input position-relative">
                            <input class="form-control p-3" name="cpassword" type="password" required placeholder="*********" id="confirmPassword">
                            <div class="show-hide" onclick="togglePassword('confirmPassword', 'eyeIcon2')">
                                <i class="fa-solid fa-eye" style="color: #07847f; cursor: pointer" id="eyeIcon2"></i>
                            </div>
                        </div>
                    </div>

               
                  <div class="form-group mb-0">
                  
                    <button class="btn btn-secondary btn-block w-100 p-3" name="reset_1">Reset Password</button>
                  </div>
                 
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>



<script>
     function togglePassword(inputId, iconId) {
    let input = document.getElementById(inputId);
    let icon = document.getElementById(iconId);

    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}

</script>
      <?php require_once('./admin/sweet-alert.php') ?>
     <!-- <?php require_once('./script.php') ?> -->


      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </div>
  </body>
</html>