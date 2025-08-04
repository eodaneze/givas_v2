
<style>
   

    .file-upload {
      width: 100%;
      max-width: 500px;
      border: 2px dashed #ddd;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      background-color: #fff;
      transition: 0.3s;
    }

    .file-upload:hover {
      border-color: #85d1b2;
    }

    .file-upload .upload-icon {
      font-size: 50px;
      color: #85d1b2;
      margin-bottom: 10px;
    }

    .file-upload h4 {
      font-size: 18px;
      margin: 0 0 10px;
      color: #333;
    }

    .file-upload p {
      font-size: 14px;
      color: #777;
      margin: 0;
    }

    .file-upload input[type="file"] {
      display: none;
    }

    .file-upload label {
      display: block;
      cursor: pointer;
      color: #85d1b2;
      font-weight: bold;
      text-decoration: underline;
      margin-top: 10px;
    }
  </style>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Verify KYC</h1>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="kycForm" enctype="multipart/form-data">
            <!-- Hidden Input for User ID -->
            <input type="hidden" name="user_id" id="userId" value="<?php echo $user_id; ?>" />

            <div class="row">
              <!-- Document Type Selection -->
              <div class="col-lg-12 mb-4">
                <label>Document Type</label>
                <select id="documentType" name="document_type" class="form-control" required>
                  <option value="" disabled selected>Select Document Type</option>
                  <option value="NIN">NIN (Nigeria)</option>
                  <option value="National ID">National ID</option>
                  <option value="Driver's License">Driver's License</option>
                </select>
              </div>

              <!-- Document Number Input (hidden by default) -->
              <div id="documentNumberField" class="col-lg-12 mb-4" style="display: none;">
                <label id="documentNumberLabel">Document Number</label>
                <input type="text" id="documentNumberInput" name="document_number" class="form-control" placeholder="Enter Document Number">
              </div>

              <!-- File Upload (hidden by default) -->
              <div id="fileUploadField" class="col-lg-12 mb-4" style="display: none;">
                <div class="file-upload" id="fileUpload">
                  <div class="upload-icon">⬇</div>
                  <h4>Drag or Click to select a file</h4>
                  <p>Supported files - JPEG, PDF, and PNG. Files must not exceed 10MB</p>
                  <input type="file" id="fileInput" name="document_file" hidden />
                  <label for="fileInput" class="">Browse files</label>
                  <div id="fileInfo"></div> <!-- Display file info -->
                </div>
              </div>

              <button type="submit" class="btn btn-primary w-100 shadow" id="submitButton">
                Save changes
              </button>
            </div>
          </form>
      </div>
    
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  // Handle Document Type Selection
  const documentType = document.getElementById('documentType');
  const documentNumberField = document.getElementById('documentNumberField');
  const fileUploadField = document.getElementById('fileUploadField');
  const documentNumberLabel = document.getElementById('documentNumberLabel');
  const fileUpload = document.getElementById('fileUpload');
  const fileInput = document.getElementById('fileInput');
  const fileInfo = document.getElementById('fileInfo');
  const submitButton = document.getElementById('submitButton');

  documentType.addEventListener('change', () => {
    const selectedType = documentType.value;

    // Reset visibility
    documentNumberField.style.display = 'none';
    fileUploadField.style.display = 'none';
    fileInfo.innerHTML = ''; // Clear file info when the type changes

    if (selectedType === 'NIN' || selectedType === 'National ID') {
      documentNumberField.style.display = 'block';
      fileUploadField.style.display = 'block';
      documentNumberLabel.textContent = selectedType === 'NIN' ? 'NIN Number' : 'National ID Number';
    } else if (selectedType === "Driver's License") {
      fileUploadField.style.display = 'block';
    }
  });

  // Display File Info (Reusable Function)
  function displayFileInfo(file) {
    const fileName = file.name;
    const fileSize = (file.size / 1024 / 1024).toFixed(2); // Convert to MB

    fileInfo.innerHTML = `<p>File selected: <strong>${fileName}</strong></p>
                          <p>Size: <strong>${fileSize} MB</strong></p>`;
  }

  // Drag-and-Drop File Handling
  fileUpload.addEventListener('dragover', (event) => {
    event.preventDefault();
    fileUpload.style.borderColor = '#85d1b2';
  });

  fileUpload.addEventListener('dragleave', () => {
    fileUpload.style.borderColor = '#ddd';
  });

  fileUpload.addEventListener('drop', (event) => {
    event.preventDefault();
    fileUpload.style.borderColor = '#ddd';

    const files = event.dataTransfer.files;
    if (files.length > 0) {
      fileInput.files = files; // Assign dropped files to file input
      displayFileInfo(files[0]);
    }
  });

  // File Selection via Browse Button
  fileInput.addEventListener('change', () => {
    const files = fileInput.files;
    if (files.length > 0) {
      displayFileInfo(files[0]);
    }
  });

  // Handle Form Submission via AJAX
  document.getElementById('kycForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(this);

    // Update button to show uploading state
    submitButton.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Uploading KYC Docs';
    submitButton.disabled = true;

    // Simulate a 2-second delay for file upload
    setTimeout(() => {
      fetch('https://givas.org/user/inc/process_kyc.php', {
        method: 'POST',
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          submitButton.innerHTML = 'Save changes';
          submitButton.disabled = false;

          if (data.success) {
            alertify.success('KYC details uploaded successfully!');
            setTimeout(() => {
                location.reload();
            }, 2000);
          } else {
            alertify.error(data.message || 'An error occurred while uploading KYC details.');
          }
        })
        .catch(() => {
          submitButton.innerHTML = 'Save changes';
          submitButton.disabled = false;

          alertify.error('An unexpected error occurred.');
        });
    }, 2000);
  });
</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
