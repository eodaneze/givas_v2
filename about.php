<?php 
  require_once('./home_header.php');
  require_once('./home_navbar.php');
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
                        <li>About</li>
                    </ul>
                    <h2>About</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About Two Start-->
        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">our introduction</span>
                                <h2 class="section-title__title">Get to Know About Givas Platform</h2>
                            </div>
                            <p class="about-two__text-1">We empower people to unite around ideas that matter.</p>
                            <p class="about-two__text-2">A group of NGO's from different parts of the world like EUROPE, USA, ASIA, etc, projecting poverty alleviation around the world with a one off donation/registration.</p>
                            <p>It's a One-line link with a Global pool, No referral bonus, no commision. With GIVAS, memebers not only contribute to a noble cause but also see substantial earnings for themselves, it is a movement to eradicate poverty from our communities. We are empowering Dreams Together</p>
                            <div class="about-two__progress">
                                <div class="about-two__progress-single">
                                    <h4 class="about-two__progress-title">Crowdfunding</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="70%">
                                            <div class="count-text">70%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-one__person">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-two__right">
                            <div class="about-two__img-box">
                                <div class="about-two__img">
                                    <img src="assets/images/resources/about-two-img-1.jpg" alt="">
                                </div>
                                <div class="about-two__img-two">
                                    <img src="assets/images/resources/about-two-img-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End-->

      

        <!--Changing One Start-->
        <section class="changing-one changing-two">
            <div class="changing-one__bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/changing-bg.jpg);"></div>
            <div class="container">
                <div class="changing-one__inner">
                    <p class="changing-one__sub-title">Roundup of Standout Projects</p>
                    <h2 class="changing-one__title"><?=$siteName?> is Changing the Way <br> New Ideas Come to Life</h2>
                    <a href="./register" class="thm-btn">Get Started</a>
                </div>
            </div>
        </section>
        <!--Changing One End-->

        <!--Testimonial Two Start-->
        
        <!--Testimonial Two End-->

        <!--Team One Start-->
        
        <!--Team One End-->

        <!--Ready One Start-->
        <section class="ready-one">
            <div class="container">
                <div class="ready-one__inner">
                    <div class="ready-one-shape-1 float-bob-x">
                        <img src="assets/images/shapes/ready-one-shape-1.png" alt="">
                    </div>
                    <div class="ready-one__big-icon float-bob-y-2">
                        <span class="icon-fundraiser"></span>
                    </div>
                    <div class="ready-one__left">
                        <div class="icon">
                            <span class="icon-fundraiser"></span>
                        </div>
                        <div class="content">
                            <p>Your story starts from here</p>
                            <h3>Ready to raise funds for idea?</h3>
                        </div>
                    </div>
                    <div class="ready-one__right">
                        <a href="./contact" class="thm-btn ready-one__btn">Make it Happen</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Ready One End-->

     <?php 
       require_once('./home_footer.php');
       require_once('./mobile_navbar.php')
     ?>


    </div><!-- /.page-wrapper -->


    

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="about.html#">
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

    <a href="about.html#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


    <?php 
      require_once('./script.php')
    ?>
</body>

</html>