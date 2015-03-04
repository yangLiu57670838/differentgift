<?php
/*
 * Updates item from form data.
 */
include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";

# Get form data
$id = $_POST['id'];
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
       $error = "must re-update everything.";
	header("Location: detail.php?id=$id&error=$error&admin=true");
	exit;
}








# Perform update with data
update_detail($id,$name,$price,$code,$state,$detail,$image,$type,$category);

header("Location: detail.php?id=$id&admin=true"); 
exit;
?>