<?php

// Redirect unauthorized users
if (!isset($_SESSION['userId'])) {
    $redirectUrl = '../login'; // Path to your login page
    echo "
    <html>
        <head>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        </head>
        <body>
            <script>
                let timerInterval;
                let timeLeft = 3; // 3 seconds

                Swal.fire({
                    title: 'Unauthorized Access',
                    html: `You will be redirected to the login page in <b>3</b> seconds.`,
                    icon: 'warning',
                    timer: timeLeft * 1000, // Timer in milliseconds
                    timerProgressBar: true,
                    showConfirmButton: false,
                    didOpen: () => {
                        const content = Swal.getHtmlContainer().querySelector('b');
                        timerInterval = setInterval(() => {
                            timeLeft--;
                            content.textContent = timeLeft; // Update countdown
                        }, 1000);
                    },
                    willClose: () => {
                        clearInterval(timerInterval); // Clear interval on close
                    }
                }).then(() => {
                    // Redirect after SweetAlert completes
                    window.location.href = '$redirectUrl';
                });

                // Fallback redirect if SweetAlert fails
                setTimeout(function() {
                    window.location.href = '$redirectUrl';
                }, timeLeft * 1000);
            </script>
        </body>
    </html>";
    exit(); // Stop further execution of the page
}
?>
