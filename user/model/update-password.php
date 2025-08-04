<!-- Modal for Token Input -->
<div id="tokenModal" class="modal fade" tabindex="-1" aria-labelledby="tokenModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tokenModalLabel">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="updatePasswordForm">
          <div class="modal-body">
              <div class="row">
                  <div class="col-lg-12 main-input mb-4">
                       <label>New Password</label><br>
                       <input type="text" name="npassword">
                  </div>
                  <div class="col-lg-12 main-input mb-4">
                       <label>Confirm Password</label><br>
                       <input type="text" name="cpassword">
                  </div>
              </div>
            <p><strong>Enter Code</strong></p>
                <div class="d-flex justify-content-center gap-2 mb-3">
                    <input type="text" maxlength="1" class="otp-input form-control text-center border-primary" style="width: 50px;" />
                    <input type="text" maxlength="1" class="otp-input form-control text-center border-primary" style="width: 50px;" />
                    <input type="text" maxlength="1" class="otp-input form-control text-center border-primary" style="width: 50px;" />
                    <input type="text" maxlength="1" class="otp-input form-control text-center border-primary" style="width: 50px;" />
                    <input type="text" maxlength="1" class="otp-input form-control text-center border-primary" style="width: 50px;" />
                </div>
            <p>😊 Please enter the 5-digit token sent to your email:</p>
            <div class="modal-footer">
              <button class="btn btn-primary btn-sm shadow w-100" type="button" id="updatePasswordBtn">Save Changes</button>
            </div>
          </div>

      </form>
    </div>
  </div>
</div>

<style>
    .main-input input{
         border: 1px solid #ccc;
         padding: 15px 10px;
         width: 100%;
         border-radius: 5px;
         outline: 1px solid #006666;
    }
</style>