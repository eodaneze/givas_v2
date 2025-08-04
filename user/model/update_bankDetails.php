<style>
  /* Ensure modal body allows overflow */
  .modal-body {
    overflow: visible !important;
  }

  /* Select styling fix */
  #bankSelect {
    position: relative;
    z-index: 1055; /* Same or higher than Bootstrap modal */
  }
  
</style>

<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Bank</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <!--  -->
          <form id="bankForm">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                    <label>Bank Name</label>
                    <select id="bankSelect" name="bname" class="form-select p-3" required></select>
                    </div>
                    <div class="col-lg-12 mb-3">
                    <label>Account Number</label>
                    <input type="text" name="account_no" id="account_no" class="form-control p-3" required>
                    </div>
                    <div class="col-lg-12 mb-3">
                    <label>Account Name</label>
                        <input type="text" name="account_name" id="account_name" class="form-control p-3" readonly>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" id="submitBtn" class="btn btn-primary p-3 w-100 mt-3">
                            <span class="btn-text">Update</span>
                            <span class="spinner-border spinner-border-sm d-none" role="status"></span>
                        </button>

                    </div>
                </div>
          </form>

          <!--  -->
      </div>
    
    </div>
  </div>
</div>