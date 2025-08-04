<?php
$userBody = "
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
        <h3>Yo! $userEmail 😃</h3>
        <p>
          Welcome to <b>Givas</b>! Thank you for your payment of $$amount for $no_account givas account. We are pleased to inform you that your payment has been successfully received.
        </p>
        <br />
        <p>As soon as the payment confirmation is processed, you will receive your unique coupon code that will allow you to complete your registration for Givas. This confirmation will be sent to you shortly.</p><br />

        <p>Thank you for your patience, and we look forward to having you join the Givas community!</p>
        <p>If you have any questions, please feel free to reach out.</p>

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
$adminBody = "
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
      a.btn{
        font-size: 13px;
        color: white;
      }
    </style>
  </head>
  <body>
    <section class='main'>
     
      <div class='content container'>
        <h3>Yo! $adminFirstName 😃</h3>
        <p>
           A user (with the email: $userEmail) has successfully made a deposit of $$amount for $no_account account registration in Givas. Please log in to your admin panel to confirm the payment. Once confirmed, the user will receive their unique coupon code to complete their registration.
        </p><br /><br />

        <a class='btn' href='../inc/$target_file' download=''>Download Payment Proof</a>

        <br /><br /><br />
        <p>Thank you for your prompt attention to this matter.</p><br />

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
