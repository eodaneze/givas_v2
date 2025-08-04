<?php
  $title = "Marketplace";
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
           <?php require_once('./banner.php') ?>
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
        
              <!-- market place -->
                    <section class=" pt-4 pb-5">
                    <div class="product-nav">
                        <div class="nav-left">
                        <h6><?= $title ?></h6>                
                        </div>
                        <div class="nav-right">
                                 <div class="product-search">
                                 <i class="fa fa-search"></i>
                                 <input type="text" placeholder="Search available items...">
                             </div>
                        </div>
                    </div>
                <div id="contentArea" class="all-marketplace">
                    <!-- <p class="fs-5 mb-4 text-secondary">Best Selling Product Of The Day</p> -->
                    <div class="marketplace-content">
                     <?php 
                        $productResult = mysqli_query($conn, "SELECT * FROM products WHERE status = 'Published' ORDER BY id DESC LIMIT 10");
                        if (mysqli_num_rows($productResult) > 0) {
                            while ($row = mysqli_fetch_assoc($productResult)) {
                                $product_id = $row['product_id'];
                                $pname = $row['pname'];
                                $vendor_id = $row['vendor_id'];
                                $product_price = $row['price'];
                                $product_commision = $row['commission'];


                                // get the first four words from the product name and add "..." at the end if the product name is more than four words
                                $pname = implode(' ', array_slice(explode(' ', $pname), 0, 4));
                                if (str_word_count($row['pname']) > 4) {
                                    $pname .= '...';
                                }
                                
                               


                               
                                // use the vendor id to get the vendor name in the users table
                                $vendorResult = mysqli_query($conn, "SELECT * FROM user WHERE user_id = '$vendor_id'");
                                $vendorRow = mysqli_fetch_assoc($vendorResult);
                                $vendor_name = $vendorRow['fname'] . " " . $vendorRow['lname'];

                                ?>
                                
                
                                    <!-- markrt place items -->
                                    <div class="marketplace-item">
                                      <p><?=$pname?></p>
                                      <h6 class="vendor-name"><?=$vendor_name?></h6>
                                      <div class="promote">
                                      <a href="./promote-product?pid=<?=$product_id?>">       
                                      <button class="market-button">Promote</button>
                                      </a>
                                        <div class="price-commission">
                                          <div class="market-price">
                                            <h6><i class="fa fa-dollar"></i><?=number_format($product_price, 2)?></h6>
                                            <h5>Price</h5>
                                          </div>
                                          <div class="market-commission">
                                            <h6><?=$product_commision?>%</h6>
                                            <h5>Comm.</h5>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- end of markrt place items -->
                                <?php
                            }
                        }
                     ?>



                   

                    
                    </div>
                </div>

                <!-- end of market place -->

                <div class="line mb-5"></div>

              <div class="pagination-wrapper">
                <div class="page-info" id="pageInfo">1 of 11 pages</div>

                <div class="pag-box">
                        <input type="text" maxlength="1" class="pag-input" value="1" readonly>
                        <input type="text" maxlength="1" class="pag-input" value="2" readonly>
                        <input type="text" maxlength="1" class="pag-input" value="3" readonly>
                        <input type="text" maxlength="1" class="pag-input" value="4" readonly>
                    </div>

                <div class="page-select">
                <label></label>
                <select>
                  <option value="" disabled selected>Page....</option>
                </select>
                </div>
            </div>
            </section>

                  </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>

       

      
        

        <script src="./assets/js/main.js"></script>
       <?php
          require_once('./footer.php');
          require_once('./sweet-alert.php');
         ?>
      </div>
    </div>
   <?php 
     require_once('./script.php')
   ?>



<script>

</script>


  </body>
</html>
