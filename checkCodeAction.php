<?php
include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";

# Get form data
$code = $_POST['code'];

$originalCode = $_POST['originalCode'];






# Check data is valid
if ($originalCode != $code){
       $error = "u haven not enter the correct code, you may not be able to see our special prices.";
	header("Location: specialCode.php?error=$error");
	exit;
}



header("Location: special.php"); 
exit;
?>