<?php



include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";

$id = $_GET['id'];


delete_category($id);

header("Location: manageCategories.php");
exit;
?>