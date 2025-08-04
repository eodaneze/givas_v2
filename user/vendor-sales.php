<?php
  $title = "Vendor Recent Sales";
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
                                            <th>Affiliate</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Commission</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        // Get current vendor ID from session
                                        $vendor_id = $_SESSION['userId'];

                                        $sales_query = "
                                                    SELECT 
                                                        cp.*, 
                                                        p.pname AS product_name, 
                                                        p.price AS product_price, 
                                                        p.commission AS product_commission, 
                                                        p.category AS product_category,
                                                        au.fname AS aff_fname, 
                                                        au.lname AS aff_lname, 
                                                        au.email AS aff_email, 
                                                        au.phone AS aff_phone
                                                    FROM course_payment cp
                                                    INNER JOIN products p ON cp.product_id = p.product_id
                                                    LEFT JOIN user au ON cp.affiliate_id = au.affiliate_id
                                                    WHERE p.vendor_id = '$vendor_id'
                                                    ORDER BY cp.id DESC
                                                ";


                                        $sales_result = mysqli_query($conn, $sales_query);

                                        if(mysqli_num_rows($sales_result) > 0){
                                            $num = 1;
                                            while($row = mysqli_fetch_assoc($sales_result)){
                                                $customer_name   = $row['fname'];
                                                $customer_email  = $row['email'];
                                                $customer_phone  = $row['phone'];
                                                $status          = $row['status'];
                                                $product_name    = $row['product_name'];
                                                $price           = $row['product_price'];
                                                $commission      = $row['product_commission'];
                                                $category        = $row['product_category'];

                                                // Affiliate info
                                                $affiliate_name  = $row['aff_fname'] . ' ' . $row['aff_lname'];
                                                $affiliate_email = $row['aff_email'];
                                                $affiliate_phone = $row['aff_phone'];
                                        ?>
                                            <tr>
                                                <td><?=$num++?></td>
                                                <td>
                                                    <?=$customer_name?><br>
                                                    <?=$customer_email?><br>
                                                    <?=$customer_phone?>
                                                </td>
                                                <td>
                                                    <?=$affiliate_name?><br>
                                                    <?=$affiliate_email?><br>
                                                    <?=$affiliate_phone?>
                                                </td>
                                                <td><?=$product_name?></td>
                                                <td>$<?=number_format($price, 2)?></td>
                                                <td><?=$commission?>%</td>
                                                <td><?=$category?></td>
                                                <td>
                                                    <span class="badge <?=$status == 'Pending' ? 'bg-danger' : 'bg-success'?>">
                                                        <?=$status?>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php
                                            }
                                        } else {
                                            echo '<tr><td colspan="8">No sales found</td></tr>';
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
