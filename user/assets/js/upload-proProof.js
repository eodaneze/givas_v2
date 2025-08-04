alertify.set("notifier", "position", "top-right");
$(document).ready(function () {
  $(".btn-submit").click(function (e) {
      e.preventDefault();

      let formData = new FormData();
      formData.append("user_id", $("input[name='user_id']").val());
      formData.append("amount", $("input[name='amount']").val());
      formData.append("wallet_address", $("input[name='wallet_address']").val());
      formData.append("email", $("input[name='email']").val());
      formData.append("proof", $("#fileInput")[0].files[0]);

      let button = $(".btn-submit");
      button.html('<i class="fa fa-spinner fa-spin"></i> Uploading proof...').prop("disabled", true);

      setTimeout(function () {
          $.ajax({
              url: "https://givas.org/user/inc/upload-proProof",
              type: "POST",
              data: formData,
              contentType: false,
              processData: false,
              success: function (response) {
                  button.html("Submit").prop("disabled", false);

                  if (response.trim() === "success") {
                      alertify.success("Proof uploaded successfully!");
                  } else {
                      alertify.error("Error uploading proof. Please try again.");
                  }
              },
              error: function () {
                  button.html("Submit").prop("disabled", false);
                  alertify.error("Something went wrong!");
              }
          });
      }, 3000);
  });
});