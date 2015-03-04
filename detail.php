<?php
/* 
 * Home page of PM database search example, using Smarty templates. 
 * BAD STYLE: Does not sanitise user input.
 */
include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";

$id = $_GET['id'];
$admin = $_GET['admin'];
$product = get_productDetail($id);

$error = @$_GET['error']; 
$smarty = new Smarty;
$smarty->assign("product",$product);
$smarty->assign("admin",$admin);
$smarty->assign("error",$error);
$smarty->display("detail.tpl");
?>