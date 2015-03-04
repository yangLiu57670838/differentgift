<?php

include 'Smarty/libs/Smarty.class.php';


$promotion_code = $_POST['promotion_code'];

$smarty = new Smarty;

$smarty->assign("promotion_code",$promotion_code);
$smarty->display("flyer_promotioncode.tpl");
?>
