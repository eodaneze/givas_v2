<?php 
  // get the product_id of the omg course

  $product_row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT product_id FROM products WHERE pname = 'Online Money Guaranteed'"));
  $pid = $product_row['product_id'];
?>

<div class="container-fluid">
            <div class="page-title">
              <div class="row">
                   <div class="col-xxl-12 col-xl-12 col-lg-12 mt-5">
                        <div> <a class="toggle-sidebar" href=""> <i class="iconly-Category icli"> </i></a>
                        <div class="d-flex align-items-center gap-2 ">
                            <h4 class="f-w-600"><?=getGreeting()?> <?=$fullname?> 💵💵 <span class="<?=$plan == 'Basic Plan' ? 'text-danger' : 'text-success'?>">(<?=$plan?>)</span></h4>
                        </div>
                        </div>
                        <div class="welcome-content d-xl-block d-none"><span class="text-truncate col-12 text-primary"><?=$plan == 'Basic Plan' ? 'Upgrade to pro plan to enjoy more features . ' : ''?></span></div>
                    </div>
              
              </div>
            </div>
          </div>
          
          <div class="Container-fluid mx-3">
             
               <div class="row size-column">
                   <div class="col-xxl-12 box-col-12 mb-4">
                      
                         <div class='pro'>
                                <div class='pro-left'>
                                   <h5 class="text-white mb-3 fw-bold">Online Money Guaranteed Course 🔥</h5>
                                    <p>Watch our OMG course and earn your first $50 on Givas</p>
                                </div>
                                <div class='pro-right'>
                                  <button id="notifyButton" name='notify'>
                                      <a href="./promote-product?pid=<?=$pid?>">Promote Now!</a>
                                  </button>
                                </div>
                             
                          </div>
                       
                   </div>
                  
               </div>
          </div>