<?php 
    require_once '../SwiftMailer/vendor/autoload.php';

    function sendCustomEmailAdminUser($userEmail, $adminEmail,$adminFirstName, $userTitle, $adminTitle, $userBody, $adminBody)
    {
         // Create the Transport
         $transport = (new Swift_SmtpTransport('smtp.hostinger.com', 465, 'ssl'))
              ->setUsername('help@givas.org')
              ->setPassword('Givas23#');
    
         $mailer = new Swift_Mailer($transport);
         // Create a message for user
         $userMessage = (new Swift_Message($userTitle))
              ->setFrom(['help@givas.org' => 'Givas'])
              ->setTo([$userEmail])
              ->setBody("")
              ->addPart($userBody, 'text/html');
         // Send the email to user
         $resultUser = $mailer->send($userMessage);
    
         // Create a message for admin
         $adminMessage = (new Swift_Message($adminTitle))
              ->setFrom(['help@givas.org' => 'Givas'])
              ->setTo([$adminEmail => $adminFirstName])
              ->setBody("")
              ->addPart($adminBody, 'text/html');
         // Send the email to admin
         $resultAdmin = $mailer->send($adminMessage);
    
         // Check if both emails were sent successfully
         if ($resultUser && $resultAdmin) {
              return true;
         } else {
              return false;
         }
    }
?>