<?php
/* 
 * Home page of PM database search example, using Smarty templates. 
 * BAD STYLE: Does not sanitise user input.
 */
include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";

$originalCode = getoriginalCode();
$error = @$_GET['error']; 
$smarty = new Smarty;
$smarty->assign("originalCode",$originalCode);
$smarty->assign("error",$error);
$smarty->display("specialCode.tpl");
?>