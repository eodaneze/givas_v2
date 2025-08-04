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
            <h2>Dear $uname 😍</h2>
            

            <p>Thank you for submitting your verification document to Givas Community. Unfortunately, after a thorough review, we regret to inform you that your document did not meet the required standards for approval.</p>

            <h2>Reasons for Rejection:</h2>
            <p>$message</p>

            <p>To proceed with your account verification, we kindly request that you upload a new document that meets the requirements outlined in our guidelines. Please ensure the following:</p>
            <ol>
               <li>The document is complete and clearly legible</li> <br>
               <li>The document matches the type specified in the verification process</li> <br>
               <li>It is uploaded in an acceptable format</li>
            </ol><br>


            <p>If you have any questions or need assistance with the re-upload process, please don’t hesitate to contact us at [help@givas.org]</p><br>

            <p>We value your commitment to Givas Community and look forward to resolving this promptly so you can have full control of your dashboard</p><br>

            <p>Thank you for your cooperation.</p>
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