<?php 
   $title = "Forget Password";
  require_once('./account_header.php');
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
                <form class="theme-form" action="./inc/resetPassword.php" method="POST">
                  <h4>Forget Password</h4>
                  <p>Enter email associated with your account and we’ll send an email with instructions to reset your password.</p>
                  <div class="form-group mb-4">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control p-3" name="email" type="text" required="" placeholder="your email">
                  </div>
               
                  <div class="form-group mb-0">
                  
                    <button class="btn btn-secondary btn-block w-100 p-3" name="reset">Send Instruction</button>
                  </div>
                 
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>



<script>
     function togglePassword() {
        var passwordInput = document.getElementById("passwordInput");
        var eyeIcon = document.getElementById("eyeIcon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
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