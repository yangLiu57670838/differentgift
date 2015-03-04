<?php

include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";

$categories = getCategories();

$smarty = new Smarty;
$smarty->assign("categories",$categories);
$smarty->display("categories.tpl");
?>