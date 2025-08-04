
function rejectProduct(id) {
    Swal.fire({
      title: "Reject Product?",
      text: "You won't be able to revert this!",
      showCancelButton: true,
      confirmButtonText: "Yes, reject it",
      cancelButtonText: "Cancel",
      confirmButtonColor: "#006666",
      cancelButtonColor: "#d33",
    }).then((result) => {
      if (result.isConfirmed) {
        // Show SweetAlert2 with TinyMCE editor
        Swal.fire({
          title: "Write Rejection Email",
          html: `<textarea id="rejection-message" placeholder="Enter your rejection email here..." rows="10"></textarea>`,
          showCancelButton: true,
          confirmButtonText: "Send Email",
          cancelButtonText: "Cancel",
          confirmButtonColor: "#006666",
          cancelButtonColor: "#d33",
          didOpen: () => {
            // Delay TinyMCE initialization slightly to ensure DOM is ready
            setTimeout(() => {
              tinymce.init({
                selector: "#rejection-message",
                height: 300,
                plugins: "link lists code",
                toolbar:
                  "undo redo | bold italic underline | alignleft aligncenter alignright | bullist numlist | link | code",
              });
            }, 0);
          },
          preConfirm: () => {
            // Get the TinyMCE content
            const content = tinymce.get("rejection-message").getContent();
            if (!content) {
              Swal.showValidationMessage("Email message cannot be empty");
            }
            return content;
          },
          willClose: () => {
            // Destroy TinyMCE instance when SweetAlert closes
            if (tinymce.get("rejection-message")) {
              tinymce.remove("#rejection-message");
            }
          },
        }).then((emailResult) => {
          if (emailResult.isConfirmed) {
            const emailMessage = emailResult.value;
  
            // Show "Sending email" progress SweetAlert for 5 seconds
            Swal.fire({
              title: "Please wait",
              text: "Sending the rejection email...",
              icon: "info",
              allowOutsideClick: false,
              showConfirmButton: false,
              timerProgressBar: true,
              timer: 5000, // 5 seconds
              didOpen: () => {
                Swal.showLoading(); // Show loading spinner
              },
            });
  
            // Simulate AJAX request after the progress alert
            setTimeout(() => {
              fetch(
                `${hosted_url}/admin/inc/rejectProduct?pid=${id}`,
                {
                  method: "POST",
                  headers: {
                    "Content-Type": "application/json",
                  },
                  body: JSON.stringify({ message: emailMessage }),
                }
              )
                .then((response) => response.json())
                .then((data) => {
                  if (data.success) {
                    Swal.fire(
                      "Success",
                      "The rejection email has been sent successfully.",
                      "success"
                    );
                  } else {
                    Swal.fire(
                      "Error",
                      "Failed to send the email. Please try again.",
                      "error"
                    );
                  }
                })
                .catch(() => {
                  Swal.fire(
                    "Error",
                    "An error occurred while sending the email.",
                    "error"
                  );
                });
            }, 5000); // Wait for the 5-second timer before making the request
          }
        });
      }
    });
  }


  