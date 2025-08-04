 <!-- Page Sidebar Start-->




 <div class="sidebar-wrapper" data-layout="stroke-svg">
          <div class="logo-wrapper"><a href="./"><img src="../assets/images/white-logo.png" width="70px" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"> </i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
          </div>
          <!--<div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="./assets/images/logo/logo-icon.png" alt=""></a></div>-->
          <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn">
                  <div class="mobile-back text-end"> <span>Back </span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <?php 
                   if($plan == 'Basic Plan'){
                      ?>
                      <li class="sidebar-list my-4">
                          <button class="upgrade">
                              <a href="./upgrade-pro" class="text-white">Upgrade to Pro</a>
                          </button>
                      </li>
                      
                      <?php
                   }else{
                      echo "";
                   }
                ?>
             
                
                
              
                <?php 
                    if($isVendor){
                        ?>
                        
                            <li class="sidebar-list mt-4">
                               
                            <a class="text-white" href="./vendor">Vendor Dashboard</a>
                            </li>
            
                        
                          
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                 <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">Order & Sales</span></a>
                              <ul class="sidebar-submenu">
                                <li><a href="./vendor-sales">Recent Sales</a></li>
                                <li><a href="./all-payout?r=vendor">Payouts</a></li>
                              
                              </ul>
                            </li>
                          
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">My Products</span></a>
                              <ul class="sidebar-submenu">
                                <li><a href="./my-product">All Products</a></li>
                                <li><a href="./publish-product">Publish Product</a></li>
                              
                              </ul>
                            </li>
                           
                        <?php
                      
                    }
                    if($isAffiliate){
                       ?>
                          <li class="sidebar-list mt-4">
                               
                            <a class="text-white" href="./">Affiliate Dashboard</a>
                          </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">Marketplace</span></a>
                                <ul class="sidebar-submenu">
                                  <li><a href="./marketplace">Marketplace</a></li>
                                
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">Leaderboard</span></a>
                                <ul class="sidebar-submenu">
                                  <li><a href="./leaderboard">Top Affiliate</a></li>
                                
                                </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">Affiliate Sales</span></a>
                                <ul class="sidebar-submenu">
                                  <li><a href="./recent-sales">Recent Sales</a></li>
                                
                                </ul>
                            </li>
                           
                   
                          <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                              <svg class="stroke-icon">
                                <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                              </svg>
                              <svg class="fill-icon">
                                <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                              </svg><span class="">Payouts</span></a>
                            <ul class="sidebar-submenu">
                              <li><a href="./all-payout?r=aff">All Payouts</a></li>
                            </ul>
                          </li>
                          <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                              <svg class="stroke-icon">
                                <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                              </svg>
                              <svg class="fill-icon">
                                <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                              </svg><span class="">My Courses</span></a>
                            <ul class="sidebar-submenu">
                              <li><a href="./online-money-guaranteed">OMG Course</a></li>
                            </ul>
                          </li>
                       <?php
                    }

                    if(!$isVendor){
                        ?>
                             <li class="sidebar-list mb-4" style="position: fixed; bottom: 0">
                                    <button class="vendor-cta">
                                        <a class="text-white" data-bs-toggle="modal" data-bs-target="#exampleModal7">Become a Vendor</a>
                                    </button>
                          </li>
                        <?php
                    }
                ?>

                       
                      
                   
              
              </ul>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </div>
        <!-- Page Sidebar Ends-->
        

        <?php 
           require_once('./model/vendor-apply-terms.modal.php')
        ?>