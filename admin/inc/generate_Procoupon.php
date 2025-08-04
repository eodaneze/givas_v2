<?php
require_once('../../inc/config/connection.php');
require_once('../function/pro-coupon.php');

if (isset($_POST['no_coupon'])) {
    $num = intval($_POST['no_coupon']);
    if ($num <= 0) {
        echo "error: Invalid number of coupons.";
        exit();
    }

    $inserted = [];
    for ($i = 0; $i < $num; $i++) {
        $code = generateCouponCode();
        $stmt = $conn->prepare("INSERT INTO pro_coupon (coupon) VALUES (?)");
        $stmt->bind_param("s", $code);
        if ($stmt->execute()) {
            $inserted[] = $code;
        }
        $stmt->close();
    }

    // Display table with generated coupons
    echo '<table class="table table-bordered"><thead><tr><th>S/N</th><th>Coupon</th></tr></thead><tbody>';
    foreach ($inserted as $i => $c) {
        echo "<tr>
                <td>" . ($i + 1) . "</td>
                <td>$c 
                    <button class='btn copy-btn' data-code='$c'>
                        <i class='bx bxs-copy'></i>
                    </button>
                </td>
              </tr>";
    }
    echo '</tbody></table>';
} else {
    echo "error: Please provide number of coupons.";
}
?>
