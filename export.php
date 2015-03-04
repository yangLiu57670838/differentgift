<?php
/*
* Do not forget to set the right credentials in the class for the mysql connection
* modify the queries here below.
*/

include('class.mysql2xls_xml.php');

$xls_xml = new excel_xml;

/*
* short query: select all fields from table
*/
$xls_xml->short_query('differentgifts','users');  
$xls_xml->save_as('output_short.xml');


$xls_xml->to_excel('backup.xls');
?>