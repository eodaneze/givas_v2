<?php
$body = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Password Reset</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            font-size: 24px;
            text-align: center;
        }
        p {
            color: #555;
            font-size: 16px;
            line-height: 1.5;
        }
        .reset-link {
            display: inline-block;
            background-color: #006666;
            color: #fff;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 16px;
            text-align: center;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            text-align: center;
            color: #777;
        }
        .link-1{
              color: blue;
        }
    </style>
</head>
<body>
    <div class='email-container'>
        
        <p>Hello Awesome $uname 😊,</p><br>
        <p>You requested for a password reset and we have generated a link specially for you to reset your password. Click on the reset button below and reset your password</p>
        <p style='text-align: center;'>
            <a href='$link' class='reset-link' style='color: white'>Reset Your Password</a>
        </p><br><br>

        <p>if the above button is not clicking, you can copy the link below and paste on your browser: </p><br>
        <a style='border-bottom: 1px solid #ccc; padding-bottom: 10px' href='' class='link-1'>$link</a><br><br>
        
        <i>This email was sent to you because you requested to change your password, if you're not aware of this, kindly know that someone is attempting to reset your account password. Kindly ignore and your account password won't be changed</i>
        <p>For security reasons, the reset link will expire in 30 minutes.</p>
        <div class='footer'>
            <p>&copy; 2025 Givas Community. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
";
?>
