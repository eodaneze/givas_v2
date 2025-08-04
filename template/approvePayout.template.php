 <?php

    if($payment_option == 'bank'){
        $request_amount = $amount * 1600;
        $formatted_amount = number_format($request_amount, 2);

        $currency = 'NGN';

        $message = "
            <p>your Bank Account have been credited with $formatted_amount $currency</p>
        ";
    }else{
        $formatted_amount = number_format($amount, 2);
        $currency = 'USD';

         $message = "
            <p>your Wallet have been credited with $formatted_amount $currency</p>
        ";
    }
     $body = "
         <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Givas</title>

     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.7)), 
                        url('https://givas.org/assets/images/backgrounds/main-slider-2-2.jpg') no-repeat center center;
            background-size: cover;
            padding: 40px 20px;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }
        .header img {
            max-width: 120px;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        .content {
            padding: 20px;
        }
        .content h2 {
            color: #006666;
        }
        .content p {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }
        .footer {
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
          .social-icons a {
                margin: 0 8px;
                color: #555;
                font-size: 18px;
                text-decoration: none;
                transition: color 0.3s ease;
            }
            .social-icons a:hover {
                color: #006666;
            }
    </style>
    
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'>

</head>
<body>
    <div class='container'>

           <div class='header'>
              <img src='https://givas.org/assets/images/Givas.png' alt='Givas Logo' style='display: block; max-width: 120px; height: auto; margin: 0 auto;'>
        </div>
        
        <div class='content'>
            <h2>Congratulations $uname 💰💰</h2>
            

            <p>We are glad to inform you that your $payout_role payout request has been approved successfully and $message</p><br>

           
            <p><strong>Best Regards</strong></p>
            <p><strong>Givas Team</strong></p>
        </div>
        <div class='footer'>
            <p>&copy; 2025 Givas Community. All rights reserved.</p>
        </div>
         <div class='social-icons'>
                    <a href='https://www.facebook.com/share/1C4VgSN3L3/?mibextid=wwXIfr' target='_blank'><i class='fab fa-facebook'></i></a>
                    <a href='https://x.com/givas_org?s=21' target='_blank'><i class='fab fa-twitter'></i></a>
                    <a href='https://www.instagram.com/givas_org?igsh=NzBmdDQwN2N6b2t0&utm_source=qr' target='_blank'><i class='fab fa-instagram'></i></a>
                    <a href='https://linkedin.com' target='_blank'><i class='fab fa-linkedin'></i></a>
                    <a href='https://youtube.com/@givas_org?si=QAAjz9uuKwDN-xWW' target='_blank'><i class='fab fa-youtube'></i></a>
                    <a href='https://www.tiktok.com/@givas_org?_t=ZM-8u9VbUADvfj&_r=1' target='_blank'><i class='fab fa-tiktok'></i></a>
                </div>
    </div>
</body>
</html>
 ";
?>