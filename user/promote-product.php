<?php
  $title = "Promote Product";
   require_once('./home_header.php');

//    get the product details from the product_id in the url
     if(isset($_GET['pid'])){
        $product_id = $_GET['pid'];
        $productResult = mysqli_query($conn, "SELECT * FROM products WHERE product_id = '$product_id'");
        $productRow = mysqli_fetch_assoc($productResult);
        $pname = $productRow['pname'];
        $vendor_id = $productRow['vendor_id'];
        $product_price = $productRow['price'];
        $product_commision = $productRow['commission'];
        $webinar_url = $productRow['webinar_url'];
        $sales_page_url = $productRow['sales_page_url'];
        $jv_page_url = $productRow['jv_page_url'];
      

        // use the vendor id to get the vendor name in the users table
        $vendorResult = mysqli_query($conn, "SELECT * FROM user WHERE user_id = '$vendor_id'");
        $vendorRow = mysqli_fetch_assoc($vendorResult);
        $vendor_name = $vendorRow['fname'] . " " . $vendorRow['lname'];

        // use the vendor id to get the affiliate_id in the vendor table
        $affiliateResult = mysqli_query($conn, "SELECT * FROM vendor WHERE user_id = '$vendor_id'");
        $affiliateRow = mysqli_fetch_assoc($affiliateResult);
        $affiliate_id = $affiliateRow['affiliate_id'];
        $image = $affiliateRow['image'];
        $about = $affiliateRow['about'];
        $bdescription = $affiliateRow['bdescription'];

      
     }
?>  
<style>
    .copied-badge {
    z-index: 10;
}
</style>
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
                    <div class="all-products py-3">
                        <div class="products-conten">
                            <!-- promote nav -->
                            <div class="product-nav mb-5">
                                <div class="nav-left">
                                <h6><?= $title ?></h6>                
                                </div>
                                <div class="nav-right">
                                    <div class="jv-page">
                                        <a href="<?=$jv_page_url?>" target="_blank">
                                            <button class="market-cta">JV Page</button>
                                        </a>
                                    </div>
                                    <div class="pay-page">
                                        <a target="_blank" href="../pay?p=<?= $product_id ?>&a=<?=$affiliate_id?>">
                                            <button class="market-cta">Payment Page</button>
                                        </a>
                                    </div>
                                    <div class="sale-page">
                                        <a target="_blank" href="<?=$sales_page_url?>?p=<?=$product_id?>&a=<?=$affiliate_id?>">
                                            <button class="market">Sales Page</button>     
                                        </a>
                                    </div>
                                </div>
                            </div>
                           <!-- end of promote nav -->

                           <div class="marketplace-item">
                            <p class="fs-4 fw-bold text-secondary pb-3"><?=$pname?></p>
                            <div class="promote-price-commission">
                                <div class="vendor">
                                    <h5>Vendor Name</h5>
                                    <h6 class="fs-4"><?=$vendor_name?></h6> 
                                </div>
                                <div class="market-price">
                                    <h5>Sales Price</h5>
                                    <h6 class="fs-4"><i class="fa fa-dollar"></i><?=number_format($product_price, 2)?></h6>
                                </div>
                                <div class="market-commission">
                                    <h5>Commission</h5>
                                    <h6 class="fs-4"><?=$product_commision?>%</h6>
                                </div>
                            </div>
                        </div>

                        <!-- get link section -->
                    <section class="all-get-links py-4">
                            <div class="get-links-content" onclick="toggleBox(event)">
                                <div class="get-link-head">
                                    <h5 class="fw-bold text-secondary">Get your Affiliate Links</h5>
                                    <i class="fa fa-chevron-down" style="color: #aaa;"></i>
                                </div>

                                <!-- get-links hidden content -->
                                 <section class="link-content pt-5 mt-4 pb-4">
                                    <div class="copy-link mb-4">
                                        <h5 class="mb-2 ms-3">Copy Affiliate Link Below</h5>
                                        <div class="get-links">
                                            <div class="get-link-head">
                                                <!-- <h5>https://affiliate.givas.org/<?=$affiliate_id?>/<?=$product_id?></h5> -->
                                                <h5><?=$host?>/affiliate?a=<?=$affiliate_id?>&p=<?=$product_id?></h5>
                                                <span class="copy-icon position-relative" style="cursor: pointer;">
                                                    <i class="fa fa-copy"></i>
                                                    <span class="copied-badge badge bg-success text-white position-absolute top-0 start-100 translate-middle p-1 rounded-pill" style="display: none; font-size: 10px;">Copied</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="copy-link mb-4">
                                        <h5 class="mb-2 ms-3">Copy Link for Affiliate Webinar Page below</h5>
                                        <div class="get-links">
                                            <div class="get-link-head">
                                                
                                                <h5><?=$webinar_url?></h5>
                                                <span class="copy-icon position-relative" style="cursor: pointer;">
                                                    <i class="fa fa-copy"></i>
                                                    <span class="copied-badge badge bg-success text-white position-absolute top-0 start-100 translate-middle p-1 rounded-pill" style="display: none; font-size: 10px;">Copied</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="copy-link">
                                        <h5 class="mb-2 ms-3">Copy Affiliate Link Payment Page below</h5>
                                        <div class="get-links">
                                            <div class="get-link-head">
                                                <h5><?=$host?>/pay?p=<?= $product_id ?>&a=<?=$affiliate_id?></h5>
                                                
                                                <span class="copy-icon position-relative" style="cursor: pointer;">
                                                    <i class="fa fa-copy"></i>
                                                    <span class="copied-badge badge bg-success text-white position-absolute top-0 start-100 translate-middle p-1 rounded-pill" style="display: none; font-size: 10px;">Copied</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--end of get-links hidden content -->

                            </div>
                    </section>
                   
                    <section class="all-get-links py-4">
                            <div class="get-links-content" onclick="toggleBox(event)">
                                <div class="get-link-head">
                                    <h5 class="fw-bold text-secondary">Vendor Information</h5>
                                    <i class="fa fa-chevron-down" style="color: #aaa;"></i>
                                </div>

                                <!-- get-links hidden content -->
                                 <section class="link-content pt-5 mt-4 pb-4">
                                    <div class="promote-profile pb-4">
                                        <div class="promote-image">
                                            <img src="<?=$image?>" alt="">
                                        </div>
                                        <div class="promote-profile-title">
                                            <h4 class="mb-2 text-secondary-emphasis"><?=$vendor_name?></h4>
                                            <h6 class="mb-2 text-secondary">Infopreneur</h6>
                                            <h6 class="text-success">Starter</h6>
                                        </div>
                                    </div>
                                    <div class="promote-about mb-5">
                                        <p class="fw-bold text-secondary">About me</p>
                                        <h6><?=$about?></h6>
                                    </div>
                                    <div class="promote-description">
                                        <p class="fw-bold text-secondary">Business Description</p>
                                        <h6><?=$bdescription ?></h6>
                                    </div>
                                </section>
                                <!--end of get-links hidden content -->

                            </div>
                    </section>
                        <!-- end of get link section -->

                        </div>
                    </div>
                  </div>
       
           
          </div>
          <!-- Container-fluid Ends-->
        </div>

       

      <script>
            document.querySelectorAll('.copy-icon').forEach(icon => {
                icon.addEventListener('click', () => {
                    const text = icon.parentElement.querySelector('h5').textContent.trim();

                    // Copy to clipboard
                    navigator.clipboard.writeText(text).then(() => {
                        const badge = icon.querySelector('.copied-badge');
                        badge.style.display = 'inline';

                        // Hide after 1.5 seconds
                        setTimeout(() => {
                            badge.style.display = 'none';
                        }, 1500);
                    });
                });
            });
    </script>

        

        <script src="./assets/js/main.js"></script>
       <?php
          require_once('./footer.php');
          require_once('./sweet-alert.php')
         ?>
      </div>
    </div>
   <?php 
     require_once('./script.php');
     require_once('./model/myproduct_modal.php');
   ?>



  </body>
</html>

