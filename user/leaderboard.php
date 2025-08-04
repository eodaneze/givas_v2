<?php
  $title = "Leaderboard";
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
                    <div class="table-responsive bg-white p-3 rounded-3 mb-5">
                        <table id="datatableid" class="table table-bordered table-striped text-nowrap mb-5">
                           <thead>
                              <tr>
                                  <th>Rank</th>
                                  <th>Affiliate Details</th>
                                  <th>Sales</th>
                              </tr>
                           </thead>
                           <tbody>
                            <?php
                                

                                // Get affiliate sales count, join with user table to get names
                              $leaderboard_query = mysqli_query($conn, "
                                SELECT cp.affiliate_id, COUNT(*) AS total_sales, u.fname, u.lname 
                                FROM course_payment cp 
                                INNER JOIN user u ON cp.affiliate_id = u.affiliate_id 
                                WHERE cp.status = 'Successful'
                                GROUP BY cp.affiliate_id 
                                ORDER BY total_sales DESC
                            ");

                                $rank = 1;

                                while ($row = mysqli_fetch_assoc($leaderboard_query)) {
                                    $affiliate_name = $row['fname'] . ' ' . $row['lname'];
                                    $total_sales = $row['total_sales'];
                                    echo "
                                        <tr>
                                            <td>#{$rank}</td>
                                            <td>{$affiliate_name}</td>
                                            <td>{$total_sales}</td>
                                        </tr>
                                    ";
                                    $rank++;
                                }
                                ?>

                             
                           </tbody>
                        </table>
                         
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
