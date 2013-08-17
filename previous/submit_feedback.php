<?php

function errorHandler( $errno, $errstr, $errfile, $errline, $errcontext)
{
  echo "Error No. : ".$errno."<br />";
  echo "Error String. : ".$errstr."<br />";
  echo "Error file : ".$errfile."<br />";
  echo "Error line. : ".$errline."<br />";
  echo "Error Context. : ".$errcontext."<br />";
}

echo "haha <br/>";

set_error_handler('errorHandler');
date_default_timezone_set("Asia/Calcutta");

echo "haha <br/>";

$to = "seri@iitk.ac.in";   // Recipients email ID
$name="SPO, IIT Kanpur"; // Recipient's name
$sr_name = $_POST["sr_name"];		// sender's name;
$sr_email = $_POST["sr_email"];  // senders ID; reply to this email ID
$sr_subject = "Feedback from SPO website : ".$_POST["sr_subject"];
$sr_message = $_POST["sr_message"];

echo "haha <br/>";


require("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();

$mail->IsSMTP(); // send via SMTP

$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "sarveshseri@gmail.com";  // GMAIL username
$mail->Password   = "andaatma";            // GMAIL password

/*
$mail->Host       = "smtp.cc.iitk.ac.in"; // sets the SMTP server
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "seri@iitk.ac.in"; // SMTP account username
$mail->Password   = "aNdaaA";        // SMTP account password

*/

$mail->SetFrom("sarveshseri@gmail.com", $sr_name);
//$mail->From = $sr_email;
//$mail->FromName = $sr_name;
$mail->AddAddress($to,$name);
$mail->AddReplyTo($sr_email,$sr_name);
$mail->WordWrap = 50; // set word wrap
//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
//$mail->IsHTML(false); // send as HTML
$mail->Subject = $sr_subject;

$mail->Body = $sr_message;

$mail->Send();

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}


//header("Location:feedback.php");

?>