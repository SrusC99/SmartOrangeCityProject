<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'PHPMailer\src\PHPMailer.php';
require 'PHPMailer\src\SMTP.php';
require 'PHPMailer\src\Exception.php';

function sendmail(string $mailTo = null, string $mailTitle = null, string $mailMsg = null) :bool
{
    
    $inputErrorMailTo = $mailTo == null || $mailTo == "" ? true : false;
    $inputErrorMailTitle = $mailTo == null || $mailTitle == "" ? true : false;
    $inputErrorMailMsg = $mailTo == null || $mailMsg == "" ? true : false;

    $inputError = $inputErrorMailTo || $inputErrorMailTitle || $inputErrorMailTitle;
   
    if ($inputError) {
        return false;
    } else {

       
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings        Simple Mail Transfer Protocol
                $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'smartorangecity@gmail.com';                     // SMTP username
                $mail->Password   = 'city@123';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                $mail->setFrom('smartorangecity@gmail.com', 'Smart Orange City');
            $mail->addAddress($mailTo);     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = $mailTitle;
            $mail->Body    = $mailMsg;
            $mail->AltBody = 'Alternate msg Body this is';

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
