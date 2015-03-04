<?php
/* 
 * Home page of PM database search example, using Smarty templates. 
 * BAD STYLE: Does not sanitise user input.
 */
include 'Smarty/libs/Smarty.class.php';

session_start();
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
$smarty = new Smarty;
$smarty->display("register.tpl");
 
?>