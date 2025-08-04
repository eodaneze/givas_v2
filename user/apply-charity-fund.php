<?php
  $title = "Charity Fund Portal";
   require_once('./home_header.php');


  //  make sure a user has reached 50 and above ref before he can visit this page


?>


  <body>  
    
    <style>
     #drop-area {
  position: relative;
  border: 2px dashed #006666;
  padding: 30px;
  text-align: center;
  border-radius: 10px;
  cursor: pointer;
  transition: 0.3s ease-in-out;
  overflow: hidden;
}

  #drop-area.drag-over {
    background-color: #e9f5ff;
  }

  #file-info {
    margin-top: 15px;
    font-size: 14px;
  }

  .spinner-border-sm {
    margin-left: 5px;
  }
  .custom-btn{
     padding: 2px 8px;
     border-radius: 5px;
     border: none;
  }
  .pending{
      background-color: #FFF4C0;
      color: #E7A90C;
  }
  .approved{
     background-color:rgb(222, 249, 222);
     color: #2D8A39;
  }
  .rejected{
      background-color: #FFE9E9;
      color: #EA0F0F;
  }
    </style>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php
        require_once('./home_navbar.php');
        require_once('./checkCharityFund.php')
      ?>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
           <?php 
              require_once('./sidebar.php')
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
                      <div class="col-lg-6">
                            <form id="charityForm" enctype="multipart/form-data">
                              <input type="number" name="fund_amount" value="<?=$referral_no == 50 ? '100' : '200'?>" class="form-control mb-4 p-3" readonly>
                                <div id="drop-area">
                                    <p>Drag & drop or click to upload document</p>
                                    <input type="file" name="file" id="file" 
                                        accept=".pdf,.doc,.docx,.txt,.xls,.xlsx,.ppt,.pptx"
                                        required
                                        style="opacity: 0; position: absolute; width: 100%; height: 100%; top: 0; left: 0; cursor: pointer;">

                                    <div id="file-info"></div>
                                </div>
                                
                                <button <?= $charityStatus == 'Pending' ? 'disabled' : '' ?> type="submit" id="applyBtn" class="btn btn-primary w-100 mt-3">
                                    Apply
                                </button>

                            </form>
                            <div class="mt-4">
                                <span>Application Status: </span>
                                <button class="custom-btn <?=$charityStatus == 'Pending' ? 'pending' : ($charityStatus == 'Approved' ? 'approved' : ($charityStatus == 'Rejected' ? 'rejected' : 'rejected'))?>"><?=$charityStatus?></button>
                                <?php 
                                  if($charityStatus == 'Pending'){
                                    ?>
                                       <p class="mt-2">
                                         <i>Button is disabled cos you have already applied and the status is still pending</i>

                                       </p>
                                    <?php
                                     
                                  }
                                ?>
                            </div>
                       </div>
                       <div class="col-lg-6">
                           <img src="./assets/images/login/2.jpg" class="img-fluid" alt="">
                       </div>

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
  const dropArea = document.getElementById('drop-area');
  const fileInput = document.getElementById('file');
  const fileInfo = document.getElementById('file-info');
  const applyBtn = document.getElementById('applyBtn');

  // Click to trigger input
  dropArea.addEventListener('click', () => fileInput.click());

  // Drag Over Effect
  dropArea.addEventListener('dragover', (e) => {
    e.preventDefault();
    dropArea.classList.add('drag-over');
  });

  dropArea.addEventListener('dragleave', () => {
    dropArea.classList.remove('drag-over');
  });

  dropArea.addEventListener('drop', (e) => {
    e.preventDefault();
    dropArea.classList.remove('drag-over');
    fileInput.files = e.dataTransfer.files;
    showFileInfo();
  });

  fileInput.addEventListener('change', showFileInfo);

  function showFileInfo() {
    if (fileInput.files.length > 0) {
      const file = fileInput.files[0];
      const size = (file.size / 1024).toFixed(2); // in KB
      fileInfo.innerHTML = `<strong>Selected:</strong> ${file.name} (${size} KB)`;
    }
  }

  document.getElementById('charityForm').addEventListener('submit', function (e) {
    e.preventDefault();

    if (fileInput.files.length === 0) {
      Swal.fire('No file selected', 'Please upload a document.', 'warning');
      return;
    }

    applyBtn.innerHTML = 'Applying <span class="spinner-border spinner-border-sm"></span>';
    applyBtn.disabled = true;

    const formData = new FormData(this);

    setTimeout(() => {
      fetch('./inc/process_charity', {
        method: 'POST',
        body: formData,
      })
      .then(res => res.json())
      .then(data => {
        applyBtn.innerHTML = 'Apply';
        applyBtn.disabled = false;

        if (data.status === 'success') {
          Swal.fire('Success', data.message, 'success')
            .then(() => window.location.href = './');
        } else {
          Swal.fire('Error', data.message, 'error');
        }
      })
      .catch(err => {
        applyBtn.innerHTML = 'Apply';
        applyBtn.disabled = false;
        Swal.fire('Error', 'Something went wrong.', 'error');
      });
    }, 3000);
  });
</script>
  </body>
</html>


<div class="container-fluid">
    
</div>