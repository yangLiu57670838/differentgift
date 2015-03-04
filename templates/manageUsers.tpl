<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Welcome to The Different Gifts</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  
  <script src="jquery-1.11.1.min.js"></script>
  <script>
$(document).ready(function(){
  $("#logo").mouseenter(function()
  {
    $(this).animate({
            marginLeft : "-180px"
        },7000);
  });
  
  
});
</script>

</head>




<body>
{include 'header.tpl'}	




{foreach $users as $user}
<table class="categoriesTable">

<tr>
{if ({$user.u_id} % 3) == 0}

<td class="Ccol1">{$user.firstName}</td>
<td class="Ccol2">{$user.lastName}</td>
<td class="Ccol1">{$user.phone}</td>
<td class="Ccol1">{$user.postCode}</td>
<td class="Ccol1">{$user.email}</td>

 {/if}

 {if ({$user.u_id} % 3) == 1}

<td class="Ccol1">{$user.firstName}</td>
<td class="Ccol2">{$user.lastName}</td>
<td class="Ccol1">{$user.phone}</td>
<td class="Ccol1">{$user.postCode}</td>
<td class="Ccol1">{$user.email}</td>
 {/if}
 
 {if ({$user.u_id} % 3) == 2}

<td class="Ccol1">{$user.firstName}</td>
<td class="Ccol2">{$user.lastName}</td>
<td class="Ccol1">{$user.phone}</td>
<td class="Ccol1">{$user.postCode}</td>
<td class="Ccol1">{$user.email}</td>

 {/if}

</tr>
</table>
{/foreach}

<h3>upload Excel</h3>
<script> 
function import_check(){
var f_content = form1.file.value;
var fileext=f_content.substring(f_content.lastIndexOf("."),f_content.length) 
fileext=fileext.toLowerCase() 
if (fileext!='.xls') 
{
alert("please inport xls format file");
return false;
} } 
</script>
<table width="98%" border="0" align="center" style="margin-top:20px; border:1px solid #9abcde;"> 
<form id="form1" name="form1" enctype="multipart/form-data" method="POST" action="insert.php">

<tr> 

<input name="file" type="file" id="file" size="50" />

<label> 
<input name="button" type="submit" class="nnt_submit" id="button" value="submit" onclick="import_check();"/>  
</label> 
</td> 
</tr> 
<tr> 
<td colspan="2" bgcolor="#DDF0FF">Import format:</td> 
</tr>
<tr> 
<td colspan="2"> the import must be <strong>excel</strong> format .xls
file． </td> 
</tr> 
<tr>
<td colspan="2">&nbsp;</td> 
<tr> <tr> 
<td colspan="2"> </td>
</tr></form> 
</table>


<a href="export.php">Download</a>


	
	

{include 'footer.tpl'}	


</body>
</html>