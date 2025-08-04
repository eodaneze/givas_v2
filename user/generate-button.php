<?php
  $title = "Generate Product";
   require_once('./home_header.php');

   if(isset($_GET['pid'])){
      $product_id = $_GET['pid'];
      $pixel = "<script src='https://cdn.givas.org/pixel/pixel.min.js' data-product='$product_id'></script>";

   }
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
              require_once('./sidebar.php');
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
            
              <div class="row">
                <form id="generateButtonForm">
                    <div class="generate-product-content">
                        <div class="list-left ">
                              <label for="pixelCode" class="mb-2">1. Copy & Paste Pixel Code on your Sales Page</label>
                              <p>Kindly copy this pixel code below and insert it in your sales page header as a custom script. Givas integration?  <a href="">CLICK HERE TO SEE AN EXAMPLE</a></p>
                              
                              <input type="text" class="form-control p-3 mb-3" style="font-size: 10px;" value="<?php echo htmlspecialchars($pixel); ?>" readonly>
                              

                              
                              <label for="generate-product-cta">2. Generate your PAY BUTTON (CTA)</label>
                              <p class="mb-4">Select from the button options below that best suits your Website/ Sales page and then copy the code generated and insert in your website.</p>
                              <label for="">Select Button Type</label>
                              <div id="click" class="paste-pixel p-3 mb-3">
                                  <h6>Select......</h6>
                              </div>
                               <!--  -->
                               <div id="buttonType" class="all-button-types mb-3">
                                  <div class="button-types-content">
                                      <div class="button-type">
                                          <img class="selectable-button" width="100" src="https://cdn.givas.org/btn/button1.webp" alt="<?=$product_id?>">
                                      </div>
                                      <div class="button-type">
                                          <img class="selectable-button" width="100" src="https://cdn.givas.org/btn/button2.webp" alt="<?=$product_id?>">
                                      </div>
                                      <div class="button-type">
                                          <img class="selectable-button" width="100" src="https://cdn.givas.org/btn/button4.webp" alt="<?=$product_id?>">
                                      </div>
                                      <div class="button-type">
                                          <img class="selectable-button" width="100" src="https://cdn.givas.org/btn/button4.webp" alt="<?=$product_id?>">
                                      </div>
                                  </div>
                              </div>

                              <!-- Selected Button Display -->
                              <div class="selected-button mb-3" id="selectedButtonContainer">
                                  <h6>Please select a button</h6>
                              </div>

                              <!-- Button Code Display -->
                              <div class="button-code mb-2" id="buttonCodeContainer">
                                  <h5 class="mb-2">Your Button Code</h5>
                                  <pre><code>&lt;img src="" alt="<?=$product_id?>" width="100%" height="auto"&gt;</code></pre>
                              </div>
                               <!--  -->

                              
                            </div>
                        </div>
                        <div class="accept-terms pt-2">
                            <input type="checkbox" id="terms">
                            <p>I agree that my product meets all the guidelines and I have successfully completed the <strong>Givas code integrations</strong></p>
                        </div>
                        <div class="update pt-2 pb-5" type="button" id="saveButton">
                        <button type="button" class="next-cta" id="saveButton">Save</button>

                        </div>
                        <input type="hidden" id="selectedButton" name="selected_button" value="">
                        
                </form>

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
    const buttonImages = document.querySelectorAll('.selectable-button');
    const selectedButtonContainer = document.getElementById('selectedButtonContainer');
    const buttonCodeContainer = document.getElementById('buttonCodeContainer');

    buttonImages.forEach(img => {
        img.addEventListener('click', () => {
            const src = img.getAttribute('src');

            // Update selected button preview
            selectedButtonContainer.innerHTML = `<img src="${src}" width="100">`;

            // Escape HTML for display
            const codeString = `<img class="selectable-button" width="100" src="${src}" alt="<?=$product_id?>">`
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;');

            // Display escaped HTML as code
            buttonCodeContainer.innerHTML = `
                <h5 class="mb-2">Your Button Code</h5>
                <pre><code>${codeString}</code></pre>
            `;
        });
    });
</script>

<script>
function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

document.querySelectorAll('.selectable-button').forEach(button => {
    button.addEventListener('click', function () {
        const src = this.getAttribute('src');
        const productId = this.getAttribute('alt');
        document.getElementById('selectedButton').value = src;

        document.getElementById('selectedButtonContainer').innerHTML = `<img src="${src}" width="150">`;
        document.getElementById('buttonCodeContainer').innerHTML = `
            <h5 class="mb-2">Your Button Code</h5>
            <pre><code>&lt;img src="${src}" alt="${productId}" width="100%" height="auto"&gt;</code></pre>
        `;
    });
});

document.getElementById('saveButton').addEventListener('click', function () {
    const saveBtn = this;
    const selectedButton = document.getElementById('selectedButton').value;
    const termsChecked = document.getElementById('terms').checked;
    const productId = getQueryParam('pid');

    if (!selectedButton) {
        Swal.fire({
            toast: true,
            icon: 'error',
            title: 'Please select a button type.',
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
        return;
    }

    if (!termsChecked) {
        Swal.fire({
            toast: true,
            icon: 'warning',
            title: 'You must agree to the terms and conditions.',
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
        return;
    }

    saveBtn.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...`;
    saveBtn.disabled = true;

    setTimeout(() => {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', './inc/update-generate-button', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function () {
            saveBtn.innerHTML = 'Save';
            saveBtn.disabled = false;

            if (xhr.status === 200 && xhr.responseText === 'success') {
              localStorage.setItem('successMessage', 'Your course has been successfully installed and is currently under review by the Givas admin team. You will be notified via email once the status of your course is updated.');
              window.location.href = './my-product';

            } else {
                Swal.fire({
                    toast: true,
                    icon: 'error',
                    title: xhr.responseText || 'Something went wrong.',
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true
                });
            }
        };

        xhr.send(`product_id=${productId}&selected_button=${encodeURIComponent(selectedButton)}`);
    }, 3000);
});
</script>
<style>
.swal2-timer-progress-bar {
    background: #FF6A3E !important; /* Change to any color you want */
}
</style>

  </body>
</html>

