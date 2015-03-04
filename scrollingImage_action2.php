<?php
/*
 * Updates item from form data.
 */
include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";

# Get form data

$image = $_FILES['userfile2'];
addImage2($image);




header("Location: manageScrolling.php"); 
exit;
?>