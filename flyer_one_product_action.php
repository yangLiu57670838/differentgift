<?php

include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";
require("config.php");	 
require "lib/phpmailer/MailClass.inc";	

$title = $_POST['title'];
$econtent = $_POST['econtent'];
$image_url = $_POST['image_url'];
$product_image_url = $_POST['product_image_url'];
$email = $_POST['email'];
$detail = $_POST['detail'];


$mailer = new FreakMailer();

$mailer->IsHTML(true);

 
// Set the subject
$mailer->Subject = $title;
 
// Body

$mailer->Body = "<h1>{$econtent} </h1>
                         <img src=" . $image_url . " />";
 
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

















$smarty = new Smarty;
$smarty->assign("title",$title);
$smarty->assign("econtent",$econtent);
$smarty->assign("image_url",$image_url);
$smarty->assign("product_image_url",$product_image_url);

$smarty->assign("detail",$detail);
$smarty->display("flyer_one_product.tpl");
?>
