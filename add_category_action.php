<?php

include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";


$category = $_POST['category'];


if (empty($category)) {$error = "Category name must be nonempty.";}




if (!empty($error)) {
    header("Location: manageCategories.php?error=$error");
    exit;
}

$checkDuplicateC = checkDuplicateC($category);
if ($checkDuplicateC) {
    $error = "this category name has beed set before.";
    header("Location: manageCategories.php?error=$error");
    exit;
}

add_category($category);

header("Location: manageCategories.php"); 

exit;
?>
