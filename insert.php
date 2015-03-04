<?php

require "reader.php"; 
require "includes/db_defs.php";

if($_POST){ 
$Import_TmpFile = $_FILES['file']['tmp_name']; 
$data = new Spreadsheet_Excel_Reader(); 
$data->setOutputEncoding('UTF-8');
$data->read($Import_TmpFile);
$array =array();
for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) { 
for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) { 
$array[$i][$j] = $data->sheets[0]['cells'][$i][$j]; 
}
}
sava_data($array); 
}  
function sava_data($array){
$link = mysql_open();		//check it's there any exist data
    $query = "select firstName from users where 1 "; //get all data first
	
    $results = mysql_query($query,$link) or show_error();

    $items = array();
    while ($item = mysql_fetch_array($results)) {
        $items[] = $item[0];
    }
	
foreach( $array as $tmp){ 
$tmp[1] = mysql_escape_string($tmp[1]);
$tmp[2] = mysql_escape_string($tmp[2]);
$tmp[3] = mysql_escape_string($tmp[3]);
$tmp[4] = mysql_escape_string($tmp[4]);
$tmp[5] = mysql_escape_string($tmp[5]);

if(in_array($tmp[2],$items))
{
}
else{
	$sql = "INSERT INTO users(firstName,lastName,phone,postCode,email) VALUES("; 
	$sql.=" '$tmp[1]','$tmp[2]','$tmp[3]','$tmp[4]','$tmp[5]')";
	$result = mysql_query($sql,$link) or show_error();
	$items[] = $tmp[2];
}
}
mysql_close($link) or show_error();

    header("Location: manageUsers.php");
    exit;

}


function TtoD($text){ 
$jd1900 = GregorianToJD(1, 1, 1900)-2; 
$myJd = $text+$jd1900; 
$myDate = JDToGregorian($myJd);
$myDate = explode('/',$myDate); 
$myDateStr = str_pad($myDate[2],4,'0', STR_PAD_LEFT)."-".str_pad($myDate[0],2,'0', STR_PAD_LEFT)."-".str_pad($myDate 
[1],2,'0', STR_PAD_LEFT); 
return $myDateStr; 
} 


?>