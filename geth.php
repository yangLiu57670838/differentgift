<?php

require "includes/defs.php";

// get the q parameter from URL
$q=$_REQUEST["q"];

$userNames = getuserNames($q);




// lookup all hints from array if $q is different from ""
if ($userNames == 1) 
{
  
           $response = "this name has already been registered";
   
}
else {
  $response="this name is fine";
}

//output the response
echo $response;
?> 