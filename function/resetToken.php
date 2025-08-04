<?php
function generateResetToken($length = 64) {
    // Generate a cryptographically secure random string
    $token = bin2hex(random_bytes($length / 2)); // Divide by 2 because each byte is represented by 2 hex characters
    return $token;
}


?>
