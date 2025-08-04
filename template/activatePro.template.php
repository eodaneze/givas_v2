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
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #MultiVendor;
            color: #ffffff;
            padding: 20px;
            border-radius: 8px 8px 0 0;
        }
        .header h1 {
            margin: 0;
        }
        .content {
            padding: 5px;
        }
        .content h2 {
            color: #006666;
        }
        .content p {
            font-size: 16px;
            color: #555;
        }
        ul li,   ul ol {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }
        .verification-code {
            font-size: 24px;
            color: #006666;
            margin: 20px 0;
            font-weight: bold;
        }
        .footer {
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
        .ref_link{
           text-align: center;
        }
        .plan{
              color: #006666;
            }
    </style>
</head>
<body>
    <div class='container'>
        
        <div class='content'>
            <h2>Yo! $uname 😊</h2><br>

            

             <p>Congratulations! Your <strong class='plan'>Givas Pro Plan</strong> has been successfully activated. You can now start earning more by inviting people into the Givas community.</p>
            <p>Your referral link is provided below. Share it with friends and start growing your network:</p>
            <div clsss='ref_link'><i>$refLink</i></div>
           

           <p>Best regards</p><br/>
           <p>Givas Team</p>
        </div>
        <div class='footer'>
            <p>&copy; 2025 Givas. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
 ";
?>