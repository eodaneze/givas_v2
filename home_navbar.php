 <?php 
    require_once('./inc/config/connection.php');
 ?>
 
 <header class="main-header">
            <div class="main-header__top">
                <div class="main-header__top-inner">
                    <div class="main-header__top-left">
                        <ul class="list-unstyled main-header__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="text">
                                    <!-- <p>30 Commercial road fratton, Australia</p> -->
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:help@givas.org">help@givas.org</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <div class="main-header__login">
                            <ul class="list-unstyled main-header__login-list">
                                
                                <li><a href="./register">Register</a></li>
                            </ul>
                        </div>
                        <div class="main-header__social">
                            <a href="./"><i class="fab fa-twitter"></i></a>
                            <a href="./"><i class="fab fa-facebook"></i></a>
                            <a href="./"><i class="fab fa-tiktok"></i></a>
                            <a href="https://t.me/Givasglobal" target="_blank"><i class="fab fa-telegram"></i></a>
                            <a href="./"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner clearfix">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="./"><img src="assets/images/Givas.png" width="50px" alt=""></a>
                            </div>
                            <div class="main-menu__main-menu-box">
                                <a href="./" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown current megamenu">
                                        <a href="./">Home </a>
                                       
                                    </li>
                                    <li class="dropdown current megamenu">
                                        <a href="./about">About </a>
                                       
                                    </li>
                                   
                                  
                                    
                                  
                                    <li>
                                        <a href="./contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__call-search-btn-box">
                                <div class="main-menu__call">
                                    <div class="main-menu__call-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="main-menu__call-content">
                                        <p class="main-menu__call-sub-title">Call Anytime</p>
                                        <h5 class="main-menu__call-number"><a href="tel:>+447837287098">+447837287098</a></h5>
                                    </div>
                                </div>
                                <div class="main-menu__search-box">
                                    <a href="index.html#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                </div>
                                <div class="main-menu__btn-box">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal3"  class="thm-btn main-menu__btn"><i
                                            class="icon-plus-symbol"></i>Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>