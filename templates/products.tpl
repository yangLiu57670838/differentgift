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







{if $admin == 'true'}
{if $allproducts}
{foreach $allproducts as $allproduct}
<table class="categoriesTable">

<tr>
{if ({$allproduct.p_id} % 3) == 0}

<td class="Ccol1"><a href="detail.php?id={$allproduct.p_id}&admin=true">{$allproduct.p_name}</a></td>
<td class="button"> <a href="deleteProductAction.php?id={$allproduct.p_id}">Delete</a> </td>
 {/if}

 {if ({$allproduct.p_id} % 3) == 1}

<td class="Ccol2"><a href="detail.php?id={$allproduct.p_id}&admin=true">{$allproduct.p_name}</a></td>
<td class="button"> <a href="deleteProductAction.php?id={$allproduct.p_id}">Delete</a> </td>
 {/if}
 
 {if ({$allproduct.p_id} % 3) == 2}

<td class="Ccol3"><a href="detail.php?id={$allproduct.p_id}&admin=true">{$allproduct.p_name}</a></td>
<td class="button"> <a href="deleteProductAction.php?id={$allproduct.p_id}">Delete</a> </td>
 {/if}

</tr>
</table>
{/foreach}



 <a href="products.php?page=1&admin=true">first</a> 
 {if {$currentPage > 1}}
 <a href="products.php?page={$currentPage - 1}&admin=true">prevoius</a>
 {/if}
 
{for $page=1 to ceil($num_items/5)} 
      {if $currentPage == $page}
	      <span>{$page}</span>
	  
	  {else}
	       <a href="products.php?page={$page}&admin=true">{$page}</a>  
	  {/if}
                 
{/for}

{if {$currentPage < ceil($num_items/5)}}
 <a href="products.php?page={$currentPage + 1}&admin=true">next</a>
 {/if}
 
 <a href="products.php?page={ceil($num_items/5)}&admin=true">last</a>  <!-- ceil round a number upward to it's nearest integer-->

{else}
<p>No items found.</p>
{/if}




<h3>Add new Product: </h3>
<form method="post" action="Add_detail_action.php" enctype="multipart/form-data">   
   
     Product name:     <input type="text" name="name"><br>
	 Product price:    <input type="text" name="price"><br>
	 Product code:     <input type="text" name="code"> (unique code for each product)<br>
	 Product state:    <input type="text" name="state"> (onSale & soldOut)<br>
	 Product Category: <input type="text" name="category"><br>
	 Product Type:     <input type="text" name="type"> (normal & etched & special)<br>
	 Product detail:   <input type="text" name="detail"><br>
	 Image file: (.jpg image only)<input type="hidden" name="MAX_FILE_SIZE" value="1000000"><input type="file" name="userfile" size=30> <br>
	<div class="redNotice">{if $error} ERROR:{$error}  {/if}  <br>
	
	
   <input type="submit" value="Add"> 
   <input type="reset"  name="reset"  value="Reset">
     <a href="manage.php">Back to management page</a> 

</form>

  {else}

{foreach $products as $product}
<table class="categoriesTable">

<tr>
{if ({$product.p_id} % 3) == 0}

<td class="Ccol1"><a href="detail.php?id={$product.p_id}">{$product.p_name}</a></td>
 {/if}

 {if ({$product.p_id} % 3) == 1}

<td class="Ccol2"><a href="detail.php?id={$product.p_id}">{$product.p_name}</a></td>
 {/if}
 
 {if ({$product.p_id} % 3) == 2}

<td class="Ccol3"><a href="detail.php?id={$product.p_id}">{$product.p_name}</a></td>
 {/if}

</tr>
</table>

{/foreach}

<p><a href="categories.php">back to categories list</a></p>


{/if}




	
	

{include 'footer.tpl'}	


</body>
</html>