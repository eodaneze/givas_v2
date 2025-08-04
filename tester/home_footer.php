<?php
    require_once('./settings.php')
?>
<footer class="footer skin-light-footer">
      <div>
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-4">
              <div class="footer-widget">
                <div class="d-flex align-items-start flex-column mb-3">
                  <div class="d-inline-block"><img src="assets/img/logo-1.png" class="img-fluid" width="160"
                      alt="Footer Logo">
                  </div>
                </div>
                <div class="footer-add pe-xl-3">
                  <p>We make your dream more beautiful & enjoyful with lots of happiness.</p>
                </div>
                <div class="foot-socials">
                  <ul>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-google-plus"></i></a></li>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-4">
              <div class="footer-widget">
                <h4 class="widget-title">The Navigation</h4>
                <ul class="footer-menu">
                  <li><a href="JavaScript:Void(0);">Talent Marketplace</a></li>
                  <li><a href="JavaScript:Void(0);">Payroll Services</a></li>
                  <li><a href="JavaScript:Void(0);">Direct Contracts</a></li>
                  <li><a href="JavaScript:Void(0);">Hire Worldwide</a></li>
                  <li><a href="JavaScript:Void(0);">Hire in the USA</a></li>
                  <li><a href="JavaScript:Void(0);">How to Hire</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-2 col-md-4">
              <div class="footer-widget">
                <h4 class="widget-title">Our Resources</h4>
                <ul class="footer-menu">
                  <li><a href="JavaScript:Void(0);">Free Business tools</a></li>
                  <li><a href="JavaScript:Void(0);">Affiliate Program</a></li>
                  <li><a href="JavaScript:Void(0);">Success Stories</a></li>
                  <li><a href="JavaScript:Void(0);">Upwork Reviews</a></li>
                  <li><a href="JavaScript:Void(0);">Resources</a></li>
                  <li><a href="JavaScript:Void(0);">Help & Support</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-2 col-md-6">
              <div class="footer-widget">
                <h4 class="widget-title">The Company</h4>
                <ul class="footer-menu">
                  <li><a href="JavaScript:Void(0);">About Us</a></li>
                  <li><a href="JavaScript:Void(0);">Leadership</a></li>
                  <li><a href="JavaScript:Void(0);">Contact Us</a></li>
                  <li><a href="JavaScript:Void(0);">Investor Relations</a></li>
                  <li><a href="JavaScript:Void(0);">Trust, Safety & Security</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="footer-widget">
                <h4 class="widget-title">Payment Methods</h4>
                <div class="pmt-wrap">
                  <img src="assets/img/payment.png" class="img-fluid" alt="">
                </div>
                <div class="our-prtwrap mt-4">
                  <div class="prtn-title">
                    <p class="text-muted-2 fw-medium">Our Partners</p>
                  </div>
                  <div class="prtn-thumbs d-flex align-items-center justify-content-start">
                    <div class="pmt-wrap pe-4">
                      <img src="assets/img/mytrip.png" class="img-fluid" alt="">
                    </div>
                    <div class="pmt-wrap pe-4">
                      <img src="assets/img/tripadv.png" class="img-fluid" alt="">
                    </div>
                    <div class="pmt-wrap pe-4">
                      <img src="assets/img/goibibo.png" class="img-fluid" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="footer-bottom border-top">
        <div class="container">
          <div class="row align-items-center justify-content-between">

            <div class="col-xl-6 col-lg-6 col-md-6">
              <p class="mb-0">© <?=date('Y') . ' ' . $sitName?>.</p>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6">
              <ul class="p-0 d-flex justify-content-start justify-content-md-end text-start text-md-end m-0">
                <li><a href="index.php#">Terms of services</a></li>
                <li class="ms-3"><a href="index.php#">Privacy Policies</a></li>
                <li class="ms-3"><a href="index.php#">Cookies</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </footer>
    
    
    <script>
                var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?42658';
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url;
                var options = {
                "enabled":true,
                "chatButtonSetting":{
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "marginLeft": "0",
                    "marginRight": "20",
                    "marginBottom": "20",
                    "ctaIconWATI":false,
                    "position":"left"
                },
                "brandSetting":{
                    "brandName":"EagleWays Travel & Tours",
                    "brandSubTitle":"undefined",
                    "brandImg":"https://www.wati.io/wp-content/uploads/2023/04/Wati-logo.svg",
                    "welcomeText":"Hi there!\nHow can I help you?",
                    "messageText":"Hello, %0A I have a question about {{page_link}}",
                    "backgroundColor":"#00e785",
                    "ctaText":"Chat with us",
                    "borderRadius":"25",
                    "autoShow":false,
                    "phoneNumber":"234"
                }
                };
                s.onload = function() {
                    CreateWhatsappChatWidget(options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            </script>