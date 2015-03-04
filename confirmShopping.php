 <?php
/* 
 * Home page of PM database search example, using Smarty templates. 
 * BAD STYLE: Does not sanitise user input.
 */
include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";
require "config.php";	 
require "lib/phpmailer/MailClass.inc";	




$mailer2 = new FreakMailer();
 
// Set the subject
$mailer2->Subject = 'new shopping requirement';
 
// Body
$mailer2->Body = $username . 'yo, there is a customer want to buy something';
 
// Add an address to send to.
$mailer2->AddAddress('yang.liu9@griffithuni.edu.au', 'you');
$mailer2->AddCC('ly_musictt@hotmail.com', 'yo');
 
if(!$mailer2->Send())
{
  
}
else
{
   
}
$mailer2->ClearAddresses();
$mailer2->ClearAttachments();


$smarty = new Smarty;
$smarty->display("confirmShopping.tpl");
?>