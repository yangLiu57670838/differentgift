<?php

include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";



if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = "";
}


$categories = search($search);

$smarty = new Smarty;
$smarty->assign("categories",$categories);
$smarty->display("categories.tpl");
?>