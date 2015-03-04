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

{if empty($categories)}
<h2>There are no categories have been set.</h2>
{else}



<table class="categoriesTable">
{foreach $categories as $category}

{if (({$category.c_id} % 3) == 0) && ({$category.c_id} < 4)}
<tr>

<td class="Ccol1">{$category.c_name}</td>
<td class="button"> <a href="deleteCategoryAction.php?id={$category.c_id}">Delete</a> </td>
 {/if}

 {if (({$category.c_id} % 3) == 1) && ({$category.c_id} < 4)}

<td class="Ccol2">{$category.c_name}</td>
<td class="button"> <a href="deleteCategoryAction.php?id={$category.c_id}">Delete</a> </td>
 {/if}
 
 {if (({$category.c_id} % 3) == 2) && ({$category.c_id} < 4)}

<td class="Ccol3">{$category.c_name}</td>
<td class="button"> <a href="deleteCategoryAction.php?id={$category.c_id}">Delete</a> </td>
</tr>
 {/if}

{if (({$category.c_id} % 3) == 0) && ({$category.c_id} >3) && ({$category.c_id} < 7)}
<tr>
<td class="Ccol1">{$category.c_name}</td>
<td class="button"> <a href="deleteCategoryAction.php?id={$category.c_id}">Delete</a> </td>
 {/if}

 {if (({$category.c_id} % 3) == 1) && ({$category.c_id} >3) && ({$category.c_id} < 7)}

<td class="Ccol2">{$category.c_name}</td>
<td class="button"> <a href="deleteCategoryAction.php?id={$category.c_id}">Delete</a> </td>
 {/if}
 
 {if (({$category.c_id} % 3) == 2) && ({$category.c_id} >3) && ({$category.c_id} < 7)}

<td class="Ccol3">{$category.c_name}</td>
<td class="button"> <a href="deleteCategoryAction.php?id={$category.c_id}">Delete</a> </td>
</tr>
 {/if}
 
{if (({$category.c_id} % 3) == 0) && ({$category.c_id} > 6)}
<tr>

<td class="Ccol1">{$category.c_name}</td>
<td class="button"> <a href="deleteCategoryAction.php?id={$category.c_id}">Delete</a> </td>
 {/if}

 {if (({$category.c_id} % 3) == 1) && ({$category.c_id} > 6)}

<td class="Ccol2">{$category.c_name}</td>
<td class="button"> <a href="deleteCategoryAction.php?id={$category.c_id}">Delete</a> </td>
 {/if}
 
 {if (({$category.c_id} % 3) == 2) && ({$category.c_id} > 6)}

<td class="Ccol3">{$category.c_name}</td>
<td class="button"> <a href="deleteCategoryAction.php?id={$category.c_id}">Delete</a> </td>
</tr>
 {/if}
 
 
 


{/foreach}


</table>
{/if}


<h3>Update new Category: </h3>
<form method="post" action="add_category_action.php">     
    
    <input type="text" name="category">
	<div class="redNotice">{if $error} ERROR:{$error}  {/if}  <br>
	
	
   <input type="submit" value="update"> 

</form>









	
	

{include 'footer.tpl'}	


</body>
</html>