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
        .course_image img{
             max-width: 100%;
             border-raduis: 8px;
             height: auto;
        }
        
        .webinar_url a{
             background-color: #de3a03ff; 
            color: #fff; 
            padding: 15px 20px; 
            text-decoration: none; 
            border-radius: 4px;

        }
       .login, .webinar_url{
           text-align: center;
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
                    🎉 Congratulations on successfully purchasing the <strong>$pname</strong> course on GIVAS!
                </p>
                
                <p>You can now access your course materials using the link below:.</p><br>

                <div class='login'>
                    👉 <a href='$download_url' target='_blank'>⬇️ Download your course</a>
                </div><br><br>
                
                <hr>
                 <h4>🎥 Join the Live Webinar</h4>
                 <p>As part of this course, you also have access to our upcoming webinar session. Join us live and connect with experts and fellow learners.</p><br>

                 <div class='webinar_url'>
                    👉 <a href='$webinar_url' target='_blank'>Join the webinar</a>
                </div><br>
                
                <div class='course_image'>
                    <img src='$product_image' alt='$pname' >
                
                </div>

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
