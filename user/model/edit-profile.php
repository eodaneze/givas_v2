<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="./inc/update-profile.php" method="post">
              <div class="row">
                <div class="col-lg-12 mb-4">
                    <label>Firstname</label>
                      <input name="fname" type="text" class="form-control" value="<?=$fname?>">
                </div>
                <div class="col-lg-12 mb-4">
                    <label>Lastname</label>
                      <input name="lname" type="text" class="form-control" value="<?=$lname?>">
                </div>
                <div class="col-lg-12 mb-4">
                    <label>Username</label>
                      <input type="text" class="form-control" readonly value="<?=$uname?>">
                </div>
                <div class="col-lg-12 mb-4">
                    <label>Email</label>
                      <input name="email" type="text" class="form-control" value="<?=$email?>">
                </div>
                <div class="col-lg-12 mb-4">
                    <label>Entity</label>
                      <input name="entity" type="text" class="form-control" value="<?=$entity?>">
                </div>
                <div class="col-lg-12 mb-4">
                    <label>Phone Number</label>
                      <input name="phone" type="text" class="form-control" value="<?=$phone?>">
                </div>
                <div class="col-lg-12 mb-4">
                    <label>Country</label>
                    
                      <input name="country" type="text" class="form-control" value="<?=$country?>">
                      <input type="hidden" name="user_id" value="<?=$user_id?>">;
                </div>
              </div>
              <button  class="btn btn-primary w-100 shadow" name="update">Save changes</button>
          </form>
      </div>
    
    </div>
  </div>
</div>