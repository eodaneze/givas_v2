<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serlzo Welcome Modal</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->
    <style>
        /* Modal Background */
        .modal-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        /* Modal Content */
        .modal-content {
            background: white;
            width: 90%;
            max-width: 700px;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            position: relative;
            left: 8rem;
            animation: fadeIn 0.5s ease-in-out;
        }
       

        /* Close Button */
        .close-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
            background: #fff;
            color: black;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .close-btn:hover {
            background: red;
            color: white;
        }

        /* Modal Header */
        .modal-header {
            font-size: 22px;
            font-weight: bold;
        }

        /* Button Styles */
        .activate-btn {
            background: #162D5A;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        .activate-btn:hover {
            background: #0f1f3e;
        }

        .telegram-link {
            display: block;
            margin-top: 10px;
            color: #162D5A;
            text-decoration: none;
        }

        .telegram-link:hover {
            text-decoration: underline;
        }
         /* Waving Hand Animation */
         .wave-hand {
            font-size: 80px;
            display: inline-block;
            animation: wave 1s infinite alternate ease-in-out;
        }
        .title-1{
             font-size: 40px;
             font-weight: bold;
        }

        @keyframes wave {
            0% { transform: rotate(0deg); }
            25% { transform: rotate(15deg); }
            50% { transform: rotate(0deg); }
            75% { transform: rotate(-15deg); }
            100% { transform: rotate(0deg); }
        }

        /* Keyframe Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
           
        }
         @media(max-width: 768px) {
            .modal-content {
                width: 90%;
                left: 0;
            }
             .title-1{
                 font-size: 25px;;
            }
            .wave-hand{
                font-size: 45px;
            }
            .modal-body p{
                 font-size: 12px;
            }
            .close-btn{
                 font-size: 20px;
            }
           
        }
    </style>
</head>
<body>

    <div class="modal-container" id="welcomeModal">
        <div class="modal-content">
            <button class="close-btn" onclick="closeModal()">X</button>
            <div class="modal-headerss">
                    <span class="wave-hand">👋</span>
                    <h5 class="modal-title title-1" id="welcomeModalLabel">Welcome to <span style="color: #fe7f4c;" class="fw-bold">GIVAS</span></h5>
            </div>
            <div class="modal-body">
                <p>You're super welcome, kindly watch this demo video below to know everything about the Givas Community.</p>
                <!-- Embedded YouTube Video -->
                <iframe width="100%" height="350" src="https://www.youtube.com/embed/ugTJ7ehwapA" frameborder="0" allowfullscreen></iframe>

                <a href="#" class="telegram-link">Join Telegram Channel</a>
            </div>

        </div>
    </div>

    <script>
        function closeModal() {
            document.getElementById("welcomeModal").style.display = "none";
        }
    </script>

</body>
</html>
