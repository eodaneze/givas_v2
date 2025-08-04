<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upgrade Modal</title>
    <style>
        body {
            /*font-family: Arial, sans-serif;*/
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f4f8;
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 350px;
            position: relative;
        }
        .modal-content h2 {
            font-weight: bold;
        }
        .modal-content span {
            font-size: 40px;
        }
        .modal-content p {
            color: #666;
        }
        .modal-content .upgrade-btn {
            background: #07847f;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .modal-content .close {
            position: absolute;
            top: 10px;
            right: 15px;
            cursor: pointer;
            font-size: 20px;
        }
        .modal-content .free-option {
            margin-top: 10px;
            color: #174b5a;
            cursor: pointer;
        }
        h2 span{
            color: #07847f;
            font-size: 15px;
        }
         .modal-content .close {
            position: absolute;
            top: 10px;
            right: 15px;
            cursor: pointer;
            font-size: 20px;
            color: #555;
            font-weight: bold;
            background: #eee;
            width: 25px;
            height: 25px;
            line-height: 25px;
            border-radius: 50%;
            text-align: center;
            transition: background 0.3s, color 0.3s;
        }
        .modal-content .close:hover {
            background: #d9534f;
            color: white;
        }
    </style>
</head>
<body>
    <!--<button class="upgrade">Upgrade to Pro</button>-->
    <div class="modal" id="upgradeModal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <span>&#128075;</span>
            <h2>Welcome to <br> <span class="upgrade-title" style="font-size: 24px">Givas Community</span></h2>
            <p>Upgrade to givas pro plan to boost your earnings</p>
            <button class="upgrade-btn">Upgrade Now</button>
            <p class="free-option">Continue using for free</p>
        </div>
    </div>
    <script>
        document.querySelector(".upgrade").addEventListener("click", function() {
            document.getElementById("upgradeModal").style.display = "flex";
        });
        document.querySelector(".close").addEventListener("click", function() {
            document.getElementById("upgradeModal").style.display = "none";
        });
    </script>
</body>
</html>
