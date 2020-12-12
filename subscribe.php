<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);


if(isset($_POST['submit'])){
	$email = $_POST['email'];

try {
    $mail->isSMTP();                                           
    //$mail->Host     = 'smtp.gmail.com';                     
    $mail->Host       = 'localhost';                     
	$mail->SMTPAuth = false; 
	$mail->SMTPSecure = false;
	$mail->SMTPAutoTLS = false;	
    $mail->Username   = 'help@walkinappindia.com';                     
    $mail->Password   = 'Walkin@123';                               
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          
    //$mail->Port       = 25;                                    

    $mail->setFrom('help@walkinappindia.com', 'WalkIn App Admin');
    $mail->addAddress('help@walkinappindia.com', 'WalkIn App Admin');      


    $mail->isHTML(true);                                   
    $mail->Subject = $subject;
	// Compose a simple HTML email message
	$message = '<html><body>';
	$message .= '<p style="color:#2D3954;font-size:18px;">Hi WalkIn Admin,</p>';
	$message .= '<p style="color:#2D3954;font-size:16px;">You got a Subscribe Notification from one of your website visitors,</p>';
	$message .= '<p style="color:#2D3954;font-size:18px;"><u>Contact Mail Address:</u></p>';
	$message .= '<p style="color:#2D3954;font-size:16px;">'.$email.'</p>';
	$message .= '<p style="color:#2D3954;font-size:18px;">Best Regards,</p>';
	$message .= '<p style="color:#2D3954;font-size:16px;">The WalkIn Team.</p>';
	$message .= '</body></html>';
	
    $mail->Body    = $message;
    $mail->AltBody = $message;
  
    $mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
<script type="text/javascript">

   <!--

   window.location = "http://walkinappindia.com/"

   //-->

</script>