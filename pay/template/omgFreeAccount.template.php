<?php
$body = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Welcome to Givas</title>
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
        table{
          border: 1px solid #ccc; 
          border-collapse: collapse
        }
        .login a{
            background-color: #006666; 
            color: #fff; 
            padding: 15px 20px; 
            text-decoration: none; 
            border-radius: 4px;
            }
            
        .img-fluid {
            max-width: 100%;
            height: auto;
            }
      
    </style>
</head>
<body>
    <div class='container'>
         <div class='header'>
              <img src='https://givas.org/assets/images/Givas.png' alt='Givas Logo' style='display: block; max-width: 120px; height: auto; margin: 0 auto;'>
        </div>
        
        <div class='content'>
             <h2>Hello! $customer_fname 🥰🥰</h2>
                <p>
                    🎉 Congratulations on successfully purchasing the <strong>Online Money Guaranteed (OMG)</strong> course on GIVAS!
                </p>
                
                <p>As a bonus for your commitment to learning and growth, you’ve automatically been rewarded with a <strong>FREE affiliate account</strong> on GIVAS.</p>

                <p>With your account, you can start promoting our courses and earning commissions right away. Your login credentials are below:</p>

                <table cellpadding='10'>
                    <tr>
                        <td><strong>Username:</strong></td>
                        <td>$customer_fname</td>
                    </tr>
                    <tr>
                        <td><strong>Password:</strong></td>
                        <td>$customer_password</td>
                    </tr>
                </table>
                
                <p>Once You login, please nativigate to the settings on your dashboard as shown in the screenshort below and click on security to update your password</p>

                <div class'screenshort'>
                     <img src='https://givas.org/online-money-guaranteed/steps.png' class='img-fluid'/><br> 
                </div>

                <p>👉 Click below to log in and start promoting:</p><br>

                <p class='login'>
                    <a href='$login_link'>Login to Dashboard</a>
                </p>

                <br />
                <p>
                  <strong>To your continued success</strong><br />
                <a href=''>Givas Team</a><br />
                <a href='mailto:help@givas.org'>help@givas.org</a><br />
                </p>
                <br /><br />
                


           
        </div>
        <div class='footer'>
            <p>&copy; 2025 Givas Community. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
";
?>
