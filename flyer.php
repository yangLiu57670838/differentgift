<?php

include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";



$smarty = new Smarty;

$smarty->display("flyer.tpl");
?>