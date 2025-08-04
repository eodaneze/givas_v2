<!-- Modal HTML (unchanged) -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update your Wallet <?=$fname?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form id="updateWalletForm" method="post">
                <div class="row">
                    <p><strong>Please Take Note 📍📍:</strong> Ensure that the wallet address you enter is correct, as it will be used for your payouts in the Givas community. Incorrect details may affect your payments.</p>
                    <div class="col-lg-12 mb-4">
                        <label>Wallet Name</label>
                        <input name="wname" id="wname" type="text" class="form-control" value="TRC20 Network" readonly>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <label>Wallet Address</label>
                        <input name="waddress" id="waddress" type="text" class="form-control">
                    </div>
                </div>
                <button class="btn btn-primary shadow w-100" id="updateButton" type="submit">UPDATE</button>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
        alertify.set('notifier', 'position', 'top-right');

        $('#updateWalletForm').on('submit', function (e) {
            e.preventDefault(); // Prevent the form from refreshing the page

            // Change button text to 'Updating Wallet' and show loader
            let $updateButton = $('#updateButton');
            $updateButton.prop('disabled', true); // Disable the button to prevent multiple clicks
            $updateButton.html('<i class="fa fa-spinner fa-spin"></i> Updating Wallet...'); // Add spinner and update text

            // Get the form data
            let wname = $('#wname').val();
            let waddress = $('#waddress').val();

            // Validate inputs
            if (waddress === '') {
                alertify.error('Oops... Wallet Address is required!');
                $updateButton.prop('disabled', false); // Enable button again in case of validation failure
                $updateButton.html('UPDATE'); // Reset the button text
                return;
            }

            // Simulate a delay of 2 seconds before sending the request (you can remove this if it's not needed)
            setTimeout(function () {
                // Send the data via AJAX
                $.ajax({
                    url: './inc/update-wallet.php', // Server-side processing script
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
                            alertify.success(result.message);
                            // Optionally refresh the page or close the modal after a short delay
                            setTimeout(() => {
                                location.reload();
                            }, 2000);
                        } else {
                            alertify.error(result.message);
                        }
                        // Reset button state after the request is complete
                        $updateButton.prop('disabled', false); 
                        $updateButton.html('UPDATE');
                    },
                    error: function () {
                        alertify.error('An unexpected error occurred. Please try again later.');
                        // Reset button state in case of an error
                        $updateButton.prop('disabled', false); 
                        $updateButton.html('UPDATE');
                    }
                });
            }, 2000); // Delay the AJAX request by 2 seconds
        });
    });
</script>

<!-- Add the CSS for the spinner -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs/build/css/alertify.min.css" />
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs/build/css/themes/default.min.css" />
<script src="//cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>
