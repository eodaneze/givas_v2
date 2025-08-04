<?php
$body = "
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Givas Email</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap');
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body {
        font-family: 'Inter', sans-serif;
        font-weight: 300;
        background-color: #f4f4f4;
        color: #333;
        padding: 0;
        margin: 0;
      }
      .container {
        width: 80%;
        margin: auto;
        background-color: #ffffff;
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      .btn {
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        color: #ffffff;
        background: #006666;
        padding: 15px 40px;
        text-decoration: none;
        border: none;
        display: inline-block;
      }
      .btn:hover {
        background: #006666;
        text-decoration: none;
      }
      .btn-2 {
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        color: #fff;
        background: #FE6A49;
        padding: 15px 40px;
        text-decoration: none;
        border: none;
        display: inline-block;
      }
      .btn:hover {
        background: ##FE6A49;
        text-decoration: none;
      }
      .header {
        height: 151px;
        width: 100%;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        background-image: url('https://i.postimg.cc/HWtjDYWB/bg-header-2.png');
        background-size: 677px;
      }
      .main {
        position: relative;
      }
      h2 {
        font-size: 28px;
        line-height: 28px;
        margin: 28px 0;
      }
      h3 {
        font-size: 18px;
        margin-top: 54px;
        margin-bottom: 20px;
      }
      p {
        font-size: 14px;
        line-height: 1.5;
      }
       
    </style>
  </head>
  <body>
    <section class='main'>
     
      <div class='content container'>
        <h3>Yo! $fullName 😃</h3>
        <p>
          We are pleased to inform you that your $$amount registration deposit to the Givas Community has been successfully received and confirmed.
        </p>
        <br />
        <p>As part of the registration process, we’ve provided you with a coupon code that you’ll need to complete your registration and also a coupon code to upgrade to givas pro plan on your dashboard. Please find your coupon code below:</p><br /><br/>


        <button class='btn'>$coupon_code</button><br /><br />

        <p><i>Below is the coupon code to upgrade to pro plan: </i></p></br><br />
        <button class='btn-2'>$pro_coupon_code</button><br /><br />

        <p>Thank you for joining the Givas Community. We’re excited to have you onboard and look forward to your participation.</p><br />
        <p>If you have any questions or need further assistance, feel free to reach out to us at [suppor@givas.org]</p>

        <br /><br />
        <p>
          Warmest Regards,<br />
          <a href=''>Givas Team</a><br />
        </p>
        <br /><br />
        <br /><br />
      </div>
    </section>
  </body>
</html>
";

?>
