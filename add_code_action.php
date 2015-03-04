<?php
include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";

# Get form data
$code = $_POST['code'];








# Check data is valid
if (empty($code)){
       $error = "u haven not enter anything.";
	header("Location: manageCode.php?error=$error");
	exit;
}








# Perform update with data
update_code($code);

header("Location: manage.php"); 
exit;
?>