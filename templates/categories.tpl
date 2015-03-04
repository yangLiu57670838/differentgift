<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Welcome</title>
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
<h2> no categories found.</h2>
{else}


<table class="categoriesTable">
{foreach $categories as $category}



{if (({$category.c_id} % 3) == 0) && ({$category.c_id} < 4)}
<tr>
<td class="Ccol1"> <a href="products.php?category={$category.c_name}">{$category.c_name}</a> </td>
 {/if}

 {if (({$category.c_id} % 3) == 1) && ({$category.c_id} < 4)}

<td class="Ccol2"> <a href="products.php?category={$category.c_name}">{$category.c_name}</a> </td>
 {/if}
 
 {if (({$category.c_id} % 3) == 2) && ({$category.c_id} < 4)}

<td class="Ccol3"> <a href="products.php?category={$category.c_name}">{$category.c_name}</a> </td>
 </tr>
 {/if}



{if (({$category.c_id} % 3) == 0) && ({$category.c_id} >3) && ({$category.c_id} < 7)}
<tr>
<td class="Ccol1"> <a href="products.php?category={$category.c_name}">{$category.c_name}</a> </td>
 {/if}

 {if (({$category.c_id} % 3) == 1) && ({$category.c_id} >3) && ({$category.c_id} < 7)}

<td class="Ccol2"> <a href="products.php?category={$category.c_name}">{$category.c_name}</a> </td>
 {/if}
 
 {if (({$category.c_id} % 3) == 2) && ({$category.c_id} >3) && ({$category.c_id} < 7)}

<td class="Ccol3"> <a href="products.php?category={$category.c_name}">{$category.c_name}</a> </td>
 </tr>
 {/if}



{if (({$category.c_id} % 3) == 0) && ({$category.c_id} > 6)}
<tr>
<td class="Ccol1"> <a href="products.php?category={$category.c_name}">{$category.c_name}</a> </td>
 {/if}

 {if (({$category.c_id} % 3) == 1) && ({$category.c_id} > 6)}

<td class="Ccol2"> <a href="products.php?category={$category.c_name}">{$category.c_name}</a> </td>
 {/if}
 
 {if (({$category.c_id} % 3) == 2) && ({$category.c_id} > 6)}

<td class="Ccol3"> <a href="products.php?category={$category.c_name}">{$category.c_name}</a> </td>
 </tr>
 {/if}





{/foreach}
</table>
 {/if}
{include 'footer.tpl'}	
</body>
</html>