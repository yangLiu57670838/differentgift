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




<table class="categoriesTable">
<tr>
<td class="Ccol1">Visitor (last 10 in CMS)</td>
<td class="Ccol2">Visiting time</td>
</tr>
{foreach $records as $record}
<tr>
<td class="Ccol1">{$record.ip}</td>
<td class="Ccol2">{$record.time}</td>
</tr>
{/foreach}
	
</table>



{include 'footer.tpl'}	


</body>
</html>