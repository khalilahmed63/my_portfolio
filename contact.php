<?php


session_start();
// date_default_timezone_set("Asia/Karachi");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
      
if (isset($_REQUEST['send'])) {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
  		

    ////////////// php mailer code start

    $mail = new PHPMailer();

    $mail->isSMTP();
    //Enable SMTP debugging

    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->SMTPDebug = 4;

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'khalilahmed786su@gmail.com';
  

    //Password to use for SMTP authentication
    $mail->Password = 'kmlylmhdmpalvaao';

    //Set who the message is to be sent from
    $mail->setFrom('khalilahmed786su@gmail.com', 'My Portfolio', 0);

    //Set an alternative reply-to address
    $mail->addReplyTo('khalilahmed786su@gmail.com', 'Khalil Ahmed');

    //Set who the message is to be sent to
    $mail->addAddress('panhwarkhalilahmed@gmail.com', "Reciever");
    // $mail->addCC('$cc','name');
    // $mail->addBCC('$bcc','name');

    //Set the subject linew
    $mail->Subject = "Message From my Portfolio";

    //Read an HTML message body
    //$mail->isHTML();
   


        // print_r($_SESSION['user']);
        $mail->msgHTML(	
            " Name    : $name <br/>".				
             "Email   : $email<br/>".		
             "subject : $subject <br/>".
             "Message : $message <br/>".
             "<br>".			
             "<br>"
                );

    
    //Attach an image file (optional)
    // $mail->addAttachment($image_name ,"$image_name");

    //send the message, check for errors
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    
    } else {
        ?>
				<script type="text/javascript">
					
					window.location.href = 'index.php?msg=Message Sent Successfully'
				</script>
				<?php
        echo '<center><h1>Congrats Your Email is Sent :)</h1></center>';
        // header("location:index.php"); 
    }     
    ////////////// php mailer code end


		

}
else{
    header("location:index.php"); 
}


?>