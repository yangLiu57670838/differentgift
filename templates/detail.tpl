<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Welcome</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  
  
  <script>

</script>
</head>




<body>
{include 'header.tpl'}	

<table class="detail">
<tr>

 <td> 
<img src="getProductImage.php?id={$product.p_id}" alt="product" width="100" height="100">
 </td>
<td> 
<ul>
   <li>Name: {$product.p_name} </li>
  <li>Price: ${$product.price} </li>
  <li>Product Code: {$product.code}</li>
  <li>state: {$product.state}</li>

</ul>
</td>
</tr>
</table>
<p class="detail">{$product.detail}<br>

{if $admin != 'true'}
  {if {$product.state} != 'soldOut'}
quantity:
<div class="detail"> <form method="get" action="basket.php">
    <input type="text" name="buy"><br>
    <input type="submit" value="add to basket">
    </form> {/if} </div>

</p>

 <a href="products.php?category={$product.category}">Back to products list</a> </p>
	
	
	{/if}


{if $admin == 'true'}


<h3>Update this Product: </h3>
<form method="post" action="update_detail_action.php" enctype="multipart/form-data">   
      <input type="hidden" name="id" value="{$product.p_id}">
     Product name:     <input type="text" name="name"><br>
	 Product price:    <input type="text" name="price"><br>
	 Product code:     <input type="text" name="code"> (unique code for each product)<br> 
	 Product state:    <input type="text" name="state"> (onSale & soldOut)<br>
	 Product Category: <input type="text" name="category"><br>
	 Product Type:     <input type="text" name="type"> (normal & etched & special)<br>
	 Product detail:   <input type="text" name="detail"><br>
	 Image file: (.jpg image only)<input type="hidden" name="MAX_FILE_SIZE" value="1000000"><input type="file" name="userfile" size=30> <br>
	<div class="redNotice">{if $error} ERROR:{$error}  {/if}  <br>
	
	
   <input type="submit" value="update"> 
   <input type="reset"  name="reset"  value="Reset">
   
   <a href="products.php?admin=true">Back to products list</a> 

</form>


{/if}

{include 'footer.tpl'}	
</body>
</html>