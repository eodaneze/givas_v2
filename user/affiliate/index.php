<?php
  $title = "Payment";
   require_once('./home_header.php');
  require_once('./market-place.php')
?>  

<style>
      @media (max-width:700px) {
        .all-payment-right-content {
            margin: 0 30px;
        }
    }
</style>

  <body>  
   
    <nav class="pay-nav">
        <div class="pay-nav-content">
            <img width="50" src="./assets/images/Givas.png" alt="">
        </div>
    </nav>

    <section class="all-payment">
        <div class="all-payment-content">
            <div class="all-payment-left">
                <img src="./assets/images/pay1.jpg" alt="">
            </div>
            <div class="all-payment-right">
                
                <div class="all-payment-right-content">
                 <form action="">
                     <div id="steps">
                           <!-- first step -->
                       <div class="form-step active">
                        <h5>80% Complete</h5>
                        <div class="outer-line">
                            <div class="inner-line"></div>
                        </div>
                <div class="payment-details pt-5">
                    <h1 class="fs-2">Payment Details</h1>
                    <p>Complete your details by providing your payment details</p>
                    
                    <div class="payment-input py-4">
                            <label for="fullname">Fullname</label>
                            <input type="text" class="p-3 form-control" placeholder="Fullname">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="tel" class="p-3" placeholder="Phone Number">
                            <label for="email">Email Address</label>
                            <input type="email" class="p-3" placeholder="Email Address">
                            <label for="country">Country</label>
                            <select class="p-3" name="" id="">
                                <option value="" disabled selected>Select Country....</option>
                                <option value="">Nigeria</option>
                                <option value="">Benin</option>
                                <option value="">Burkina Faso</option>
                                <option value="">Cameroon</option>
                                <option value="">Chad</option>
                                <option value="">Congo</option>
                                <option value="">Cote d'ivoire</option>
                                <option value="">Gambia</option>
                                <option value="">Ghana</option>
                                <option value="">Guinea-Bissau</option>
                                <option value="">Kenya</option>
                                <option value="">Mali</option>
                                <option value="">Niger</option>
                                <option value="">Rwanda</option>
                                <option value="">Senegal</option>
                                <option value="">South Africa</option>
                                <option value="">Tanzania</option>
                                <option value="">Uganda</option>
                                <option value="">Zambia</option>
                            </select>
                            <div class="pay-next-cta">
                                <button type="button" class="accept-cta mb-2" onclick="changeStep(1)">Next</button>
                                <p><i class="fa fa-lock"></i>Payments are secured and encrypted</p>
                            </div>
                            </div>
                            </div>
                            </div>
                            <!-- end of first step -->

                            <!-- second step -->
                            <div class="form-step">
                            <h5>90% Complete</h5>
                                <div class="outer-line2">
                                    <div class="inner-line2"></div>
                                </div>
                                <div class="payment-details pt-5">
                                    <h1 class="fs-2">Payment Method</h1>
                                    <p>Choose any of the options as your Payment Method</p>

                                    <div class="pay-input">
                                    <div class="pay-select">
                                    <p><input type="radio" name="myRadio" id="option-1"></p>
                                        <label for="option-1"></label>
                                   </div>
                                   <h5>PayStack</h5>
                               </div>
                              <div class="pay-input">
                                   <div class="pay-select">
                                        <p><input type="radio" name="myRadio" id="option-2"></p>
                                           <label for="option-2"></label>
                                      </div>
                                      <h5>FlutterWave</h5>
                                 </div>
                                 <div class="pay-input">
                                      <div class="pay-select">
                                           <p><input type="radio" name="myRadio" id="option-3"></p>
                                           <label for="option-3"></label>
                                     </div>
                                     <h5>PayPal</h5>
                                </div>
                                <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                <div class="pay-cancel-cta">
                                    <button type="button" class="accept-cta">Pay</button>
                                    <button type="button" class="cancel-cta" onclick="changeStep(-1)">Back</button>
                                </div>
                            </div>
                            </div>
                            <!-- end of second step -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

  

  </body>
</html>

