<?php
include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";

$allSproducts = getallSproducts();

$smarty = new Smarty;
$smarty->assign("allSproducts",$allSproducts);
$smarty->display("special.tpl");
?>