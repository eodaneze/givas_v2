let local_url = "http://localhost/mainGivas";
let hosted_url = "http://localhost/givas_v2"

function publishProduct(id) {
    Swal.fire({
      title: "Publish Product?",
      text: "You won't be able to revert this!",
      showCancelButton: true,
      confirmButtonText: "Yes, Publish it",
      cancelButtonText: "Cancel",
      confirmButtonColor: "#006666",
      cancelButtonColor: "#d33",
    }).then((result) => {
      if (result.isConfirmed) {
        // If user confirms, redirect to delete.php with the record ID
        window.location.href =
          `${hosted_url}/admin/inc/publishProducts?pid=${id}`;
      }
    });
  }