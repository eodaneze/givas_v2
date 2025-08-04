<?php 
session_start();
require_once('../helper/sendMail.php');
require_once('../../inc/config/connection.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_REQUEST['title'];
    $message = $_REQUEST['message'];

    // Fetch all users from the users table
    $query = "SELECT * FROM user";  // Adjust `fullname` if your column is named differently
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_assoc($result)) {
            $email = $row['email'];
            $uname = $row['uname'];
            
            $fname = $row['fname'];
            $lname = $row['lname'];
            
            $fullName = $fname . ' ' . $lname;
            
            require_once('../../template/sendEmail.template.php');
            // Send email to each user
            $res = sendCustomEmail($email, $fullName, $title, $body);

            if(!$res){
                echo "Failed to send email.";
            }
        }

        echo "Email sent to all users successfully.";
    } else {
        echo "No users found.";
    }

    header('Location: ../send_mail'); // Redirect back to your form page
    exit;
}
?>
