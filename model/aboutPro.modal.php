<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
      /* Sidebar Modal */
      .sidebar-modal {
            position: fixed;
            top: 0;
            right: -100%; /* Initially hidden */
            width: 350px;
            height: 100%;
            background-color: #fff;
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.2);
            transition: right 0.4s ease-in-out;
            z-index: 1000;
            padding: 20px;
            overflow-y: auto;
        }

        /* Show Sidebar */
        .show-sidebar {
            right: 0;
        }

        /* Close Button */
        .close-btn {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            cursor: pointer;
            position: absolute;
            top: 15px;
            right: 20px;
        }

        /* Overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 999;
        }

        .show-overlay {
            display: block;
        }

        /* Content Inside Sidebar */
        .sidebar-content h2 {
            font-size: 24px;
            color: #07847f;
        }

        .sidebar-content p {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
        }
        ul li{
             margin-bottom: 10px;
             font-size: 14px;
        }
      
        .bx{
             color: #fe7f4c;
        }
        
</style>
<div class="overlay" id="overlay"></div>
    <div class="sidebar-modal" id="sidebar">
        <span class="close-btn" id="closeSidebar">&times;</span>
        <div class="sidebar-content">
            <h2>Givas Plan Features</h2>
            <p>The Pro Plan offers advanced features such as:</p>
           
            <h5>Registration Options</h5>
            <ul class="my-2">
                 <li><i class='bx bxs-badge-check'></i> 2-Phase Registration</li>
                 <li><i class='bx bxs-badge-check'></i> GIVAS – Start for $12</li>
                 <li><i class='bx bxs-badge-check'></i> GIVAS PRO – start for $30 (or $20 if upgrading from GIVAS)</li>
            </ul>
            <h5>Direct Registration</h5>
            <ul class="my-2">
                 <li><i class='bx bxs-badge-check'></i> Join GIVAS PRO instantly for $30 (includes a unique entry code).</li>
            </ul>
            <h5>Referral Rewards</h5>
            <ul class="my-2">
                 <li><i class='bx bxs-badge-check'></i> $30 Registration via Referral: Earn $15 instantly</li>
                 <li><i class='bx bxs-badge-check'></i> $12 Registration via Referral: Earn $2, plus $15 when they upgrade</li>
            </ul>
            <h5>Other Rules</h5>
            <ul class="my-2">
                 <li><i class='bx bxs-badge-check'></i> One GIVAS PRO account per email.</li>
                 <li><i class='bx bxs-badge-check'></i> Withdrawals: $30 minimum, available every Saturday</li>
            </ul>

           
            
        </div>
    </div>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const openSidebar = document.getElementById("openSidebar");
            const closeSidebar = document.getElementById("closeSidebar");
            const sidebar = document.getElementById("sidebar");
            const overlay = document.getElementById("overlay");

            // Open Sidebar
            openSidebar.addEventListener("click", function(event) {
                event.preventDefault();
                sidebar.classList.add("show-sidebar");
                overlay.classList.add("show-overlay");
            });

            // Close Sidebar
            closeSidebar.addEventListener("click", function() {
                sidebar.classList.remove("show-sidebar");
                overlay.classList.remove("show-overlay");
            });

            // Close when clicking outside
            overlay.addEventListener("click", function() {
                sidebar.classList.remove("show-sidebar");
                overlay.classList.remove("show-overlay");
            });
        });
    </script>