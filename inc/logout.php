<?php
      session_start();
      require_once('./config/connection.php'); // Include database connection

      if (isset($_SESSION['userId'])) {
         $userId = $_SESSION['userId'];

         // Query to check the user's role
         $query = "SELECT * FROM user WHERE user_id = '$userId'";
         $result = mysqli_query($conn, $query);

         if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            

            // Clear session
            session_unset();
            session_destroy();

           
            $redirectUrl = '../login'; // Default user login page
           
         }
      } elseif (isset($_SESSION['adminId'])) {
         session_unset();
         session_destroy();
         $redirectUrl = 'https://givas.org/admin/login'; // Admin login page
      } else {
         session_unset();
         session_destroy();
         $redirectUrl = '../';
      }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging Out</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <script>
        // Show SweetAlert logout message
        Swal.fire({
            title: 'Logging You Out',
            text: 'Please wait while we redirect you to the login page...',
            icon: 'info',
            timer: 3000, // 3 seconds
            timerProgressBar: true,
            showConfirmButton: false
        }).then(() => {
            // Redirect after the timer
            window.location.href = "<?php echo $redirectUrl; ?>";
        });

        // Fallback redirect in case JavaScript is disabled
        setTimeout(function() {
            window.location.href = "<?php echo $redirectUrl; ?>";
        }, 10000);
    </script>
</body>
</html>
