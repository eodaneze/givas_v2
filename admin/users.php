<?php
$title = "All Users";
require_once('./home_header.php'); // Ensure database connection
?>

<body>  
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <?php require_once('./home_navbar.php'); ?>
        <div class="page-body-wrapper">
            <?php require_once('./sidebar.php'); ?>
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6"><h4><?= $title ?></h4></div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">
                                        <svg class="stroke-icon">
                                            <use href="./assets/svg/icon-sprite.svg#stroke-home"></use>
                                        </svg></a>
                                    </li>
                                    <li class="breadcrumb-item">Dashboard</li>
                                    <li class="breadcrumb-item active"><?= $title ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="container-fluid">
                    <div class="table-responsive">
                        <table id="datatableid" class="table table-striped table-bordered text-nowrap">
                            <thead class="bg-light">
                                <tr>
                                    <th>S/N</th>
                                    <th>Full Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Entity</th>
                                    <th>Country</th>
                                    <th>Coupon Code</th>
                                    <th>Phase</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql = "SELECT * FROM user";
                                $res = mysqli_query($conn, $sql);
                                $i = 1;
                                
                                while ($row = mysqli_fetch_assoc($res)) {
                                    $user_id = $row['user_id'];
                                    $coupon = $row['coupon'];
                                    $fullName = $row['fname'] . ' ' . $row['lname'];
                                    $phone = !empty($row['phone']) ? $row['phone'] : 'NULL';
                                    
                                    // ✅ Find the user's phase from the first matching table
                                    $tables = [
                                        'givas_phase_1',
                                        'givas_phase_2',
                                        'success_phase_1',
                                        'success_phase_2',
                                        'abundance_phase_1',
                                        'abundance_phase_2'
                                    ];

                                    $phase = "Not Found"; // Default value if no phase is found

                                    foreach ($tables as $table) {
                                        $phase_query = "SELECT phase FROM $table WHERE user_id = '$user_id'";
                                        $phase_result = mysqli_query($conn, $phase_query);

                                        if ($phase_row = mysqli_fetch_assoc($phase_result)) {
                                            $phase = $phase_row['phase'];
                                            break; // ✅ Exit loop once a phase is found
                                        }
                                    }
                                ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $fullName ?></td>
                                        <td><?= $row['uname'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['entity'] ?></td>
                                        <td><?= $row['country'] ?></td>
                                        <td><?= $coupon ?></td>
                                        <td><?= $phase ?></td>
                                    </tr>
                                <?php
                                    $i++;
                                } // End while loop
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Table Section Ends -->
            </div>

            <script src="./assets/js/main.js"></script>
            <?php require_once('./footer.php'); ?>
            <?php require_once('./sweet-alert.php'); ?>
        </div>
    </div>
    <?php require_once('./script.php'); ?>
    
    <!-- ✅ jQuery (Include Before DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- ✅ DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(document).ready(function () {
            console.log("Checking DataTable availability:", $.fn.DataTable); // Debugging Step
            if ($.fn.DataTable) {
                console.log("Initializing DataTable... ✅");
                $('#datatableid').DataTable({
                    "paging": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "lengthMenu": [10, 25, 50, 100],
                    "language": { "search": "Search Users:" }
                });
            } else {
                console.error("❌ DataTables is NOT loaded!");
            }
        });
    </script>
</body>
</html>
