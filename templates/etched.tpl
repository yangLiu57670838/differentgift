<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Register</title>
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

{foreach $allEproducts as $allproduct}
<table class="categoriesTable">

<tr>
{if ({$allproduct.p_id} % 3) == 0}

<td class="Ccol1"><a href="detail.php?id={$allproduct.p_id}">{$allproduct.p_name}</a></td>
 {/if}

 {if ({$allproduct.p_id} % 3) == 1}

<td class="Ccol2"><a href="detail.php?id={$allproduct.p_id}">{$allproduct.p_name}</a></td>
 {/if}
 
 {if ({$allproduct.p_id} % 3) == 2}

<td class="Ccol3"><a href="detail.php?id={$allproduct.p_id}">{$allproduct.p_name}</a></td>
 {/if}

</tr>
</table>
{/foreach}




{include 'footer.tpl'}	
</body>
</html>