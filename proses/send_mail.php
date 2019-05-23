<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use function Clue\StreamFilter\fun;

// Load Composer's autoloader
require '../vendor/autoload.php';
require 'config.php';


function SendMail($receiverMail, $receiverName, $mailSubject, $mailMessage)
{
    global $MailSetting;
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = $MailSetting['debug'];                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = $MailSetting['host'];                             // Specify main and backup SMTP servers
    $mail->SMTPAuth   = $MailSetting['smtpauth'];                                   // Enable SMTP authentication
    $mail->Username   = $MailSetting['username'];                     // SMTP username
    $mail->Password   = $MailSetting['password'];                               // SMTP password
    $mail->SMTPSecure = $MailSetting['secure'];                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = $MailSetting['port'];                                    // TCP port to connect to

    try {
        //Recipients
        $mail->setFrom($MailSetting['username'], $MailSetting['displayname']);
        $mail->addAddress($receiverMail, $receiverName);     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $mailSubject;
        $mail->Body    = $mailMessage;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
