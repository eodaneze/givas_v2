<?php 

    function generateCouponCode($length = 8) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $coupon = '';
        for ($i = 0; $i < $length; $i++) {
            $coupon .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $coupon;
    }

    

?>