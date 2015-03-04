<?php

include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";



$image = getImage5();

$data = $image['imagedata'];
$name = $image['imagename'];
$type = $image['imagetype'];
$size = strlen($data);


header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $data;
?>