<?php
$title = "Contact";
  require_once('./home_header.php');
  require_once('./home_navbar.php')
?>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
      

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="page-header-shape-1 float-bob-x">
                <img src="assets/images/shapes/page-header-shape-1.png" alt="">
            </div>
            <div class="page-header-shape-2 float-bob-y">
                <img src="assets/images/shapes/page-header-shape-2.png" alt="">
            </div>
            <div class="page-header-shape-3 float-bob-x">
                <img src="assets/images/shapes/page-header-shape-3.png" alt="">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact One Start-->
        <section class="contact-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Contact with us</span>
                    <h2 class="section-title__title">Feel free to write us <br> anytime</h2>
                </div>
                <div class="contact-one__form-box">
                    <form action="https://qrowd-html.vercel.app/main-html/assets/inc/sendemail.php" class="contact-one__form contact-form-validated"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Your Name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Phone" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Subject" name="subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-form__input-box text-message-box">
                                    <textarea name="message" placeholder="Write a Message"></textarea>
                                </div>
                                <div class="contact-form__btn-box">
                                    <button type="submit" class="thm-btn contact-form__btn">Send a Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--Contact One End-->

        <!--Address Start-->
        <section class="address">
            <div class="container">
                <div class="row">
                    <!--Address Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="address__single">
                            <div class="address__title-box">
                                <h4 class="address__title">About</h4>
                                <div class="address__icon">
                                    <span class="icon-entrepreneur-1"></span>
                                </div>
                            </div>
                            <p class="address__text">A group of NGO's from different parts of the world like EUROPE, USA, ASIA, AFRICA, etc, projecting poverty alleviation around the world with a one off donation/registration.</p>
                        </div>
                    </div>
                    <!--Address Single End-->
                    <!--Address Single Start-->
                    <!-- <div class="col-xl-4 col-lg-4">
                        <div class="address__single">
                            <div class="address__title-box">
                                <h4 class="address__title">Address</h4>
                                <div class="address__icon">
                                    <span class="icon-location"></span>
                                </div>
                            </div>
                            <p class="address__text">68 Road Broklyn Street. <br> New York. United States of <br>
                                America</p>
                        </div>
                    </div> -->
                    <!--Address Single End-->
                    <!--Address Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="address__single">
                            <div class="address__title-box">
                                <h4 class="address__title">Contact</h4>
                                <div class="address__icon">
                                    <span class="icon-contact"></span>
                                </div>
                            </div>
                            <p class="address__text">
                                <a href="tel:+2348034347090" class="address__number">+2349122548608</a>
                                <a href="tel:+447837287098" class="address__number">+447883715885</a>
                                <a href="mailto:help@givas.org" class="address__email">help@givas.org</a>
                            </p>
                        </div>
                    </div>
                    <!--Address Single End-->
                </div>
            </div>
        </section>
        <!--Address End-->

        <!--Google Map Start-->
      
        <!--Google Map End-->

        <!--Site Footer Start-->
        <?php 
           require_once('./home_footer.php')
        ?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <?php 
      require_once('./mobile_navbar.php')
    ?>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="contact.html#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="contact.html#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


   <?php 
      require_once('./script.php')
   ?>
</body>

</html>