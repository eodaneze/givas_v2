<?php
// unauthorized_redirect.php
if (!isset($_GET['msg'])) {
    header('Location: index.php');
    exit;
}

$message = urldecode($_GET['msg']);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Unauthorized</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<script>
  Swal.fire({
    icon: 'error',
    title: 'Unauthorized Access',
    text: "<?= $message ?>",
    timer: 4000,
    timerProgressBar: true,
    showConfirmButton: false,
    allowOutsideClick: false,
    willClose: () => {
      window.location.href = hosted_url; // Redirect to the home page
    }
  });
</script>


<?php 
  require_once('../script.php');
?>
</body>
</html>
