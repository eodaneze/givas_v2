$(document).ready(function () {
    $('#updateWalletForm').on('submit', function (e) {
        e.preventDefault(); // Prevent the form from refreshing the page

        // Get the form data
        let wname = $('#wname').val();
        let waddress = $('#waddress').val();

        // Validate inputs
        if (wname === '' || waddress === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Both Wallet Name and Wallet Address are required!',
                confirmButtonColor: '#006666',
            });
            return;
        }

        // Send the data via AJAX
        $.ajax({
            url: 'https://givas.org/user/inc/update-wallet.php', // Server-side processing script
            type: 'POST',
            data: {
                wname: wname,
                waddress: waddress,
                update: true
            },
            success: function (response) {
                // Handle the response
                let result = JSON.parse(response);

                if (result.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        confirmButtonColor: '#006666',
                        text: result.message,
                    }).then(() => {
                        // Optionally refresh the page or close the modal
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: result.message,
                    });
                }
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An unexpected error occurred. Please try again later.',
                });
            }
        });
    });
});