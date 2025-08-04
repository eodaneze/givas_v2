<?php
  $title = "Recent Sales";
   require_once('./home_header.php');
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">


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
                    <!---------------  -->
                    <div class="sales-table">

                        <div class="table-responsive mb-5 bg-white p-3 rounded-3">
                              <table id="datatableid" class="table table-bordered table-striped text-nowrap mb-5">
                              <thead class="table-light">
                                  <tr>
                                  <th>S/N</th>
                                  <th>Customer</th>
                                  <th>Vendor</th>
                                  <th>Product</th>
                                  <th>Price</th>
                                  <th>Commision</th>
                                  <th>Category</th>
                                  <th>Status</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php 
                                     $sales_result = mysqli_query($conn, "SELECT * FROM course_payment WHERE  affiliate_id = '$affiliate_id' ORDER BY id DESC"); 
                                       if(mysqli_num_rows($sales_result) > 0){
                                           $num = 1;
                                          while($row = mysqli_fetch_assoc($sales_result)){
                                              $product_id = $row['product_id'];
                                              $customer_name = $row['fname'];
                                              $customer_email = $row['email'];
                                              $customer_phone = $row['phone'];
                                              $status = $row['status'];
  
                                              // use the product_id to get the commision, name, category, price and vendor_id
                                              $product_result = mysqli_query($conn, "SELECT * FROM products WHERE product_id = '$product_id'");
                                              $product_row = mysqli_fetch_assoc($product_result);
                                              $price = $product_row['price'];
                                              $commision = $product_row['commission'];
                                              $product_name = $product_row['pname'];
                                              $vendor_id = $product_row['vendor_id'];
                                              $category = $product_row['category'];
  
                                              // use the vendor_id to get the vendor name in the user table
                                              $vendor_result = mysqli_query($conn, "SELECT * FROM user WHERE user_id = '$vendor_id'");
                                              $vendor_row = mysqli_fetch_assoc($vendor_result);
                                              $vendor_name = $vendor_row['fname'] . ' ' . $vendor_row['lname'];
                                              $vendor_email = $vendor_row['email'];
  
                                              ?>
                                                  <tr>
                                                      <td><?=$num++?></td>
                                                      <td>
                                                          <?=$customer_name?><br>
                                                          <?=$customer_email?><br>
                                                          <?=$customer_phone?>
                                                          
                                                      </td>
                                                      <td><?=$vendor_name?></td>
                                                      <td><?=$product_name?></td>
                                                      <td>$<?=number_format($price, 2)?></td>
                                                      <td><?=$commision?>%</td>
                                                      <td><?=$category?></td>
                                                      <td><span class="badge <?=$status == 'Pending' ? 'bg-danger' : 'bg-success'?>"><?=$status?></span></td>
                                                      
                                                  </tr>
                                              
                                              <?php
  
                                          }
                                       }
                                  ?>
                                 
                              </tbody>
                              </table>
                          </div>
                    </div>
                    <!-- ------------ -->
       
           
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

 <!-- ✅ jQuery (Include Before DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- ✅ DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    
   <script>
      $(document).ready(function () {
          if ($.fn.DataTable) {
              $('#datatableid').DataTable({
                  paging: true,
                  searching: true,
                  ordering: true,
                  info: true,
                  lengthMenu: [10, 25, 50, 100],
                  language: {
                      search: "🔍 Search Sales:",
                      lengthMenu: "Show _MENU_ entries per page",
                      info: "Showing _START_ to _END_ of _TOTAL_ entries",
                      paginate: {
                          previous: "← Prev",
                          next: "Next →"
                      }
                  },
                  initComplete: function () {
                      // Optional: add custom styling or wrapper after initialization
                  }
              });
          } else {
              console.error("❌ DataTables is NOT loaded!");
          }
      });
</script>



  </body>
</html>
