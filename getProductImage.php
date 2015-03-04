<?php

require "includes/defs.php";

$id = $_GET['id'];

$image = get_productDetail($id);

$data = $image['imagedata'];
$name = $image['imagename'];
$type = $image['imagetype'];
$size = strlen($data);


header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $data;
?>