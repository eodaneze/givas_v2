<?php
  $title = "Online Money Guaranteed";
   require_once('./home_header.php');

?>  
<style>
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
  <body>  
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php
        require_once('./home_navbar.php');
      ?>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
           <?php 
              require_once('./sidebar.php');
           ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <?php require_once('./banner.php') ?>
          <div class="container-fluid">
                 <div class="header">
                        <h1>Online Money<br>Guaranteed Course </h1>
                        <p>Instruction: Ensure you don't share the link with anyone or else your access to it will be revoked.</p>
                        <a href="https://t.me/your-telegram-link" class="telegram-link">CLICK HERE TO JOIN THE AIM MILLIONAIRE TELEGRAM COMMUNITY.</a>
                        <span style="color:red;">🔻 Join The TELEGRAM Now</span>
                        </div>

                        <!-- Section 1 -->
                         <?php 
                           $omg_result = mysqli_query($conn, "SELECT * FROM omg_course");

                           $num = 1;
                           while($row = mysqli_fetch_assoc($omg_result)){
                               $title = $row['title'];
                               $drive_link = $row['drive_link'];

                               ?>
                                    <div class="section-title"><?=$num++?>. <?=$title?></div>
                                    <div class="video-wrapper">
                                        <div class="video-card" onclick="loadVideo(this, '<?=$drive_link?>')">
                                            <img src="https://via.placeholder.com/720x400?text=Welcome+Message"/>
                                            <div class="play-button"></div>
                                        </div>
                                    </div>
                               
                               <?php
                           }
                         ?>

                       
          </div>
         
        </div>

       

    

        

        <script src="./assets/js/main.js"></script>
       <?php
          require_once('./footer.php');
          require_once('./sweet-alert.php')
         ?>
      </div>
    </div>
   <?php 
     require_once('./script.php');
     require_once('./model/myproduct_modal.php');
   ?>

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

