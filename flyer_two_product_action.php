<?php

include 'Smarty/libs/Smarty.class.php';

$image_url = $_POST['image_url'];
$image_url1 = $_POST['image_url1'];
$header1 = $_POST['header1'];
$content1 = $_POST['content1'];
$image_url2 = $_POST['image_url2'];
$header2 = $_POST['header2'];
$content2 = $_POST['content2'];


$smarty = new Smarty;
$smarty->assign("image_url",$image_url);
$smarty->assign("image_url1",$image_url1);
$smarty->assign("header1",$header1);
$smarty->assign("content1",$content1);
$smarty->assign("image_url2",$image_url2);
$smarty->assign("header2",$header2);
$smarty->assign("content2",$content2);
$smarty->display("flyer_two_product.tpl");
?>
