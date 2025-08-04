<?php
  $title = "All Product";
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
                            <div class="product-nav mb-5">
                                <div class="nav-left">
                                <h6><?= $title ?></h6>                
                                </div>
                                <div class="nav-right">
                                        <div class="product-search">
                                            <i class="fa fa-search"></i>
                                            <input type="text" placeholder="Search available items...">
                                        </div>
                                    <!-- <div class="publish-product">
                                        <button class="publish-cta" data-bs-toggle="modal" data-bs-target="#productModal">Publish Product</button>
                                    </div> -->
                                </div>
                            </div>
                            <div class="line mb-2"></div>
                            <div class="table table-responsive">
                            <table class="table table-borderless">
                            <thead class="bg-light">
                                <tr>
                                  <th scope="col">Vendor Name</th>
                                  <th scope="col">Product Name</th>
                                  <th scope="col">Category</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Price</th>
                                  <th scope="col">Commision</th>
                                  <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $productSql = mysqli_query($conn, "SELECT * FROM products");
                                    if(mysqli_num_rows($productSql) > 0){
                                      while($row = mysqli_fetch_assoc($productSql)){
                                            $product_id = $row['product_id'];
                                            $vendor_id = $row['vendor_id'];
                                            $pname = $row['pname'];
                                            $category = $row['category'];
                                            $price = $row['price'];
                                            $commission = $row['commission'];
                                            $status = $row['status'];
                                            $menuId = "menu_" . $product_id;

                                            // use the vendor id to get the name in the users table
                                            $userResult = mysqli_query($conn, "SELECT * FROM user WHERE user_id = '$vendor_id'");
                                            $userRow = mysqli_fetch_assoc($userResult);
                                            $fname = $userRow['fname'];
                                            $lname = $userRow['lname'];
                                            $fullName = $fname . ' ' .$lname;

                                            ?>
                                            
                                            <tr>
                                                <td><?=$fullName?></td>
                                                <td><?=$pname?></td>
                                                <td><?=$category?></td>
                                                <td class=" <?=$status == 'Published' ? 'text-success' : ($status == 'Unpublished' ? 'text-warning' : 'text-danger')?>"><i class="fa fa-circle" style="font-size: 8px;"></i> <?=$status?></td>
                                                <td>$<?=number_format($price,2)?></td>
                                                <td><?=$commission?>%</td>
                                                <td>
                                                <i class="fa fa-ellipsis-v action-icon" onclick="toggleDropdown(event, '<?=$menuId?>')" style="font-size: 1.1rem; color: #bbb; cursor:pointer;"></i>
                                                <div class="dropdown-menu" id="<?=$menuId?>">
                                                    <p><i class="fa fa-eye text-primary" style="font-size:1.1rem;"></i><a class="text-primary" href="./product-details?pid=<?=$product_id?>">View Product</a></p>
                                                    <p style="cursor: pointer;"><i class="fa fa-upload text-success" style="color: #999; font-size:1.1rem;"></i><a class="text-success" onclick="publishProduct(<?=$product_id?>)">Publish</a></p>
                                                    <p style="cursor: pointer;"><i class="fa fa-times-circle text-warning" style=" font-size:1.1rem;"></i><a class="text-warning" onclick="rejectProduct(<?=$product_id?>)">Unpublish</a></p>
                                                    <p style="cursor: pointer;"><i class="fa fa-ban text-danger" style="font-size:1.1rem;"></i><a class="text-danger" onclick="rejectProduct(<?=$product_id?>)">Reject</a></p>
                                                </div>
                                                </td>
                                            </tr>
                                            <?php
                                      }
                                    }else{

                                    }

                                ?>
                                
                                
                            </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
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
     require_once('./script.php');
   ?>


  </body>
</html>

