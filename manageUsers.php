<?php

include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";



$users = getusers();












$smarty = new Smarty;
$smarty->assign("users",$users);
$smarty->display("manageUsers.tpl");





?>