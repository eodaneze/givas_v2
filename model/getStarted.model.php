
<style>
     button{
          width: 100%;
          border: none;
          padding: 10px;
          border-radius: 5px;
          transition: .30s ease;
          color: white;
     }
     .btn-main{
          background-color: #fe7f4c;
     }
        .btn-pri{
          background-color: #07847f;
          
     }
     .btn-main:hover{
         border: 1px solid #fe7f4c;
         background-color: white;
         color: black;
         transition: .30s ease;
     }
     .btn-pri:hover{
         border: 1px solid #07847f;
         background-color: white;
         color: black;
     }
     @media (max-width: 600px){
         .btn-main{
              margin-bottom: 15px;
         }
     }
</style>
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel2">Get Started</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                 <h5>Hello Awesome Person 👋🏻👋🏻</h5>
                 <p>Welcome to Givas Community, please choose how you want to get started with us</p>

                 <div class="row mt-3">
                      <div class="col-lg-6">
                          <a href="./register">
                              <button class="btn-main shadow">Basic Plan</button>

                          </a>
                      </div>
                      <div class="col-lg-6">
                        <a href="./register?plan=pro">
                            <button class="btn-pri">Pro Plan</button>

                        </a>
                      </div>
                 </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./assets/js/direct-payment.js"></script>
 <style>
    .drag-over {
      background-color: #e9ecef;
    }
  </style>


