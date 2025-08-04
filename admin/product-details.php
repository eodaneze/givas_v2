<?php
  $title = "Product Details";
   require_once('./home_header.php');

  //  use the product id in the url to get the product details
  if(isset($_GET['pid'])){
     $product_id = $_GET['pid'];
  }
  $productResult = mysqli_query($conn, "SELECT * FROM products WHERE product_id = '$product_id'");
  $productRow = mysqli_fetch_assoc($productResult);
  $pname = $productRow['pname'];
  $category = $productRow['category'];
  $price = $productRow['price'];
  $pimage = $productRow['image'];
  $pdecrip = $productRow['pdecrip'];
  $ptype = $productRow['ptype'];
  $commission = $productRow['commission'];
  $approve_type = $productRow['approve_type'];
  $sales_page_url = $productRow['sales_page_url'];
  $download_url = $productRow['download_url'];
  $webinar_url = $productRow['webinar_url'];
  $jv_page_url = $productRow['jv_page_url'];
  $isgenerate_button = $productRow['isgenerate_button'];
   
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
                <form action="">
                    <div class="list-product-content">
                        <div class="list-left ">
                              <label for="productName" class="mb-1">Product Name</label>
                              <input type="text" placeholder="Enter Product Name" class="mb-4 p-3" value="<?=$pname?>" readonly>
                              <label for="Description">Description</label>
                              <textarea name="" class="mb-4 p-3" id="" placeholder="Enter Product Description" readonly><?=$pdecrip?></textarea>
                              <div class="product-category-type mb-4">
                                <div class="product-category">
                                    <label for="category">Product Category</label>
                                    <select class="p-3 mb-4" disabled>
                                        <option value=""><?=$category?></option>
                                    </select>
                                </div>
                                <div class="product-type">
                                    <label for="category">Product Type</label>
                                    <select class="p-3" disabled>
                                        <option value=""><?=$ptype?></option>
                                        
                                    </select>
                                </div>
                              </div>      
                              <div class="product-category-type mb-4">
                                <div class="product-category">
                                    <label for="currency">Currency</label>
                                    <input type="text" value="USD" class="p-3 mb-4" readonly  >
                                </div>
                                <div class="product-type">
                                    <label for="category">Product Price</label>
                                    <input type="text" placeholder="Enter Product Price" class="p-3" readonly value="<?=number_format($price, 2)?>">
                                </div>
                              </div>      
                              <div class="product-category-type mb-4">
                                <div class="product-category">
                                    <label for="category">Commission Percentage</label>
                                    <input type="text" placeholder="Enter Commission Percentage" class="p-3 mb-4" readonly value="<?=$commission?>">
                                </div>
                                <div class="product-type">
                                    <label for="category">How to approve Affiliates</label>
                                    <select class="p-3" disabled>
                                        <option value=""><?=$approve_type?></option>
                                      
                                    </select>
                                </div>
                              </div> 
                              <label for="url" class="mb-1">URL to Product Sales Page</label>
                              <input type="text" placeholder="Enter URL to Product Sales Page" class="mb-4 p-3" readonly value="<?=$sales_page_url?>"> 

                              <label for="url" class="mb-1">URL to Product Download or Thank you page</label>
                              <input type="text" placeholder="Enter URL to Product Download or Thank you page" class="mb-4 p-3" readonly value="<?=$download_url?>">  

                              <label for="url" class="mb-1">Webinar URL</label>
                              <input type="text" placeholder="Enter Webinar URL" class="mb-4 p-3" readonly value="<?=$webinar_url?>">  

                              <label for="url" class="mb-1">URL to JV Page or Marketing Resources</label>
                              <input type="text" placeholder="Enter URL to JV Page or Marketing Resources" class=" mb-3 p-3" readonly value="<?=$jv_page_url?>">  

                              <div class="mt-3">
                                   <a class="btn btn-primary btn-sm shadow text-white" onclick="publishProduct(<?=$product_id?>)">Approve</a>
                                   <a class="btn btn-danger btn-sm shadow text-white" onclick="rejectProduct(<?=$product_id?>)">Reject</a>
                              </div>
                         </div>
                         <div class="list-right">
                             <div class="product-image mb-2">
                                 <img src="<?=$pimage?>" alt="">
                                </div>
                                <p>Product Image</p>
                         </div>
                    </div>
                </form>

                <!-- <div class="update mb-5">
                  <a href="./generate-product">
                      <button class="next-cta">Next</button>
                  </a>
                 </div> -->
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


  </body>
</html>
