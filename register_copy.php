<?php
  $title = "Register";
  require_once('./account_header.php');
  require_once('./model/direct-payment.model.php');
  require_once('./model/contact-agent.php');
  require_once('./function/country.php');
  require_once('./function/entity.php');
?>

<body>
  <div class="container-fluid p-0"> 
    <div class="row m-0">
      <div class="col-xl-7 p-0 d-none d-xl-block">
        <img class="bg-img-cover bg-center" src="./admin/assets/images/login/1.jpg" alt="looginpage">
      </div>
      <div class="col-xl-5 p-0"> 
        <div class="login-card login-dark">
          <div>
            <div class="login-main">
              <!-- Modal Trigger -->
              <script>
                $(document).ready(function() {
                  $('#onboardingModal').modal('show');
                });
              </script>

              <!-- Modal -->
              <div class="modal fade" id="onboardingModal" tabindex="-1" aria-labelledby="onboardingModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title fw-bold" id="onboardingModalLabel">Onboarding in Progress</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>We are currently onboarding users. Registration will open once the process is complete. Thank you for your patience!</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" id="redirectButton">Close and Redirect</button>
                    </div>
                  </div>
                </div>
              </div>

              <h4>Create your account</h4>
              <?php 
                if(isset($_GET['next'])) {
                  // Your existing registration form code here...
                } else {
                  // Your existing payment instructions code here...
                }
              ?>

              <?php 
                if(isset($_GET['next'])){
                  echo '<p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="./login">Login</a></p>';
                } else {
                  echo '<p class="mt-4 mb-0 text-center">Already have an coupon code?<a class="ms-2" href="?next">Register</a></p>';
                  echo '<p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="./login">Login</a></p>';
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php require_once('./admin/sweet-alert.php') ?>
    <!-- Include JS Libraries -->
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="./assets/js/icons/feather-icon/feather-icon.js"></script>
    <script src="./assets/js/config.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      // Redirect to home page after modal is closed
      document.getElementById('redirectButton').addEventListener('click', function() {
        window.location.href = './'; // Replace with the actual path to your homepage
      });

      // Also redirect if the modal is dismissed without clicking the button
      $('#onboardingModal').on('hidden.bs.modal', function() {
        window.location.href = './'; // Replace with the actual path to your homepage
      });
    </script>
  </div>
</body>
</html>
