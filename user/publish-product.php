<?php
  $title = "Publish Product";
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
                  <!--  -->
                    
                      <form id="productForm" enctype="multipart/form-data">
                          <div class="list-product-content">
                              <div class="list-left">
                                  <label class="mb-1">Product Name</label>
                                  <input type="text" name="pname" placeholder="Enter Product Name" class="mb-4 p-3" required>
                                  <label>Description</label>
                                  <textarea name="pdecrip" class="mb-4 p-3" placeholder="Enter Product Description" required></textarea>
                                  <div class="product-category-type mb-4">
                                      <div class="product-category">
                                          <label>Product Category</label>
                                          <select class="p-3" name="category" required>
                                              <option value="" disabled selected>Select....</option>
                                              <option value="Sales & Marketing">Sales & Marketing</option>
                                              <option value="Employment">Employment</option>
                                              <option value="Education & Study">Education & Study</option>
                                              <option value="Health & Fitness">Health & Fitness</option>
                                              <option value="Parenting">Parenting</option>
                                              <option value="Publishing & Writing">Publishing & Writing</option>
                                              <option value="Affiliate Marketing">Affiliate Marketing</option>
                                              <option value="Religious & Spirituality">Religious & Spirituality</option>
                                              <option value="Sports">Sports</option>
                                          </select>
                                      </div>
                                      <div class="product-type">
                                          <label>Product Type</label>
                                          <input type="text" value="Digital" name="ptype" class="mb-4 p-3" readonly>
                                          
                                      </div>
                                  </div>
                                  <div class="product-category-type mb-4">
                                      <div class="product-category">
                                          <label>Currency</label>
                                          <input type="text" value="USD" class="p-3" readonly>
                                      </div>
                                      <div class="product-type">
                                          <label>Product Price</label>
                                          <input type="text" name="price" placeholder="Enter Product Price" class="p-3" required>
                                      </div>
                                  </div>
                                  <div class="product-category-type mb-4">
                                      <div class="product-category">
                                          <label>Commission Percentage</label>
                                          <input type="text" name="commission" value="50" placeholder="Enter Commission Percentage" class="p-3" required readonly>
                                      </div>
                                      <div class="product-type">
                                          <label>How to approve Affiliates</label>
                                          <select class="p-3" name="approve_type" required>
                                              <option value="" disabled selected>Select....</option>
                                              <option value="Automatic">Automatic</option>
                                              <option value="Manual">Manual</option>
                                          </select>
                                      </div>
                                  </div>
                                  <label class="mb-1">URL to Product Sales Page</label>
                                  <input type="text" name="sales_page_url" placeholder="Enter URL to Product Sales Page" class="mb-4 p-3" required>
                                  <label class="mb-1">URL to Product Download or Thank you page</label>
                                  <input type="text" name="download_url" placeholder="Enter URL to Product Download or Thank you page" class="mb-4 p-3" required>
                                  <label class="mb-1">Webinar URL</label>
                                  <input type="text" name="webinar_url" placeholder="Enter Webinar URL" class="mb-4 p-3">
                                  <label class="mb-1">URL to JV Page or Marketing Resources</label>
                                  <input type="text" name="jv_page_url" placeholder="Enter URL to JV Page or Marketing Resources" class="mb-3 p-3">
                              </div>
                              <div class="list-right">
                                  <div class="product-image mb-2">
                                      <img id="upload" src="../assets/images/team/1.jpg" alt="">
                                      <i class="edit-icon fa fa-image" onclick="document.getElementById('profileUpload').click()"></i>
                                  </div>
                                  <p>Product Image</p>
                                  <input class="d-none" type="file" id="profileUpload" name="image" accept="image/*" required>
                              </div>
                          </div>
                          <button type="submit" id="submitBtn" class="next-cta">Next</button>
                      </form>
                  <!--  -->

             
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
document.getElementById('profileUpload').addEventListener('change', function (e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (event) {
            document.getElementById('upload').src = event.target.result;
        };
        reader.readAsDataURL(file);
    }
});

document.getElementById('productForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const btn = document.getElementById('submitBtn');
    btn.disabled = true;
    btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Processing...';

    setTimeout(() => {
        const formData = new FormData(document.getElementById('productForm'));
        formData.append('submit', '1');
        fetch('./inc/publish-product', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            btn.disabled = false;
            btn.innerHTML = 'Next';
            if(data.status === 'success') {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: data.message,
                    showConfirmButton: false,
                    timer: 3000
                });
                setTimeout(() => {
                    window.location.href = './generate-button?pid=' + data.pid;
                }, 4000);
            } else {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'error',
                    title: data.message,
                    showConfirmButton: false,
                    timer: 3000
                });
            }
        })
        .catch(() => {
            btn.disabled = false;
            btn.innerHTML = 'Next';
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                title: 'Something went wrong',
                showConfirmButton: false,
                timer: 3000
            });
        });
    }, 2000);
});
</script>

  </body>
</html>
