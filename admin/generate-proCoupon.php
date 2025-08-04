<?php
  $title = "Pro Coupon";
   require_once('./home_header.php');
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
                <form id="couponForm">
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <label>Number Of Coupons</label>
                            <input placeholder="Enter number of coupons" type="number" name="no_coupon" class="form-control" required>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary shadow" id="generateBtn">
                                Generate
                            </button>
                        </div>
                    </div>
                </form>

                <div class="table-responsive mt-4 bg-white" id="couponTableArea">
                    <!-- Coupons will load here -->
                </div>
            </div>
          <!-- Container-fluid Ends-->
        </div>

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


<script>
document.getElementById('couponForm').addEventListener('submit', function(e) {
    e.preventDefault();
    let btn = document.getElementById('generateBtn');
    btn.innerHTML = `<span class="spinner-border spinner-border-sm"></span> Generating coupon, please wait...`;
    btn.disabled = true;

    setTimeout(() => {
        let formData = new FormData(this);
        fetch('./inc/generate_Procoupon', {
            method: 'POST',
            body: formData
        })
        .then(res => res.text())
        .then(response => {
            btn.innerHTML = "Generate";
            btn.disabled = false;

            if (response.includes('error')) {
                alertify.error(response);
            } else {
                document.getElementById('couponTableArea').innerHTML = response;
                alertify.success('Coupons generated successfully');
            }
        })
        .catch(() => {
            btn.innerHTML = "Generate";
            btn.disabled = false;
            alertify.error("Something went wrong.");
        });
    }, 2000);
});

// Clipboard copy handler
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('copy-btn')) {
        let code = e.target.getAttribute('data-code');
        navigator.clipboard.writeText(code).then(() => {
            let copiedText = document.createElement('span');
            copiedText.innerText = " Copied!";
            copiedText.style.color = 'green';
            copiedText.style.marginLeft = '10px';
            e.target.parentNode.appendChild(copiedText);
            setTimeout(() => copiedText.remove(), 2000);
        });
    }
});
</script>
  </body>
</html>