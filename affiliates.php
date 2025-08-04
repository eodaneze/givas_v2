<?php 
 $title = "Affiliates";
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
                        <li>Affiliates</li>
                    </ul>
                    <h2>Affiliates</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About Two Start-->
        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="about-two__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Our Affiliates</span>
                                <h2 class="section-title__title">Get paid in foreign currencies promoting quality products on PromptEarn globally</h2>
                            </div>
                            <p class="about-two__text-2">Immerse yourself in a narrative that centres around your business growth. Create an affiliate account and start making money now. You can earn up to 75% commission on each sale.</p>
                            
                           
                            <div class="about-one__person">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="about-two__right">
                            <div class="about-two__img-box">
                                <div class="about-two__img">
                                    <img src="assets/images/resources/about-two-img-1.jpg" alt="">
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End-->

      
        <section>
             <div class="container my-5">
                 <div class="row">
                      <div class="col-lg-6">
                         <img src="./assets/images/count.webp" class="img-fluid rounded-3" alt="">
                      </div>
                      <div class="col-lg-6">
                               <h4 class="section-title__title mb-3" style="font-size: 35px;">It’s simple and easy to get started, Here’s how it works;</h4>

                            <div class="mb-3">
                                <h5><i class="fa-solid fa-gears" style="color: orangered;"></i> Step 1 : Create your account</h5>
                                <p>Create your Givas affiliate account and pay the one time registration fee of $10 / ₦5,000 only. Create your affiliate account here</p>

                            </div>
                            <div class="mb-3">
                                <h5><i class="fa-solid fa-gears" style="color: orangered;"></i>  Step 2 : Select a product</h5>
                                <p>Pick any of the products available on our marketplace and start promoting it using the unique affiliate link that you will be given</p>

                            </div>
                            <div class="mb-3">
                                <h5><i class="fa-solid fa-gears" style="color: orangered;"></i> Step 3 : Start earning</h5>
                                <p>Make money when customers buy through your unique affiliate link. You can request withdrawal anytime and receive it on Saturday.</p>

                            </div>
                      </div>
                 </div>
             </div>
        </section>


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