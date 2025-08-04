const ACCOUNT_PRICE = 12; // Price per account

function calculateTotal() {
  const noAccountInput = document.getElementById("noAccount");
  const amountInput = document.getElementById("amount");

  // Get the number of accounts entered
  const numberOfAccounts = parseInt(noAccountInput.value, 10);

  if (isNaN(numberOfAccounts) || numberOfAccounts <= 0) {
    amountInput.value = ""; // Reset the amount field if input is invalid
    return;
  }

  // Calculate the total amount
  const totalAmount = numberOfAccounts * ACCOUNT_PRICE;

  // Show SweetAlert2 modal
Swal.fire({
    title: "Calculating Total Amount",
    text: `You are paying for ${numberOfAccounts} accounts. The total is $${totalAmount.toFixed(
        2
    )}.`,
    icon: "info",
    confirmButtonText: "OK",
    confirmButtonColor: "#07847f",
});

  // Set the total amount in the amount input field
  amountInput.value = totalAmount.toFixed(2);
}

// Example drag-and-drop and file upload handling (if needed)
function handleDragOver(event) {
  event.preventDefault();
  event.target.classList.add("drag-over");
}

function handleDragLeave(event) {
  event.preventDefault();
  event.target.classList.remove("drag-over");
}

function handleFileDrop(event) {
  event.preventDefault();
  const fileInput = document.getElementById("fileInput");
  const files = event.dataTransfer.files;
  fileInput.files = files;
  displayFileDetails(files[0]);
}

function triggerFileInput() {
  document.getElementById("fileInput").click();
}

function displayFileDetails(file) {
  const fileDetails = document.getElementById("fileDetails");
  fileDetails.textContent = `Uploaded file: ${file.name}`;
}



// drag and drop for image upload
  // Trigger file input click when "Choose File" button or dropzone is clicked
  function triggerFileInput() {
    document.getElementById("fileInput").click();
}

// Handle drag-over event
function handleDragOver(event) {
    event.preventDefault(); // Prevent default browser behavior
    event.target.classList.add("bg-light"); // Highlight dropzone
}

// Handle drag-leave event
function handleDragLeave(event) {
    event.preventDefault(); // Remove highlight when dragging out
    event.target.classList.remove("bg-light");
}

// Handle file drop
function handleFileDrop(event) {
    event.preventDefault();
    event.target.classList.remove("bg-light"); // Remove highlight

    const files = event.dataTransfer.files; // Get dropped files
    if (files.length > 0) {
        displayFileDetails(files[0]); // Display the file details
        document.getElementById("fileInput").files = files; // Attach the file to the input
    }
}

// Handle file input change
document.getElementById("fileInput").addEventListener("change", function () {
    const file = this.files[0];
    if (file) {
        displayFileDetails(file); // Display the file details
    }
});

// Display selected file details
function displayFileDetails(file) {
    const detailsContainer = document.getElementById("fileDetails");
    detailsContainer.innerHTML = `
        <p><strong>File Name:</strong> ${file.name}</p>
        <p><strong>File Size:</strong> ${(file.size / 1024).toFixed(2)} KB</p>
    `;
}



// process the payment_proof upload file
$(document).ready(function() {
    $('#paymentForm').on('submit', function(e) {
        e.preventDefault();

        // Show SweetAlert progress and stay for 5 seconds
        Swal.fire({
            title: 'Uploading Proof',
            html: 'Please wait...',
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        // Set a timeout to keep the "Uploading Proof" message for 5 seconds
        setTimeout(function() {
            var formData = new FormData($('#paymentForm')[0]);

            $.ajax({
                url: 'https://givas.org/inc/direct_payment.php',  // Your PHP script to process the payment
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.status == 'success') {
                        // Show success message for 3 seconds
                        Swal.fire({
                            title: 'Success',
                            text: 'Your proof of payment have been uploaded successfully!',
                            icon: 'success',
                            confirmButtonText: 'OK',
                            confirmButtonColor: '#006666'  // Custom button color
                        }).then(() => {
                            // Show the "Redirecting to next step" message after 3 seconds
                            setTimeout(function() {
                                Swal.fire({
                                    title: 'Redirecting',
                                    text: 'Redirecting to the next step...',
                                    icon: 'info',
                                    showConfirmButton: false,  // Hide the confirm button
                                    timer: 3000  
                                }).then(() => {
                                    // Redirect after the second SweetAlert
                                    window.location.href = 'https://givas.org/register?next';  // Replace with your redirect page
                                });
                            }, 3000); // Wait 3 seconds before showing the redirect message
                        });
                    } else {
                        Swal.fire({
                            title: 'Error',
                            text: data.message,
                            icon: 'error',
                            confirmButtonText: 'OK',
                            confirmButtonColor: '#006666'  // Custom button color
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        title: 'Error',
                        text: 'An error occurred. Please try again.',
                        icon: 'error',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#006666'  // Custom button color
                    });
                }
            });
        }, 5000); // Wait 5 seconds before sending the AJAX request
    });
});
