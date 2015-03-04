<?php

include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";



$originalCode = getoriginalCode();



$error = @$_GET['error']; 









$smarty = new Smarty;
$smarty->assign("error",$error);
$smarty->assign("originalCode",$originalCode);
$smarty->display("manageCode.tpl");





?>