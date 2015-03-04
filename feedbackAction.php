<?php
/*
 * Adds new item from form data.
 */

require "../differentgifts/includes/defs.php";
require("../differentgifts/config.php");	 
require "../differentgifts/lib/phpmailer/MailClass.inc";	


/*
$form_vars = array();
foreach ($_POST as $var => $value)
    $form_vars[$var] = clean($value);

if (empty($form_vars["username"]))
   $errors .= "\n<br>The name cannot be blank.";
   

	
	*/
 
$name = $_POST['name'];
$comment = $_POST['comment'];



$errors = "";

/*
if (!ereg("^[0-9]{4}$", $password))
    $errors .= "The password must contain four digits.";



	if (!ereg("^[a-zA-Z0-9_]+@(([a-zA-Z0-9_]+).)+[a-zA-Z]+$", $email))
     $errors .= "The email address has the wrong form.";*/


date_default_timezone_set('australia/brisbane');
$time = date("Y-m-d h:i:sa");

   $created = addFeedback($name, $comment, $time);












$email = 'yang.liu9@griffithuni.edu.au';



$mailer2 = new FreakMailer();
 
// Set the subject
$mailer2->Subject = 'new feedback message';
 
// Body
$mailer2->Body = $name . ' said: ' . $comment;
 
// Add an address to send to.
$mailer2->AddAddress($email, $userName);

 
if(!$mailer2->Send())
{
  $mailer2->ClearAddresses();
  $mailer2->ClearAttachments();
  $errors .= "comments is saved, but there is an error occurred while receiving your an email.";
  
  header("Location: http://www.nanjinglove.com/wordpress/index.php?error=$errors");
  exit;
}
else
{
   
}
$mailer2->ClearAddresses();
$mailer2->ClearAttachments();
















header("Location: http://www.nanjinglove.com/wordpress"); 
exit;

?>