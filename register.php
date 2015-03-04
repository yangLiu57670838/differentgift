<?php
/* 
 * Home page of PM database search example, using Smarty templates. 
 * BAD STYLE: Does not sanitise user input.
 */
include 'Smarty/libs/Smarty.class.php';
$error = @$_GET['error'];
$error2 = @$_GET['error2'];



if((isset($_SESSION['userName'])) && (time() - $_SESSION['LAST_ACTIVITY'] < 60))
{
      $login = "true";
}






$smarty = new Smarty;
$smarty->assign('error',$error);
$smarty->assign('error2',$error2);
$smarty->assign('login',$login);
$smarty->display("register.tpl");
?>
