<?php

// Check for success message
if (isset($_SESSION['success'])) {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                text: '{$_SESSION['success']}',
                confirmButtonText: 'OK',
                confirmButtonColor: '#006666',
                color: '#000',
                background: '#fff',
                customClass: {
                    title: 'swal-custom-title', // Custom CSS classes if further styling needed
                    content: 'swal-custom-content',
                    confirmButton: 'swal-custom-button'
                }
            });
        });
    </script>";
    unset($_SESSION['success']); // Clear message after displaying
}

// Check for error message
if (isset($_SESSION['error'])) {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                text: '{$_SESSION['error']}',
                confirmButtonText: 'OK',
                confirmButtonColor: '#006666',
                
                
                background: '#fff',
                color: '#000',
                customClass: {
                    title: 'swal-custom-title',
                    content: 'swal-custom-content',
                    confirmButton: 'swal-custom-button'
                }
            });
        });
    </script>";
    unset($_SESSION['error']); // Clear message after displaying
}

?>

<style>
/* Optional styling to match specific appearance */
.swal-custom-title {
    font-size: 24px;
    font-weight: bold;
}

.swal-custom-content {
    font-size: 18px;
}

.swal-custom-button {
    background-color: #006666 !important;
    color: #fff;
}
</style>
