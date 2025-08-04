<?php
  $title = "Enroll Vendor";
   require_once('./home_header.php');
?>

  <body>  
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php
        require_once('./home_navbar.php');
      ?>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
           <?php 
              require_once('./sidebar.php');
           ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h4>
                     <?= $title ?></h4>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> 
                        <svg class="stroke-icon">
                          <use href="./assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active"><?=$title?></li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
              <div class="row">
                  <form id="profileForm" enctype="multipart/form-data">
                        <div class="all-enroll">
                          <div class="enroll-left">
                            <label>Business Name</label>
                            <input type="text" name="bname" placeholder="Enter Business Name" class="mb-3 p-3" required>

                            <label>About Me</label>
                            <textarea name="about" id="about" class="mb-3" placeholder="A little bit about yourself" required></textarea>

                            <label>Business Description</label>
                            <textarea name="bdescription" id="bdescription" placeholder="A little about your business" required></textarea>

                            <div class="update pt-2">
                              <button type="submit" id="submitBtn" class="update-cta">
                                Update
                              </button>
                            </div>
                          </div>

                          <div class="enroll-right">
                            <p>Update Profile</p>
                            <div class="profile-image">
                              <img id="uploadPreview" src="../assets/images/team/1.jpg" alt="">
                              <i class="edit-icon fa fa-image" id="triggerUpload"></i>
                            </div>
                            <input class="d-none" type="file" name="image" id="profileUpload" accept="image/*" required>
                            <h5><?= $fullname ?></h5>
                          </div>
                        </div>
                    </form>

                  </div>
       
           
          </div>
          <!-- Container-fluid Ends-->
        </div>

       

      
        

        <script src="./assets/js/main.js"></script>
       <?php
          require_once('./footer.php');
          require_once('./sweet-alert.php')
         ?>
      </div>
    </div>
   <?php 
     require_once('./script.php')
   ?>
  <script>
document.getElementById('triggerUpload').addEventListener('click', function () {
  document.getElementById('profileUpload').click();
});

document.getElementById('profileUpload').addEventListener('change', function (e) {
  const file = e.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      document.getElementById('uploadPreview').src = e.target.result;
    };
    reader.readAsDataURL(file);
  }
});

document.getElementById('profileForm').addEventListener('submit', function (e) {
  e.preventDefault();

  // Validate word limits
  const about = document.getElementById('about').value.trim();
  const bdesc = document.getElementById('bdescription').value.trim();
  const wordCount = text => text.split(/\s+/).filter(Boolean).length;

  if (wordCount(about) > 50 || wordCount(bdesc) > 50) {
    return Swal.fire("Error", "About Me and Business Description must be under 50 words.", "error");
  }

  const btn = document.getElementById('submitBtn');
  btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Processing...';
  btn.disabled = true;

  setTimeout(() => {
    const formData = new FormData(document.getElementById('profileForm'));

    fetch('./inc/enroll-vendor', {
      method: 'POST',
      body: formData
    })
      .then(res => res.json())
      .then(data => {
        btn.innerHTML = 'Update';
        btn.disabled = false;
        if (data.status === 'success') {
          Swal.fire({
            icon: 'success',
            title: 'Success',
            text: data.message,
            timer: 6000,
            showConfirmButton: false,
            timerProgressBar: true,
          });

          setTimeout(() => {
            window.location.href = './my-product';
          }, 6000);
        }else {
          Swal.fire("Error", data.message, "error");
        }
      })
      .catch(() => {
        btn.innerHTML = 'Update';
        btn.disabled = false;
        Swal.fire("Error", "Something went wrong.", "error");
      });
  }, 3000);
});
</script>

<style>
.swal2-timer-progress-bar {
    background: #FF6A3E !important; /* Change to any color you want */
}
</style>

  </body>
</html>
