<?php
/*
 * Adds new item from form data.
 */
include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";
require("config.php");	 
require "lib/phpmailer/MailClass.inc";	



 

$email = $_GET['email'];



$errors = "";






//$verify_url = "verify-user.php";
$safe_email = urlencode($email);



$mailer2 = new FreakMailer();
 
// Set the subject
$mailer2->Subject = 'Hi dear customer, this is a mail from my website';
 
// Body
$mailer2->Body = 'your feedback is important.';
 
// Add an address to send to.
$mailer2->AddAddress($email, 'Dear Customer');

 
if(!$mailer2->Send())
{
  $mailer2->ClearAddresses();
  $mailer2->ClearAttachments();
  $errors = "there is an error occurred while sending your an email.";
  
  header("Location: index.php");
  exit;
}
else
{
   $mailer2->ClearAddresses();
$mailer2->ClearAttachments();
header("Location: index.php"); 
exit;
}




?>