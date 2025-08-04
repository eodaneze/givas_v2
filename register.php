<?php

  $title = "Register";
  require_once('./account_header.php');
  require_once('./model/contact-agent.php');
  require_once('./function/country.php');
  require_once('./function/entity.php');
//   require_once('./model/proPlan-directPayment.modal.php')



?>
<style>
   .button-reg{
          width: 100%;
          border: none;
          padding: 10px;
          border-radius: 5px;
          transition: .30s ease;
          color: white;
     }
     .btn-main{
          background-color: #fe7f4c;
     }
        .btn-pri{
          background-color: #07847f;
          
     }
     .btn-main:hover{
         border: 1px solid #fe7f4c;
         background-color: white;
         color: black;
         transition: .30s ease;
     }
     .btn-pri:hover{
         border: 1px solid #07847f;
         background-color: white;
         color: black;
     }
     @media (max-width: 600px){
         .btn-pri{
              margin-bottom: 15px;
         }
     }
       
    
</style>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0"> 
      <div class="row m-0">
        <div class="col-xl-7 p-0 d-none d-xl-block"><img class="bg-img-cover bg-center" src="./admin/assets/images/login/1.jpg" alt="looginpage"></div>
        <div class="col-xl-5 p-0"> 
          <div class="login-card login-dark">
            <div>
              <div class="login-main"> 
               <div class="mb-4 text-center">
                   <a href="./"><img src="assets/images/Givas.png" width="50px" alt=""></a>
               </div> 
                <!--<h4>Create your account</h4>-->
                <?php 
                     if(isset($_GET['plan']) && $_GET['plan'] == 'pro'){
                     
                          ?>
                              <h4>Create Pro account</h4>
                                
                                    <p>To be able to create a pro account on Givas you need to pay a sum of $30 for your entry code.</p>
        
                                    <!--<p><i>Click <a href="" id="openSidebar" class="fw-bold">here</a> to know more about the pro plan and it's features</i></p>-->
                  
                                    <h5 class="mb-3">How to Make Payment</h5>
                                    <ol class="mb-4">
                                        <li>Pay directly to the company wallet</li>
                                        <li>Pay to a vendor using any local account</li>
                                    </ol>
                                    <div class="row">
                                      <div class="col-lg-6">
                                        <button type="button" class="btn-pri button-reg" id="openModal">
                                            Direct Payment
                                          </button>
        
                                      </div>
                                      <div class="col-lg-6">
                                        <button type="button" class="btn-main button-reg" data-bs-toggle="modal" data-bs-target="#exampleModal2">Contact Agent</button>
        
                                      </div>
                                    </div>
                        <?php
                         require_once('./model/proPlan-directPayment.modal.php');
                     }elseif(isset($_GET['next'])){
                       ?>
                          <form class="theme-form" action="./inc/register.php" method="post">
                                <div class="form-group">
                                  <script>
                                    $(document).ready(function() {
                                      $('#instructionModal').modal('show');
                                    });
                                  </script>

                                  <!-- Modal -->
                                  <div class="modal fade" id="instructionModal" tabindex="-1" aria-labelledby="instructionModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title fw-bold" id="instructionModalLabel">Instructions 📍📍</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Please follow the instructions carefully to complete your registration.</p>
                                          <ul>
                                            <li class="mb-2"><i class="fa fa-check-circle" style="color: #07847f;"></i> Fill in all the required fields.</li>
                                            <li class="mb-2"><i class="fa fa-check-circle" style="color: #07847f;"></i>  Ensure your email address is correct.</li>
                                            <li class="mb-2"><i class="fa fa-check-circle" style="color: #07847f;"></i>  Use a strong password for your account.</li>
                                            <li class="mb-2"><i class="fa fa-check-circle" style="color: #07847f;"></i>  Your username is unique and can't be used for multiple account</li>
                                            <li class="mb-2"><i class="fa fa-check-circle" style="color: #07847f;"></i>  Please if you want to create multiple account, don't use the same username but u can use the same email to create as many account as possible</li>
                                            <li class="mb-2"><i class="fa fa-check-circle" style="color: #07847f;"></i>  You can only use your coupon code once so make sure u don't share it with anybody</li>
                                            <li class="mb-2"><i class="fa fa-check-circle" style="color: #07847f;"></i>  Enter the coupon code you received after payment.</li>
                                          </ul>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <label class="col-form-label pt-0">Your Name</label>
                                  <div class="row g-2">
                                    <div class="col-6">
                                      <input class="form-control" name="fname" type="text" required="" placeholder="First name">
                                    </div>
                                    <div class="col-6">
                                      <input class="form-control" name="lname" type="text" required="" placeholder="Last name">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-form-label">Username</label>
                                  <input class="form-control" name="uname" type="text" required="" placeholder="your username">
                                </div>
                                <div class="form-group">
                                  <label class="col-form-label">Email Address</label>
                                  <input class="form-control" name="email" type="email" required="" placeholder="Test@gmail.com">
                                </div>
                                <div class="form-group">
                                  <label class="col-form-label">Password</label>
                                   <div class="form-input position-relative">
                                        <input class="form-control" name="password" type="password" required="" placeholder="*********" id="passwordInput">
                                        <div class="show-hide" onclick="togglePassword()">
                                            <i class="fa-solid fa-eye" style="color: #07847f; cursor: pointer" id="eyeIcon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                      <label class="col-form-label">Country</label>
                                      <select class="form-control" name="country" required>
                                          <option value="">Select your country</option>
                                          <?php foreach ($countries as $country): ?>
                                              <option value="<?= htmlspecialchars($country); ?>"><?= htmlspecialchars($country); ?></option>
                                          <?php endforeach; ?>
                                      </select>
                                  </div>
                                <div class="form-group">
                                      <label class="col-form-label">Entity</label>
                                      <select class="form-control" name="entity" required>
                                          <option>Select Entity</option>
                                          <?php foreach ($entities as $entity): ?>
                                              <option value="<?= htmlspecialchars($entity); ?>"><?= htmlspecialchars($entity); ?></option>
                                          <?php endforeach; ?>
                                      </select>
                                  </div>
                                <div class="form-group">
                                  <label class="col-form-label">Entry Code</label>
                                  <input class="form-control" name="coupon" type="text" required="" placeholder="00000000">
                                </div>
                                
                                <?php
                                   if(isset($_GET['ref'])){
                                       $ref = $_GET['ref'];
                                       $_SESSION['checkRef'] = true;
                                       ?>
                                            <div class="form-group">
                                              <label class="col-form-label">Referral</label>
                                              <input class="form-control" name="ref" type="text" value="<?=$ref?>" readonly>
                                            </div>
                                       <?php
                                   }else{
                                      ?>
                                         <div class="form-group">
                                            <label class="col-form-label">Referral (Optional)</label>
                                              <input class="form-control" name="ref" type="text">
                                        </div>
                                      <?php
                                   }
                                ?>
                                <div class="form-group mb-0">
                                  <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox">
                                    <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="sign-up-two.html#">Privacy Policy</a></label>
                                  </div>
                                  <button class="btn btn-secondary btn-block w-100" name="register">Create Account</button>
                                </div>
                            </form>
                         <?php

                     }else{
                         require_once('./model/direct-payment.model.php')
                        ?>
                          <!-- this is the website -->
                        
                          <p>To be able to create an account on Givas you need to pay a sum of $12. $10 for your entry code and $2 for gas fee</p>
        
                          <h5 class="mb-3">How to Make Payment</h5>
                          <ol class="mb-4">
                              <li>Pay directly to the company wallet</li>
                              <li>Pay to a vendor using any local account</li>
                          </ol>
                          <div class="row">
                            <div class="col-lg-6">
                              <button type="button" class="btn-pri p-3 button-reg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  Direct Payment
                                </button>

                            </div>
                            <div class="col-lg-6">
                              <button type="button" class="btn-main p-3 button-reg" data-bs-toggle="modal" data-bs-target="#exampleModal2">Contact Agent</button>

                            </div>
                          </div>
                        <?php
                     }
                  ?>
               
                 <?php 
                    if(isset($_GET['next'])){
                        ?>
                        <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="./login">Login</a></p>
                        
                        <?php
                    }else{
                        ?>
                             <p class="mt-4 mb-0 text-center">Already have an entry code?<a class="ms-2" href="?next">Register</a></p> 
                             <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="./login">Login</a></p> 
                        <?php
                    }
                 ?>
               
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
      <!-- latest jquery-->
      <script src="./assets/js/jquery.min.js"></script>
      <!-- Bootstrap js-->
      <script src="./assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="./assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="./assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="./assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- calendar js-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="./assets/js/script.js"></script>

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Include Alertify CSS and JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alertify.js/0.3.11/alertify.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/alertify.js/0.3.11/alertify.core.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/alertify.js/0.3.11/alertify.default.css">

    <script>
        alertify.set("notifier", "position", "top-right");
    const form = document.getElementById('proPlanForm');
    const submitBtn = form.querySelector('.btn-submit');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        submitBtn.disabled = true;
        submitBtn.innerText = 'Uploading proof... Please wait';

        setTimeout(() => {
            const formData = new FormData(form);
            formData.append('upload_proof', true);

            fetch('./user/inc/process_proplan', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                submitBtn.disabled = false;
                submitBtn.innerText = 'Submit';

                if (data.status === 'success') {
                    alertify.success(data.message);
                    setTimeout(() => {
                        window.location.href = './register?next';
                    }, 2000);
                } else {
                    alertify.error(data.message);
                }
            })
            .catch(() => {
                alertify.error("An error occurred. Please try again.");
                submitBtn.disabled = false;
                submitBtn.innerText = 'Submit';
            });

        }, 2000);
    });
</script>



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

