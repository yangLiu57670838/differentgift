<?php
/*
 * Adds new item from form data.
 */
include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";
require("config.php");	 
require "lib/phpmailer/MailClass.inc";	


/*
$form_vars = array();
foreach ($_POST as $var => $value)
    $form_vars[$var] = clean($value);

if (empty($form_vars["username"]))
   $errors .= "\n<br>The name cannot be blank.";
   

	
	*/
 
$userName = $_GET['Uname'];
$email = $_GET['email'];
$password = $_GET['password'];
$phone = $_GET['phone'];
$postCode = $_GET['postCode']; 



$errors = "";

/*
if (!ereg("^[0-9]{4}$", $password))
    $errors .= "The password must contain four digits.";



	if (!ereg("^[a-zA-Z0-9_]+@(([a-zA-Z0-9_]+).)+[a-zA-Z]+$", $email))
     $errors .= "The email address has the wrong form.";*/



   $created = createAccount($password, $userName, $email, $phone, $postCode);




if(!$created)
{
   $errors .= " user name is too short or has been registered.";
}

if($errors == ""){
session_start();

$_SESSION['userName'] = $userName;

$_SESSION['LAST_ACTIVITY'] = time();






//$verify_url = "verify-user.php";
$safe_email = urlencode($email);



$mailer2 = new FreakMailer();
 
// Set the subject
$mailer2->Subject = 'Hi dear visitor, thank you for your register';
 
// Body
$mailer2->Body = $userName . ', your feedback is important, you can contact me anytime by calling me at 0425306362, do not hesitate.';
 
// Add an address to send to.
$mailer2->AddAddress($email, $userName);

 
if(!$mailer2->Send())
{
  $mailer2->ClearAddresses();
  $mailer2->ClearAttachments();
  $errors .= "registration is successful, but there is an error occurred while sending your an email.";
  
  header("Location: register.php?error=$errors");
  exit;
}
else
{
   
}
$mailer2->ClearAddresses();
$mailer2->ClearAttachments();
















header("Location: index.php"); 
exit;
}
else{

header("Location: register.php?error=$errors");
exit;
}
?>