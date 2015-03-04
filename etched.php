<?php
include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";

$allEproducts = getallEproducts();

$smarty = new Smarty;
$smarty->assign("allEproducts",$allEproducts);
$smarty->display("etched.tpl");
?>