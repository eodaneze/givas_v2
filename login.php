<?php 
   $title = "Login";
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
                <form class="theme-form" action="./inc/login.php" method="POST">
                  <h4>Welcome Back</h4>
                  <p>Don't have an Account? <a href='./register'>Sign Up</a></p>
                  <div class="form-group">
                    <label class="col-form-label">Username</label>
                    <input class="form-control p-3" name="uname" type="text" required="" placeholder="your username">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                      <div class="form-input position-relative">
                         <input class="form-control p-3" name="password" type="password" required="" placeholder="*********" id="passwordInput">
                            <div class="show-hide" onclick="togglePassword()">
                                <i class="fa-solid fa-eye" style="color: #07847f; cursor: pointer" id="eyeIcon"></i>
                            </div>
                     </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    </div>
                    <button class="btn btn-secondary btn-block w-100 p-3" name="login">Login</button>
                  </div>
                 
                  <p class="mt-4 mb-0">Forgot Password?<a class="ms-2" href="./forget-password">Click to Reset Password</a></p>
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

 <!-- Smartsupp Live Chat script -->
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'a4e9e4ad3b245c98072ceffa2e1a5776c48fdd91';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.givas.org” target=“_blank”>Givas Community</a></noscript>