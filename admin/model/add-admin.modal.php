
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Admin</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action='./inc/add-admin.php' method="post">
              <div class="row">
                  <div class="col-lg-12 mb-4">
                       <label>Fullname</label>
                       <input class="form-control" type="text" name="name" placeholder="Enter fullname" />
                  </div>
                  <div class="col-lg-12 mb-4">
                       <label>Email</label>
                       <input class="form-control" type="email" name="email" placeholder="Enter email" />
                  </div>
                  <div class="col-lg-12 mb-4">
                       <label>Role</label>
                       <select class="form-control" name="role">
                            <option>--Select Role--</option>
                            <option value="Super Admin">Super Admin</option>
                            <option value="Admin1">Admin1</option>
                            <option value="Admin2">Admin2</option>
                            <option value="Admin3">Admin3</option>
                            <option value="Admin4">Admin4</option>
                            <option value="Admin5">Admin5</option>
                       </select>
                  </div>
                  <div class="col-lg-12 mb-4">
                       <label>Privilege</label>
                       <select class="form-control" name="privilege">
                            <option>--Select Privilege--</option>
                            <option value="All">All</option>
                            <option value="Verify Payment">Verify Payment</option>
                            <option value="Verify KYC">Verify KYC</option>
                            <option value="Sell Coupon">Sell Coupon</option>
                            <option value="Handle Payout">Handle Payout</option>
                            
                       </select>
                  </div>
                   <div class="col-lg-12 mb-4">
                       <label>Password</label>
                       <input class="form-control" type="password" name="password" placeholder="Enter Password" />
                  </div>
              </div>
              
                 <button class="btn btn-primary w-100 shadow" name="add">Save changes</button>
          </form>
      </div>
    
    </div>
  </div>
</div>