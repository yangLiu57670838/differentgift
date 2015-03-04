<?php
/* 
 * Home page of PM database search example, using Smarty templates. 
 * BAD STYLE: Does not sanitise user input.
 */
include 'Smarty/libs/Smarty.class.php';

session_start();
if(isset($_SESSION['userName']))
{

session_destroy();

$error2 = "successfully signed out.";

$smarty = new Smarty;
$smarty->assign('error2',$error2);
$smarty->display("register.tpl");
}
else
{
  header("Location: register.php");
  exit;
}
?>
