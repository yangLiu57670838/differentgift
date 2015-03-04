<?php
/*
 * Updates item from form data.
 */
include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";

# Get form data

$name = $_POST['name'];
$price = $_POST['price'];
$code = $_POST['code'];
$state = $_POST['state'];
$detail = $_POST['detail'];
$image = $_FILES['userfile'];
$type = $_POST['type'];
$category = $_POST['category'];







# Check data is valid
if ((empty($name)) || (empty($type)) || (empty($category)) || (empty($price)) || (empty($code)) || (empty($state)) || (empty($detail))){
       $error = "must input everything.";
	header("Location: products.php?error=$error&admin=true");
	exit;
}








# Perform update with data
add_detail($name,$price,$code,$state,$detail,$type,$category,$image);

header("Location: products.php?admin=true"); 
exit;
?>