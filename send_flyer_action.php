<?php
include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";
require("config.php");	 
require "lib/phpmailer/MailClass.inc";	


$title = $_POST['title'];
$email = $_POST['email'];
$text = $_POST['text'];

$mailer = new FreakMailer();

$mailer->IsHTML(true);

 
// Set the subject
$mailer->Subject = $title;
 
// Body

$mailer->Body = "<h1>{$text} </p>";
 
// Add an address to send to.
$mailer->AddAddress($email, 'Yang');
 
if(!$mailer->Send())
{
    
}
else
{
    
}
$mailer->ClearAddresses();
$mailer->ClearAttachments();	










header("Location: manage.php");


?>