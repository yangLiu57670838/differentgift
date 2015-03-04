<?php

include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";


if (isset($_GET['page'])) {      
    $page = $_GET['page'];     
} else {
    $page = 1;
}

$category = $_GET['category'];

$products = getproducts($category);

$admin = $_GET['admin'];

$offset = get_offset($page);

$a = getallproducts($offset);

$allproducts = $a[0];
$num_items = $a[1];
$currentPage = $page;
$error = @$_GET['error']; 






$smarty = new Smarty;
$smarty->assign("products",$products);
$smarty->assign("admin",$admin);
$smarty->assign("allproducts",$allproducts);
$smarty->assign("error",$error);
$smarty->assign("num_items",$num_items);
$smarty->assign("currentPage",$currentPage);
$smarty->display("products.tpl");





?>