<?php 
  require_once('./home_header.php');
  require_once('./home_navbar.php');
  require_once('./model/getStarted.model.php')
?>
<style>
    .make-money-card h4{
         line-height: 3rem;
         font-size: 40px;
         text-transform: capitalize;
         margin-bottom: 30px;
    }
    .make-money-card p{
        margin-bottom: 15px;
    }

    @media(max-width: 600px){
        .make-money-card h4{
            font-size: 20px;
            line-height: 2rem;
            margin-top: 15px;
        }
    }
</style>
<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>




<!-- 
    <div class="preloader">
        <div class="preloader__image"></div>
    </div> -->
    <!-- /.preloader -->


    <div class="page-wrapper">
  

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/hero-1.avif);"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider__shape-1">
                            <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider__shape-2">
                            <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider__shape-3">
                            <img src="assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-8">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">The Digital Education & Earnings Hub</p>
                                        <h2 class="main-slider__title">Learn, Sell <br>& Earn Pool
                                            </h2>
                                            
                                        <div class="main-slider__btn-box">
                                            <a href=""  data-bs-toggle="modal" data-bs-target="#exampleModal3" class="thm-btn main-slider__btn">Get Started</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/hero-3.avif);"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider__shape-1">
                            <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider__shape-2">
                            <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider__shape-3">
                            <img src="assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-8">
                                     <div class="main-slider__content">
                                        <p class="main-slider__sub-title">The Digital Education & Earnings Hub</p>
                                        <h2 class="main-slider__title">Learn, Sell <br>& Earn Pool
                                            </h2>
                                            
                                        <div class="main-slider__btn-box">
                                            <a href=""  data-bs-toggle="modal" data-bs-target="#exampleModal3" class="thm-btn main-slider__btn">Get Started</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-3.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider__shape-1">
                            <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="main-slider__shape-2">
                            <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                        </div>
                        <div class="main-slider__shape-3">
                            <img src="assets/images/shapes/main-slider-shape-3.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-8">
                                     <div class="main-slider__content">
                                        <p class="main-slider__sub-title">The Digital Education & Earnings Hub</p>
                                        <h2 class="main-slider__title">Learn, Sell <br>& Earn Pool
                                            </h2>
                                            
                                        <div class="main-slider__btn-box">
                                            <a href=""  data-bs-toggle="modal" data-bs-target="#exampleModal3" class="thm-btn main-slider__btn">Get Started</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

       <!-- about section -->

        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">introduction</span>
                                <h2 class="section-title__title">Get to Know About Givas Platform</h2>
                            </div>
                            <p class="about-two__text-1">The Digital Education & Earnings Hub</p>
                            <p class="about-two__text-2">GIVAS is a community-powered platform that lets you affiliate other people’s digital courses or launch and sell your own—all in one place and also earn from a global pool system.</p>
                            <!-- <p>It's a One-line link with a Global pool, No referral bonus, no commision. With GIVAS, memebers not only contribute to a noble cause but also see substantial earnings for themselves, it is a movement to eradicate poverty from our communities. We are empowering Dreams Together</p> -->
                            <p>Whether you're a beginner or a pro, GIVAS helps you monetize knowledge, grow passive income, and build a digital education empire—without tech stress or upfront fees.</p>
                           
                       
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <img src="./assets/images/count-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
       <!-- end of about section -->


       <!-- what we offer -->
        <section class="offer">
             <div class="container" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                  <h2 class="section-title__title text-center mb-4">What We Offer</h2>
                  <div class="row g-4">
                      <div class="col-lg-4 shadow p-3 rounded-3">
                           <h3 class="mb-3">Reliable Payment</h3>
                           <p>We have a solid payment system that ensures you get paid for every sale and receive your money in your preferred bank account whenever you request withdrawals on Sunday</p>
                      </div>
                      <div class="col-lg-4 shadow p-3 rounded-3">
                           <h3 class="mb-3">Commission Offers</h3>
                           <p>At Givas, you earn as high as 50% in commission per sale. This means that for any of their products you sell, you earn up to half of the money (even more!)</p>
                      </div>
                      <div class="col-lg-4 shadow p-3 rounded-3">
                           <h3 class="mb-3">Product Marketplace</h3>
                           <p>We have a strong product vetting system. This ensures you’d only see high quality and fast selling products on our marketplace</p>
                      </div>
                      <div class="col-lg-4 shadow p-3 rounded-3">
                           <h3 class="mb-3">Regular Training</h3>
                           <p>To help improve your sales/marketing skills and make more money, you would have access to in-depth trainings.</p>
                      </div>
                      <div class="col-lg-4 shadow p-3 rounded-3">
                           <h3 class="mb-3">Strong Support System</h3>
                           <p>Our support team is dedicated to ensure you always have a seamless and hassle- free experience on Givas</p>
                      </div>
                  </div>
             </div>
        </section>
       <!-- end of what we offer -->

       <!-- make more money -->
        <div class="more-money bg-light p-5">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-6">
                         <img src="./assets/images/money.webp" class="img-fluid rounded-3" alt="">
                     </div>
                     <div class="col-lg-6 make-money-card">
                         <h4>Make more money by promoting good quality products from vetted vendors</h4>

                         <p>Register as a Givas affiliate and gain instant access to our product marketplace. pick any of them that you like and start promoting it right away.</p>

                         <p>In addition, you’d also get access to regular training to strengthen your sales skills and earn more money weekly</p>

                         <div>
                             <button style="background-color: #07847f;" class="p-3 shadow">Become an Affiliate</button>

                         </div>
                     </div>
                 </div>
             </div>
        </div>
       <!--end of  make more money -->


       <!--  -->
         <div style="background-color: black;" class="p-5">
            <div class="container">
                  <div class="row">
                      <div class="col-lg-7">
                          <h4 style="color: white; line-height: 3rem">Our strong tracking system ensures that you get paid for any sale that comes through your unique link</h4>
                          <p class="text-white mt-4">It is simple and easy to get started <a href="./affiliates" style="color: #07847f;">Click here to see how it works</a></p>
                      </div>
                  </div>
            </div>
         </div>
       <!--  -->

       <!-- dashboard -->
        <div class="py-5">
            <div class="container">
                 <h3>How does Givas work?</h3><br>
                 <p>We’ve made it super easy for you to earn money from any part of the world without the stress of creating, producing, buying or delivering products. We have collaborated with the best digital and physical product owners. These vetted and certified vendors offer as high as 50% on each sale.</p><br>

                 <p>You can earn in multiple currencies on Givas, selling globally. And also recieve money in your preferred local bank account at good exchange rates. The best part is that you get paid every Saturday, hence we call it Saturday Blessing</p>

                 <div class="p-4 rounded mt-5" style="background-color: #07847f;">
                     <img src="./assets/images/dashboard.png" class="img-fluid" alt="">

                 </div>
            </div>
        </div>
       <!-- end of dashboard -->
      <!--Project One Start-->
       
        <!--Project One End-->

        <div class="black-bg background-repeat-no background-position-top-right"
            style="background-image: url(assets/images/shapes/why-choose-funfact-bg-1-1.png);">
            <!--Why Choose One Start-->
            <section class="why-choose-one">
                <div class="container">
                    <div class="why-choose-one__inner">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="why-choose-one__left">
                                    <div class="section-title text-left">
                                        <span class="section-title__tagline">our Mission</span>
                                       
                                    </div>
                                  
                                    <div>
                                        <p class="mb-3">Our mission is to empower individuals and businesses by providing a transparent, performance-driven affiliate marketing platform that fosters growth, trust, and mutual success. We aim to bridge the gap between brands and affiliates through cutting-edge technology, fair compensation, and data-driven tools that maximize earning potential and drive measurable results</p>

                                        <p class="mb-3">Your journey is our priority. Our platform weaves a story centred on your success, placing your business growth at the heart of this initiative. From personalized strategies to actionable solutions.</p>

                                        <p class="mb-3">To connect creators of exceptional digital products with motivated affiliates, enabling sustainable growth through strategic partnerships, cutting-edge tools, and personalized support.</p>
                                    </div>
                                    <a href="./register" class="thm-btn">Become An Affiliate</a>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="why-choose-one__right">
                                    <div class="why-choose-one__img-box">
                                        <div class="why-choose-one__img">
                                            <img src="assets/images/resources/why-choose-1.1.jpg" alt="">
                                        </div>
                                        <div class="why-choose-one__trusted">
                                            <p>Trusted by more <br> than <span class="odometer"
                                                    data-count="3500">00</span>
                                                <br>
                                                clients</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.why-choose-one__inner -->
                </div>
            </section>
            <!--Why Choose One End-->

            <!--Counter One Start-->
            <section class="counter-one">
                <div class="container">
                    <div class="row">
                        <!--Counter One Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="counter-one__single">
                                <div class="counter-one__single-inner">
                                    <div class="counter-one__border-left"></div>
                                    <div class="counter-one__border-right"></div>
                                    <div class="counter-one__icon">
                                        <span class="icon-verified"></span>
                                    </div>
                                    <div class="counter-one__count-box">
                                        <!--<h3 class="odometer" data-count="790">00</h3>-->
                                        <h3 class="h5">In progress</h3>
                                        <p class="counter-one__text">Projects Completed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Counter One Single End-->
                        <!--Counter One Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="counter-one__single">
                                <div class="counter-one__single-inner">
                                    <div class="counter-one__border-left"></div>
                                    <div class="counter-one__border-right"></div>
                                    <div class="counter-one__icon">
                                        <span class="icon-business"></span>
                                    </div>
                                    <div class="counter-one__count-box">
                                        <!--<h3 class="odometer" data-count="260">00</h3>-->
                                        <h3 class="h5">Ongoing</h3>
                                        <p class="counter-one__text">Partner Fundings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Counter One Single End-->
                        <!--Counter One Single Start-->
                        <!--<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">-->
                        <!--    <div class="counter-one__single">-->
                        <!--        <div class="counter-one__single-inner">-->
                        <!--            <div class="counter-one__border-left"></div>-->
                        <!--            <div class="counter-one__border-right"></div>-->
                        <!--            <div class="counter-one__icon">-->
                        <!--                <span class="icon-stand-out"></span>-->
                        <!--            </div>-->
                        <!--            <div class="counter-one__count-box">-->
                        <!--                <h3 class="odometer" data-count="86">00</h3>-->
                        <!--                <span class="counter-one__letter">k</span>-->
                        <!--                <p class="counter-one__text">Raised to Date</p>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--Counter One Single End-->
                        <!--Counter One Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="counter-one__single">
                                <div class="counter-one__single-inner">
                                    <div class="counter-one__border-left"></div>
                                    <div class="counter-one__border-right"></div>
                                    <div class="counter-one__icon">
                                        <span class="icon-coaching"></span>
                                    </div>
                                    <div class="counter-one__count-box">
                                          <h3 class="odometer" data-count="260">00</h3>
                                        <p class="counter-one__text">Happy Customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Counter One Single End-->
                    </div>
                </div>
            </section>
            <!--Counter One End-->
        </div><!-- /.black-bg -->



        <!-- why choose us section -->
           <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">What Makes Us Unique</span>
                                <h2 class="section-title__title">Why you Should Choose Givas</h2>
                            </div>
                            <p class="about-two__text-1">We partner with top-performing brands and merchants to give you access to products and services that are proven to convert, ensuring you get the most out of your promotional efforts.</p>
                            <p class="about-two__text-2"><i class='fa fa-check'></i> Our intuitive dashboard provides real-time tracking, detailed insights, and performance reports—so you always know where your earnings are coming from.</p>
                            <p class="about-two__text-2"><i class='fa fa-check'></i> We prioritize your time and effort. That’s why we offer timely, consistent payouts through multiple secure payment methods.</p>
                            <p class="about-two__text-2"><i class='fa fa-check'></i> Our affiliate success team is available to help you optimize campaigns, resolve issues quickly, and grow your income consistently.</p>
                            <!--<p class="about-two__text-2"><i class='fa fa-check'></i> This program is highly sustainable, as this presentation will clearly demonstrate</p>-->
                            <p class="about-two__text-2"><i class='fa fa-check'></i> It is the pioneering project aimed at uplifting individuals from the "Bottom of Society," providing them more than just basic survival</p>
                           
                            <p class="about-two__text-2"><i class='fa fa-check'></i>Givas is highly sustainable</p>
                            
                        
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
        <!-- end of why choose us section -->


        <!--Newsletter Start-->
        <section class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="newsletter__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Subscribe to newsletter</span>
                                <h2 class="section-title__title">Get our Complete Crowdfunding Guides</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="newsletter__right">
                            <form class="newsletter__form">
                                <div class="newsletter__input-box">
                                    <input type="email" placeholder="Enter your email" name="email">
                                    <button type="submit" class="newsletter__btn"><i
                                            class="fas fa-paper-plane"></i></button>
                                </div>
                            </form>
                            <div class="checked-box">
                                <input type="checkbox" name="skipper1" id="skipper" checked="">
                                <label for="skipper"><span></span>I agree to all terms and policies of the
                                    company</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Newsletter End-->

       

        <!--Individuals Work Start-->
        <section class="individuals-work">
            <div class="individuals-work__bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/individuals-bg.jpg);"></div>
            <div class="container">
                <div class="individuals-work__inner">
                    <div class="individuals-work__video-link">
                        <a href="https://www.youtube.com/watch?v=woFjnkeelSs" class="video-popup">
                            <div class="individuals-work__video-icon">
                                <span class="fa fa-play"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                    </div>
                    <h3 class="individuals-work__title">Givas is evolving the way
                        <br>individuals works</h3>
                </div>
            </div>
        </section>
        <!--Individuals Work End-->

        <!--Testimonial One Start-->
       
        <!--Testimonial One End-->

     

        <!--News One Start-->
      
        <!--News One End-->

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
          require_once('./home_footer.php')
       ?>


    </div><!-- /.page-wrapper -->


   <?php 
      require_once('./mobile_navbar.php');

   ?>

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="index.html#">
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

    <a href="index.html#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


    <?php 
      require_once('./script.php')
    ?>
</body>

</html>