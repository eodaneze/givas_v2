<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <?php 
           
        ?>
        <h1 class="modal-title fs-5" id="exampleModalLabel">Phase Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php 
        //  check if id of the logged in user exist in the givas_phase_1 table, if yes echo true else echo false
        $sql = "SELECT * FROM givas_phase_1 WHERE user_id = '$user_id'";
        $res = mysqli_query($conn, $sql);
        if($row = mysqli_fetch_assoc($res)){
            $phase = $row['phase'];
            ?>
            <div class="modal-body">
                <h4><?=$phase?></h4>
                <p class="border-bottom">Enter this phase with $10</p>

                <div class="row">
                     <div class="col-8 mb-3 border-bottom">
                         <p class="fw-bold">Donation from 12 position to you</p>
                     </div>
                     <div class="col-4">
                         <button class="btn btn-primary">$ 66.00</button>
                     </div>
                     <div class="col-8 mb-3 border-bottom">
                         <p class="fw-bold">Substraction for phase 2</p>
                     </div>
                     <div class="col-4">
                         <button class="btn btn-primary">$ 20.00</button>
                     </div>
                     <div class="col-8 mb-3 border-bottom">
                         <p class="fw-bold">Distribution Fundand Projects</p>
                     </div>
                     <div class="col-4">
                         <button class="btn btn-primary">$ 26.00</button>
                     </div>
                     <div class="col-8 mb-3 border-bottom">
                         <p class="fw-bold">You Recieve</p>
                     </div>
                     <div class="col-4">
                         <button class="btn btn-primary">$ 20.00</button>
                     </div>
                </div>
            </div>
            
            <?php
        }else{
            $status = false;
        }
        // echo $status;
      ?>
      
    </div>
  </div>
</div>