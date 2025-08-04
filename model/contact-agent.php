<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agent List</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
             <?php 
              $sql = "SELECT * FROM agent";
              $result = mysqli_query($conn, $sql);
              
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $country = $row['country'];
                    $phone = $row['phone'];
                    $fullName = $fname . ' ' .$lname;
                  ?>
                  
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <div class="">
                               <div class="" style="display: flex; align-items: center; gap: 10px">
                                    <!--<div>-->
                                    <!--     <img style="color: white; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; margin: 0;" class="bg-primary"></h4>-->
                                    <!--</div>-->
                                    <div>
                                         <h5><?=$fullName?></h5>
                                         <p><?=$country?></p>
                                    </div>
                               </div>
                          </div>
                          <div class="">
                              <a href='https://wa.me/<?=$phone?>' class="btn btn-outline-primary shadow" target="_blank">Send Message</a>
                          </div>
                      </div>
                  <?php
              }
                  
              }else{
                  ?>
                       <p>Agent is currently not avaliable. Please reach out to us on: <strong>help@givas.org</strong></p>
                  <?php
              }
              
              
             
          ?>
          
        

         
      </div>
    
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>