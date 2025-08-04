<?php
   $title ="Vendor Deashboard";
   require_once('./home_header.php');
   require_once('./sessionCheck.php');
  // require_once('./model/welcome.modal.php')
   
 
   ?>
  <body> 
    
  <style>
   .activate-btn{
      background-color: #f0f0f0;
      padding: 10px 15px;
      border-radius: 6px;
      border: none;
   }
   .activate-btn a{
     font-size: 17px;
     /* font-weight: bold; */
                                            
   }
   .kyc-alert{
      display: flex;
      justify-content: space-between;
   }
     .kyc-alert h5{
         color: #fff;
         font-size: 20px;
         font-weight: bolder;
     }
     .kyc-alert p{
        color: white;
     }
     
       .pro {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    border-radius: 10px;
    animation: changeColor 3s infinite alternate ease-in-out;
    color: white;
    
}

@keyframes changeColor {
    0% {
        background-color: black;
    }
    100% {
        background-color: #0066cc;
    }
}

.pro-left {
    flex-basis: 70%;
}

.pro-left p {
    font-size: 14px;
}

.pro-right button {
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    background-color: white;
    color: black;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease-in-out;
}

.pro-right button:hover {
    background-color: #f0f0f0;
    transform: scale(1.05);
}
.falling {
      position: fixed;
      top: -100px;
      pointer-events: none;
      z-index: 9999;
      animation: fall 5s linear infinite;
    }

    @keyframes fall {
      0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
      }
      100% {
        transform: translateY(100vh) rotate(360deg);
        opacity: 0;
      }
    }
     @media(max-width: 600px){
         .kyc-alert{
           flex-direction: column;
     } 
       .kyc-alert h5{
         color: #fff;
         font-size: 14px;
         font-weight: bolder;
       }
       .main-activate-btn{
           margin-top: 15px;
       }
       .activate-btn{
          width: 100%;
       }
        .pro{
         flex-direction: column;
      }
      .pro-right button{
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        background-color: white;
        color: black;
        width: 280px;
        margin-top: 7px;
     }
     }                             
  </style>
    <!-- loader starts-->
    
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php
        require_once('./home_navbar.php');
        require_once('./model/about-phase.php');
        require_once('./model/update-wallet.php');
        require_once('./model/vendor-payoutRequest.php');
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
            <?php require_once('./banner.php') ?>
         
          
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row size-column"> 
              <div class="col-xxl-12 box-col-12">
                <div class="row"> 
                
                  <div class="col-xl-4 col-sm-6">
                    <div class="card o-hidden small-widget">
                      <div class="card-body total-Progress border-b-warning border-2"> <span class="f-light f-w-500 f-14">Total Sales</span>
                        <div class="project-details">
                          <div class="project-counter">
                            <h2 class="f-w-600"><?=$total_sales_count?></h2><span class="f-12 f-w-400"></span>
                          </div>
                          <div class="product-sub bg-warning-light"> 
                            <svg class="invoice-icon">
                              <use href="./assets/svg/icon-sprite.svg#tick-circle"></use>
                            </svg>
                          </div>
                        </div>
                        <ul class="bubbles">
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                 
                  <div class="col-xl-4 col-sm-6">
                    <div class="card o-hidden small-widget">
                      <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Total Earnings</span>
                        <div class="project-details"> 
                          <div class="project-counter">
                            <h2 class="f-w-600">$ <?=number_format($vendor_total_sales, 2)?></h2><span class="f-12 f-w-400"></span>
                          </div>
                          <div class="product-sub bg-light-light"> 
                            <svg class="invoice-icon">
                              <use href="./assets/svg/icon-sprite.svg#edit-2"></use>
                            </svg>
                          </div>
                        </div>
                        <ul class="bubbles"> 
                          <li class="bubble"> </li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-sm-6 bg-">
                             <div class="card o-hidden small-widget bg-dark">
                               <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14 terxt-white">Next Payout</span>
                                 <div class="project-details"> 
                                
                                    <div class="project-counte">
                                      <input type="hidden" name="amount" value="<?=$vendor_total_sales?>">
                                      <input type="hidden" name="user_id" value="<?=$user_id?>">
                                      <h2 class="f-w-600 text-white">$ <?=number_format($vendor_total_sales, 2)?></h2>
                                      <div class="mt-4">
                                           <button class="btn btn-primary d-flex align-items-center justify-content-center p-3 w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                       Request Payout
                                                     
                                            </button>

                                      </div>
                                    </div>
                                
                                   <div class="product-sub bg-light-light"> 
                                     <svg class="invoice-icon">
                                       <use href="./assets/svg/icon-sprite.svg#edit-2"></use>
                                     </svg>
                                   </div>
                                 </div>
                                 <ul class="bubbles"> 
                                   <li class="bubble"> </li>
                                   <li class="bubble"></li>
                                   <li class="bubble"></li>
                                   <li class="bubble"></li>
                                   <li class="bubble"></li>
                                   <li class="bubble"></li>
                                   <li class="bubble"></li>
                                   <li class="bubble"></li>
                                   <li class="bubble"></li>
                                 </ul>
                               </div>
                             </div>
                    </div>
                  <div class="col-xl-4 col-sm-6">
                    <div class="card o-hidden small-widget">
                      <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Total Payout</span>
                        <div class="project-details"> 
                          <div class="project-counter">
                            <h2 class="f-w-600">$ <?=number_format($vendor_total_success, 2)?></h2><span class="f-12 f-w-400"></span>
                          </div>
                          <div class="product-sub bg-light-light"> 
                            <svg class="invoice-icon">
                              <use href="./assets/svg/icon-sprite.svg#edit-2"></use>
                            </svg>
                          </div>
                        </div>
                        <ul class="bubbles"> 
                          <li class="bubble"> </li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-sm-6">
                    <div class="card o-hidden small-widget">
                      <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Pending Payout</span>
                        <div class="project-details"> 
                          <div class="project-counter">
                            <h2 class="f-w-600">$ <?=number_format( $vendor_total_pending, 2)?></h2><span class="f-12 f-w-400"></span>
                          </div>
                          <div class="product-sub bg-light-light"> 
                            <svg class="invoice-icon">
                              <use href="./assets/svg/icon-sprite.svg#edit-2"></use>
                            </svg>
                          </div>
                        </div>
                        <ul class="bubbles"> 
                          <li class="bubble"> </li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  
                 
                  
          
                 
                  
                  <div class="col-xl-4 col-sm-6">
                    <div class="card o-hidden small-widget">
                      <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">No of Products</span>
                        <div class="project-details"> 
                          <div class="project-counter">
                            <h2 class="f-w-600"><?=$total_products?></h2><span class="f-12 f-w-400"></span>
                          </div>
                          <div class="product-sub bg-light-light"> 
                            <svg class="invoice-icon">
                              <use href="./assets/svg/icon-sprite.svg#edit-2"></use>
                            </svg>
                          </div>
                        </div>
                        <ul class="bubbles"> 
                          <li class="bubble"> </li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-sm-6">
                    <div class="card o-hidden small-widget">
                      <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">No of Affiliate</span>
                        <div class="project-details"> 
                          <div class="project-counter">
                            <h2 class="f-w-600"><?=$total_affiliates?></h2><span class="f-12 f-w-400"></span>
                          </div>
                          <div class="product-sub bg-light-light"> 
                            <svg class="invoice-icon">
                              <use href="./assets/svg/icon-sprite.svg#edit-2"></use>
                            </svg>
                          </div>
                        </div>
                        <ul class="bubbles"> 
                          <li class="bubble"> </li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                          <li class="bubble"></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                    
                  
                
                </div>
              
               
                 
                  
                 
                </div>

                </div>
              </div>
              
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
         <?php 
            require_once('./footer.php');
            require_once('./sweet-alert.php');
         ?>
      </div>
    </div>

    <style>
  /* Spinner styling */
  .spinner {
    border: 4px solid rgba(255, 255, 255, 0.3);
    border-top: 4px solid white;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    animation: spin 1s linear infinite;
  }

  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
</style>

<script>
  document.getElementById("requestButton").addEventListener("click", function () {
    const button = this;
    const spinner = document.getElementById("spinner");
    const buttonText = document.getElementById("buttonText");

    // Change button text to spinner
    buttonText.style.display = "none";
    spinner.style.display = "inline-block";
    button.disabled = true;

    // Delay the form submission for 5 seconds
    setTimeout(() => {
      document.getElementById("payoutForm").submit();
    }, 5000);
  });
</script>
<script>
  document.getElementById("requestProButton").addEventListener("click", function () {
    const button = this;
    const spinner = document.getElementById("spinner");
    const buttonText = document.getElementById("buttonText");

    // Change button text to spinner
    buttonText.style.display = "none";
    spinner.style.display = "inline-block";
    button.disabled = true;

    // Delay the form submission for 5 seconds
    setTimeout(() => {
      document.getElementById("ProPayoutForm").submit();
    }, 5000);
  });
</script>
<?php
   if(mysqli_num_rows($planResult) > 0){
       
       if($referral_no == 50 || $referral_no == 100){
           ?>
            <script>
              const items = ['🎈', '💐', '🌸', '🌼', '🎉'];
            
              function createFallingItem() {
                const item = document.createElement('div');
                item.classList.add('falling');
                item.innerText = items[Math.floor(Math.random() * items.length)];
                item.style.left = Math.random() * 100 + 'vw';
                item.style.fontSize = Math.random() * 20 + 20 + 'px';
                document.body.appendChild(item);
            
                setTimeout(() => {
                  item.remove();
                }, 5000);
              }
            
              setInterval(createFallingItem, 300);
            </script>
           
           <?php
       }
   }
?>
    <?php require_once('./main-script.php') ?>
  </body>
</html>