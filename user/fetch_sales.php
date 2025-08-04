<?php
require_once('../inc/config/connection.php');

$status = $_GET['status'] ?? 'all';

$query = "SELECT * FROM course_payment WHERE affiliate_id = '$affiliate_id'";
if ($status !== 'all') {
    $status_safe = mysqli_real_escape_string($conn, $status);
    $query .= " AND status = '$status_safe'";
}
$query .= " ORDER BY id DESC";

$sales_result = mysqli_query($conn, $query);

if (mysqli_num_rows($sales_result) > 0) {
    $num = 1;
    ?>
    <div class="table-responsive mb-5">
        <table class="table table-bordered table-striped text-nowrap">
            <thead class="table-light">
                <tr>
                    <th>S/N</th>
                    <th>Customer</th>
                    <th>Vendor</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Commission</th>
                    <th>Category</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($sales_result)) {
                $product_id = $row['product_id'];
                $customer_name = $row['fname'];
                $customer_email = $row['email'];
                $customer_phone = $row['phone'];
                $sale_status = $row['status'];

                // Get product details
                $product_result = mysqli_query($conn, "SELECT * FROM products WHERE product_id = '$product_id'");
                $product_row = mysqli_fetch_assoc($product_result);
                $price = $product_row['price'];
                $commission = $product_row['commission'];
                $product_name = $product_row['pname'];
                $vendor_id = $product_row['vendor_id'];
                $category = $product_row['category'];

                // Get vendor info
                $vendor_result = mysqli_query($conn, "SELECT * FROM user WHERE user_id = '$vendor_id'");
                $vendor_row = mysqli_fetch_assoc($vendor_result);
                $vendor_name = $vendor_row['fname'] . ' ' . $vendor_row['lname'];
                ?>
                <tr>
                    <td><?= $num++ ?></td>
                    <td><?= $customer_name ?><br><?= $customer_email ?><br><?= $customer_phone ?></td>
                    <td><?= $vendor_name ?></td>
                    <td><?= $product_name ?></td>
                    <td>$<?= number_format($price, 2) ?></td>
                    <td><?= $commission ?>%</td>
                    <td><?= $category ?></td>
                    <td>
                        <span class="badge <?= $sale_status == 'Pending' ? 'bg-danger' : 'bg-success' ?>">
                            <?= $sale_status ?>
                        </span>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <?php
} else {
    echo "<div class='alert alert-warning'>No sales found.</div>";
}
?>
