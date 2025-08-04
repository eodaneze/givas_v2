<?php
  $title = "My Products";
   require_once('./home_header.php');

  
?>  
 <style>
    th, td {
      white-space: nowrap;
      min-width: 120px;
    }

    .table-responsive {
      overflow-x: auto;
    }

    /* 🎨 Custom Scrollbar for WebKit (Chrome, Edge, Safari) */
    .table-responsive::-webkit-scrollbar {
      height: 6px;
    }

    .table-responsive::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    .table-responsive::-webkit-scrollbar-thumb {
      background-color: #fd890dff; /* Bootstrap primary color */
      border-radius: 10px;
    }

    .table-responsive::-webkit-scrollbar-thumb:hover {
      background-color: #fd890dff; /* darker on hover */
    }

    /* 🦊 Firefox scrollbar styling */
    .table-responsive {
      scrollbar-color: #fd890dff #f1f1f1;
      scrollbar-width: thin;
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

         $vendor_id = $_SESSION['userId'];
         $product_result = mysqli_query($conn, "SELECT COUNT(*) AS product_count FROM products WHERE vendor_id = '$vendor_id'");
         $product_row = mysqli_fetch_assoc($product_result);
         $product_count = $product_row['product_count'];
       
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
                    <div class="all-products py-3">
                        <div class="products-conten">
                            <div class="product-nav mb-5">
                                <div class="nav-left">
                                <h6><?= $title ?>(<?=$product_count?>)</h6>                
                                </div>
                                <div class="nav-right">
                                        <!-- <div class="product-search">
                                            <i class="fa fa-search"></i>
                                            <input type="text" placeholder="Search available items...">
                                        </div> -->
                                    <div class="publish-product">
                                        <button class="publish-cta" data-bs-toggle="modal" data-bs-target="#productModal">Publish Product</button>
                                    </div>
                                </div>
                            </div>
                            <div class="line mb-2"></div>
                            <div class="table table-responsive">
                            <table class="table table-borderless text-nowrap">
                            <thead class="bg-light">
                                <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Status</th>
                                <th scope="col">Price</th>
                                <th scope="col">Commision</th>
                                <th scope="col"></th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php 
                                 $productSql = mysqli_query($conn, "SELECT * FROM products WHERE vendor_id = '$user_id'");
                                 if(mysqli_num_rows($productSql) > 0){
                                    while($row = mysqli_fetch_assoc($productSql)){
                                          $product_id = $row['product_id'];
                                          $pname = $row['pname'];
                                          $category = $row['category'];
                                          $price = $row['price'];
                                          $commission = $row['commission'];
                                          $status = $row['status'];
                                          $menuId = "menu_" . $product_id;
                                        ?>
                                        <tr>
                                             <td><?=$pname?></td>
                                              <td><?=$category?></td>
                                              <td class="<?=$status == 'Unpublished' ? 'text-warning' : ($status == 'Published' ? 'text-success' : 'text-danger')?>"><i class="fa fa-circle" style="font-size: 8px;"></i> <?=$status?></td>
                                              <td>$<?=number_format($price, 2)?></td>
                                              <td><?=$commission?>%</td>
                                              <td>
                                                  <?php if($status == 'Rejected'){ ?>
                                                      <button class="btn appeal py-3 px-5" style="background:rgb(247, 157, 121); color:white;">Appeal</button>
                                                  <?php } ?>
                                              </td>
                                              <td>
                                                  <i class="fa fa-ellipsis-v action-icon" onclick="toggleDropdown(event, '<?=$menuId?>')" style="font-size: 1.1rem; color: #bbb; cursor:pointer;"></i>
                                                  <div class="dropdown-menu" id="<?=$menuId?>">
                                                      <!-- <p><i class="fa fa-bar-chart" style="color: #999; font-size:1.1rem;"></i><a href="#">View Product Info</a></p>
                                                      <p><i class="fa fa-bar-chart" style="color: #999; font-size:1.1rem;"></i><a href="#">View Stats</a></p>
                                                      <p><i class="fa fa-edit" style="color: #999; font-size:1.1rem;"></i><a href="#">Edit Product Details</a></p> -->
                                                      <p><i class="fa fa-gear" style="color: #999; font-size:1.1rem;"></i><a href="./generate-button?pid=<?=$product_id?>">Settings</a></p>
                                                  </div>
                                              </td>
                                        </tr>
                                        
                                        <?php
                                    }
                                 }else{
                                    ?>
                                       <td>You dont have any product yet</td>
                                    <?php
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
     require_once('./model/myproduct_modal.php');
   ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const message = localStorage.getItem('successMessage');
    if (message) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: message,
            confirmButtonText: 'OK'
        });
        // Clear the message so it doesn't show again on refresh
        localStorage.removeItem('successMessage');
    }
});
</script>


  </body>
</html>

