<?php
require_once '../SwiftMailer/vendor/autoload.php';
function sendCustomEmail($email, $uname, $title, $body)
{
    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.hostinger.com', 465, 'ssl'))
        ->setUsername('help@givas.org')
        ->setPassword('Givas23#');

    $mailer = new Swift_Mailer($transport);
    // Create a message
    $message = (new Swift_Message($title))
        ->setFrom(['help@givas.org' => 'Givas'])
        ->setTo([$email => $uname])
        ->setBody("")
        ->addPart($body, 'text/html');
    // Send the email
    $result = $mailer->send($message);
    return $result;
}
