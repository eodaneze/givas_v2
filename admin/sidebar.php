 <!-- Page Sidebar Start-->
 <div class="sidebar-wrapper" data-layout="stroke-svg">
          <div class="logo-wrapper"><a href="./"><img src="../assets/images/white-logo.png" width="70px" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"> </i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
          </div>
          <div class="logo-icon-wrapper"><a href="./"><img class="img-fluid" src="./assets/images/logo/logo-icon.png" alt="./"></a></div>
          <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                 
                <li class="sidebar-main-title">
                  <div>
                    <h6 class="lan-1">General</h6>
                  </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title" href="./">
                    <svg class="stroke-icon">
                      <use href="./assets/svg/icon-sprite.svg#stroke-home"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="./assets/svg/icon-sprite.svg#fill-home"></use>
                    </svg><span class="lan-3">Dashboard          </span></a>
                
                </li>
              <?php 
                 if($privillege == "All"){
                     ?>
                     
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">Agents</span></a>
                              <ul class="sidebar-submenu">
                                <li><a href="./add-agent">Add Agent</a></li>
                                <li><a href="box-layout.html">Agent List</a></li>
                              </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">Direct Payment</span></a>
                              <ul class="sidebar-submenu">
                                <li><a href="./direct-payment">Basic Plan</a></li>
                                <li><a href="./pro-plan">Pro Plan</a></li>
                                <!-- <li><a href="box-layout.html">Agent List</a></li> -->
                              </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">KYC Documents</span></a>
                              <ul class="sidebar-submenu">
                                <li><a href="./kyc-docs">View KYC Documents</a></li>
                                <!-- <li><a href="box-layout.html">Agent List</a></li> -->
                              </ul>
                            </li>
                             <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">Charity Fund</span></a>
                              <ul class="sidebar-submenu">
                                <li><a href="./charity-fund-docs">View Documents</a></li>
                                <!-- <li><a href="box-layout.html">Agent List</a></li> -->
                              </ul>
                            </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">Generate Coupon</span></a>
                              <ul class="sidebar-submenu">
                                <li><a href="./generate-coupon">Basic Coupon</a></li>
                                <li><a href="./generate-proCoupon">Pro Coupon</a></li>
                                <!-- <li><a href="box-layout.html">Agent List</a></li> -->
                              </ul>
                        </li>
                            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">Admin</span></a>
                              <ul class="sidebar-submenu">
                                <li><a href="./manage-admin">Manage Admin</a></li>
                                <!-- <li><a href="box-layout.html">Agent List</a></li> -->
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
                                <li><a href="./aff-payout">Affiliate Payout</a></li>
                                <li><a href="./vendor-payout">Vendor Payout</a></li>
                                <!-- <li><a href="box-layout.html">Agent List</a></li> -->
                              </ul>
                         </li>
                         <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">Product</span></a>
                              <ul class="sidebar-submenu">
                                <li><a href="./all-product">All Product</a></li>
                                <!-- <li><a href="box-layout.html">Agent List</a></li> -->
                              </ul>
                         </li>
                     <?php
                 }elseif($privillege == "Verify Payment"){
                     ?>
                          <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">Direct Payment</span></a>
                              <ul class="sidebar-submenu">
                                <li><a href="./direct-payment">View Direct Payment</a></li>
                                <!-- <li><a href="box-layout.html">Agent List</a></li> -->
                              </ul>
                         </li>
                     <?php
                 }elseif($privillege == "Verify KYC"){
                     ?>
                         <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">KYC Documents</span></a>
                              <ul class="sidebar-submenu">
                                <li><a href="./kyc-docs">View KYC Documents</a></li>
                                <!-- <li><a href="box-layout.html">Agent List</a></li> -->
                              </ul>
                        </li>
                     <?php
                 }elseif($privillege == "Sell Coupon"){
                     ?>
                         <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">Coupon</span></a>
                              <ul class="sidebar-submenu">
                                <li><a href="./generate-coupon">Generate Coupon</a></li>
                                <!-- <li><a href="box-layout.html">Agent List</a></li> -->
                              </ul>
                        </li>
                     <?php
                 }elseif($privillege == "Handle Payout"){
                     ?>
                         <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title">
                                <svg class="stroke-icon">
                                  <use href="./assets/svg/icon-sprite.svg#stroke-layout"></use>
                                </svg>
                                <svg class="fill-icon">
                                  <use href="./assets/svg/icon-sprite.svg#fill-layout"></use>
                                </svg><span class="">Payouts</span></a>
                              <ul class="sidebar-submenu">
                                <li><a href="./pending-payout">Pending Payout</a></li>
                                <!-- <li><a href="box-layout.html">Agent List</a></li> -->
                              </ul>
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