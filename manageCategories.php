<?php

include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";



$categories = getCategories();


$error = @$_GET['error']; 









$smarty = new Smarty;
$smarty->assign("categories",$categories);
$smarty->assign("error",$error);
$smarty->display("manageCategories.tpl");





?>