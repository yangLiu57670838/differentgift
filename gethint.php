<?php

require "includes/defs.php";

// get the q parameter from URL
$q=$_REQUEST["q"]; $hint="";

$categories = getCategories();
if (empty($categories)) //in case there are no categories.
{
   $hint = "No categories have been set";
}
else
{
foreach ($categories as $category)
{
  $a[] = $category[1];
}

   // lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q=strtolower($q); $len=strlen($q); //get string length
  foreach($a as $name) {
    if (stristr($q, substr($name,0,$len))) { //find match category with same beginning
      if ($hint==="") { //=== compare if both values and types are same
        $hint=$name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}


}


// Output "no suggestion" if no hint were found
// or output the correct values
echo $hint==="" ? "no suggestion" : $hint;
?> 