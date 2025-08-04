<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Money Guaranteed Course </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #fff;
      font-family: Arial, sans-serif;
    }
    .header {
      text-align: center;
      padding: 30px 15px 10px;
    }
    .header h1 {
      font-weight: bold;
    }
    .header p {
      color: red;
      font-size: 14px;
    }
    .telegram-link {
      color: blue;
      font-weight: bold;
      display: block;
      margin: 10px auto;
    }
    .section-title {
      background-color: #006666;
      color: white;
      padding: 10px;
      margin-top: 30px;
      text-align: center;
      font-weight: bold;
    }

    .video-wrapper {
      display: flex;
      justify-content: center;
      background: linear-gradient(180deg, #ffffff, #000000);
      padding: 15px;
      position: relative;
    }

    .video-card {
      position: relative;
      width: 100%;
      max-width: 720px;
      height: 400px;
      background-color: #000;
      cursor: pointer;
    }

    .video-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .play-button {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 80px;
      height: 80px;
      background-color: rgba(255, 255, 255, 0.7);
      border-radius: 50%;
      transform: translate(-50%, -50%);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background 0.3s ease;
    }

    .play-button:hover {
      background-color: rgba(255, 255, 255, 0.9);
    }

    .play-button::before {
      content: "";
      display: inline-block;
      border-style: solid;
      border-width: 15px 0 15px 25px;
      border-color: transparent transparent transparent #000;
      margin-left: 5px;
    }

    iframe {
      width: 100%;
      height: 100%;
      border: none;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="header">
      <h1>Online Money<br>Guaranteed Course </h1>
      <p>Instruction: Ensure you don't share the link with anyone or else your access to it will be revoked.</p>
      <a href="https://t.me/your-telegram-link" class="telegram-link">CLICK HERE TO JOIN THE AIM MILLIONAIRE TELEGRAM COMMUNITY.</a>
      <span style="color:red;">🔻 Join The TELEGRAM Now</span>
    </div>

    <!-- Section 1 -->
    <div class="section-title">1. Welcome Message</div>
    <div class="video-wrapper">
      <div class="video-card" onclick="loadVideo(this, '17olIw2oY_bTSfRa3RcZv0fWfHCA48kpY')">
        <img src="https://via.placeholder.com/720x400?text=Welcome+Message" alt="Video preview" />
        <div class="play-button"></div>
      </div>
    </div>

    <!-- Section 2 -->
    <div class="section-title">2. How To Use The Training</div>
    <div class="video-wrapper">
      <div class="video-card" onclick="loadVideo(this, '1xV3qccQOUPRx9FNtpwoH9fjjGcxrpJtB')">
        <img src="https://via.placeholder.com/720x400?text=How+To+Use+The+Training" alt="Video preview" />
        <div class="play-button"></div>
      </div>
    </div>

    <!-- Add more sections as needed -->

  </div>

  <script>
    function loadVideo(container, fileId) {
      const iframe = document.createElement('iframe');
      iframe.src = `https://drive.google.com/file/d/${fileId}/preview`;
      iframe.allowFullscreen = true;
      container.innerHTML = '';
      container.appendChild(iframe);
    }
  </script>

</body>
</html>
