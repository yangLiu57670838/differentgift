<?php

include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";











$records = getLastTenRecord();





$smarty = new Smarty;

$smarty->assign("records",$records);
$smarty->display("manageRecords.tpl");





?>