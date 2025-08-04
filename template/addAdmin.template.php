 <?php
     $body = "
         <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Welcome to Ifind</title>

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
    </style>
</head>
<body>
    <div class='container'>

           <div class='header'>
              <img src='https://givas.org/assets/images/Givas.png' alt='Givas Logo' style='display: block; max-width: 120px; height: auto; margin: 0 auto;'>
        </div>
        
        <div class='content'>
            <h2>Yo! $name 😍</h2>
            

            <p>We are pleased to inform you that you have been granted Admin privileges in the Givas Community. As an Admin, you now have the ability to $privilege.</p><br><br>

            <p>You can log in to your admin dashboard using the credentials below:</p><br>
           
           <p><strong>Login Url:</strong> https://givas.org/admin/login</p><br>
           <p><strong>Email:</strong> $email</p><br>
           <p><strong>Password:</strong> $password</p><br>


            <p>If you have any questions or need assistance, feel free to reach out to our support team on [help@givas.org]</p><br>

            <p>We value your commitment to Givas Community and look forward to resolving this promptly so you can have full control of your dashboard</p><br>

            <p><strong>Welcome aboard!</strong></p><br><br>
            <p><strong>Best Regards</strong></p>
            <p><strong>Givas Team</strong></p>
        </div>
        <div class='footer'>
            <p>&copy; 2025 Givas Community. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
 ";
?>