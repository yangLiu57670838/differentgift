<?php



include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";

$id = $_GET['id'];


delete_product($id);

header("Location: products.php?admin=true");
exit;
?>