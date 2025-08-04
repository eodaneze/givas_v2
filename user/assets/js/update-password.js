document.getElementById("resetPasswordBtn").addEventListener("click", function () {
    const button = this;
    const userId = document.getElementById("userId").value; // Fetch user ID from the hidden input
    console.log(userId)
  
    // Change button text and disable it
    button.innerHTML =
      '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending Token...';
    button.disabled = true;
  
    // Make AJAX request to PHP to send the OTP
    fetch("https://givas.org/user/inc/send-otp.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ user_id: userId }),
    })
      .then((response) => response.json())
      .then((data) => {
        alertify.set('notifier', 'position', 'top-right');
        // Always wait for 3 seconds before updating the UI
        setTimeout(() => {
          button.innerHTML = "Reset Password";
          button.disabled = false;
  
          if (data.success) {
            alertify.success(data.message); // Display success message
            // Show the modal
            const tokenModal = new bootstrap.Modal(
              document.getElementById("tokenModal"),
              { keyboard: false }
            );
            tokenModal.show();
          } else {
            alertify.error(data.error); // Display error message
          }
        }, 3000); // Ensure the loader lasts for 3 seconds
      })
      .catch((error) => {
        // Handle network or server errors
        console.error("Error:", error);
        setTimeout(() => {
          button.innerHTML = "Reset Password";
          button.disabled = false;
          alertify.error("An unexpected error occurred. Please try again.");
        }, 3000); // Ensure the loader lasts for 3 seconds
      });
  });
  
  
  
  document.querySelectorAll(".modal-body input[type='text']").forEach((input, index, inputs) => {
    input.addEventListener("input", function () {
      if (this.value.length === this.maxLength) {
        // Move to the next input if there is one
        if (inputs[index + 1]) {
          inputs[index + 1].focus();
        }
      }
    });
  
    input.addEventListener("keydown", function (event) {
      if (event.key === "Backspace" && this.value === "") {
        // Move to the previous input if there is one
        if (inputs[index - 1]) {
          inputs[index - 1].focus();
        }
      }
    });
  });
  
  

  document.getElementById("updatePasswordBtn").addEventListener("click", function () {
    const otpInputs = document.querySelectorAll(".otp-input");
    let otp = "";
  
    // Collect OTP from all input fields
    otpInputs.forEach((input) => {
      otp += input.value;
    });
  
    if (otp.length !== 5) {
      alertify.error("Please enter a valid 5-digit OTP.");
      return;
    }
  
    const form = document.getElementById("updatePasswordForm");
    const formData = new FormData(form);
  
    // Add the OTP to the form data
    formData.append("otp", otp);
    console.log(formData);
    
  
    // Make the AJAX request
    fetch("https://givas.org/user/inc/update-password.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          alertify.success(data.message);
          form.reset(); // Reset the form and OTP inputs
          otpInputs.forEach((input) => (input.value = ""));
        } else {
          alertify.error(data.message);
        }
      })
      .catch((error) => {
        alertify.error("Something went wrong. Please try again later.");
        console.error("Error:", error);
      });
  });
  