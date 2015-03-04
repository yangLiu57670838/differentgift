<?php

include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";



$ipAddress = $_SERVER["REMOTE_ADDR"];
date_default_timezone_set('australia/brisbane');
$time = date("Y-m-d h:i:sa");

recordingVisitor($ipAddress, $time);










$smarty = new Smarty;


$smarty->display("manage.tpl");





?>