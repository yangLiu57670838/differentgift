<?php
/* 
 * Home page of PM database search example, using Smarty templates. 
 * BAD STYLE: Does not sanitise user input.
 */
include 'Smarty/libs/Smarty.class.php';

session_start();
if(!isset($_SESSION['userName'])) 
 {
 $error2 = "login first.";
   $smarty = new Smarty;
$smarty->assign('error2',$error2);
$smarty->display("register.tpl");
 }
 else
 {
 
   if(time() - $_SESSION['LAST_ACTIVITY'] > 60)
   {
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
   $error2 = "SESSION expired.";
	
    $smarty = new Smarty;
    $smarty->assign('error2',$error2);
     $smarty->display("register.tpl");
   }
    else
	{
	 $smarty = new Smarty;
     $smarty->display("basket.tpl");
	}


 }
?>