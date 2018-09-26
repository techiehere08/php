							*******************
							*******************
							** Sending mail  **
							**   via SMTP    **
							** Server in php **
							*******************
							*******************
<?php

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';
{

$to_id = 'Reciever email id';

$subject =  'Your Subject';

$message = 'Your message';


$mail = new PHPMailer(true);


$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';

$mail->SMTPAuth = true;


$mail->Username = 'Your email id';

$mail->Password = 'your password';

$mail->SMTPSecure = 'tls';  

$mail->Port = 587;


$mail->setFrom('your email id', 'your name');

$mail->addAddress($to_id);

$mail->Subject = $subject;

$mail->Body = $message;


if(!$mail->send())

{

$error = "Mailer Error: " .$mail->ErrorInfo;

echo "<div class=display> '.$error.'  </div>";

}

else
{

echo " <div class=display> Message Sent </div>";

}


}


?>