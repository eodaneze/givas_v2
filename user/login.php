<?php 
   $title = "Admin Login";
   require_once('./home_header.php');
?>
  <body>
    <!-- login page start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="./assets/images/login/2.jpg" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
          <div class="login-card login-dark">
            <div>
              <!-- <div><a class="logo text-start" href="index.html"><img class="img-fluid for-dark" src="./assets/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-light" src="./assets/images/logo/logo_dark.png" alt="looginpage"></a></div> -->
              <div class="login-main"> 
                <form class="theme-form" action="./inc/login.php" method="POST">
                  <h4>Admin Login</h4>
                  <p>Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" name="email" type="email" required="" placeholder="Test@gmail.com">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="password" required="" placeholder="*********">
                      <div class="show-hide"><span class="show">                         </span></div>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    
                    <button class="btn btn-primary btn-block w-100" name="login">Sign in</button>
                  </div>
                
        
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
     <?php 
        require_once('./sweet-alert.php');
        require_once('./script.php')
     ?>
    </div>
  </body>
</html>