<?php
require_once "vendor/autoload.php";

$to = 'motechkenya@gmail.com'; // Put in your email address here
$subject = "MotechKenya Contact Us Form"; // The default subject. Will appear by default in all messages. Change this if you want.

// User info (DO NOT EDIT!)
$name = stripslashes($_REQUEST['name']); // sender's name
$email 	= stripslashes($_REQUEST['email']); // sender's email
$phone = stripslashes($_REQUEST['phone']);
$message = stripslashes($_REQUEST['message']);






function send($from, $name, $phone, $subject, $body){
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;
        $mail->isSMTP();
        $mail->Host       = 'smtp.sendgrid.net';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'apikey';
        $mail->Password   = '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';
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('hosea@digitalmold.co.ke', $name);
        $mail->addAddress('motechkenya@gmail.com', 'Motech Kenya');
        $mail->addCC('kiprutohosea05@gmail.com');
        $mail->addBCC('ochiengian07@gmail.com');

        // The message you will receive in your mailbox
        // Each parts are commented to help you understand what it does exaclty.
        // YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
        $msg = "Name: " . $name . "<br>"; // add sender's name to the message
        $msg .= "E-mail: " . $from . "<br>"; // add sender's email to the message
        $msg .= "Phone No: " . $phone . "<br>"; // add sender's phone to the message
        $msg .= "Message:<br>"  .  $body . "<br>"; // add sender's checkboxes to the message

        // Content
        $mail->isHTML(true);
        $mail->Subject = "MotechKenya Contact Us Form - " . $subject;
        $mail->Body    = $msg;

        $mail->send();
        return ['success'=>'Your message has been sent successfully'];
    }catch (Exception $exception){
        return ['danger'=>"Message could not be sent."];
    }
}


/*
$mail = @mail($to, $subject, $msg, "From:" .$email); // This command sends the e-mail to the e-mail address contained in the $to variable



if ($mail) {
    header("Location:index.html");
} else {
    echo 'Message could not be sent!'; //This is the message that will be shown when an error occured: the message was not send
}*/

?>