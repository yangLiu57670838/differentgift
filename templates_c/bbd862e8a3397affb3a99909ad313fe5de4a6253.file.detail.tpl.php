<?php /* Smarty version Smarty-3.1.13, created on 2013-05-28 16:00:36
         compiled from "./templates/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21091346751a2339f6e3ea8-57935047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbd862e8a3397affb3a99909ad313fe5de4a6253' => 
    array (
      0 => './templates/detail.tpl',
      1 => 1369777778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21091346751a2339f6e3ea8-57935047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a2339f7ac8a6_32613684',
  'variables' => 
  array (
    'product' => 0,
    'admin' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a2339f7ac8a6_32613684')) {function content_51a2339f7ac8a6_32613684($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Register</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  
  
  <script>

</script>
</head>




<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	

<table class="detail">
<tr>
<td> 
<img src="images/Curvatura_Bangle_-_Blue_-_upright.jpg" alt="products" width="100" height="100">
 </td>
 <td> 
<img src="images/Fiore_Pendant_-_black_-_in_box.jpg" alt="products" width="100" height="100">
 </td>
<td> 
<ul>
   <li>Name: <?php echo $_smarty_tpl->tpl_vars['product']->value['p_name'];?>
 </li>
  <li>Price: $<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 </li>
  <li>Product Code: <?php echo $_smarty_tpl->tpl_vars['product']->value['code'];?>
</li>
  <li>state: <?php echo $_smarty_tpl->tpl_vars['product']->value['state'];?>
</li>
  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['product']->value['state'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!='out of store'){?>
  <li>quantity: <form method="get" action="basket.php">
    <input type="text" name="buy"><br>
    <input type="submit" value="add to basket">
    </form></li> <?php }?>
</ul>
</td>
</tr>
</table>
<p class="detail"><?php echo $_smarty_tpl->tpl_vars['product']->value['detail'];?>
<br>


<?php if ($_smarty_tpl->tpl_vars['admin']->value=='true'){?>


<h3>Update the Category: </h3>
<form method="post" action="update_detail_action.php" enctype="multipart/form-data">   
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['p_id'];?>
">
     Product name:     <input type="text" name="name"><br>
	 Product price:    <input type="text" name="price"><br>
	 Product code:     <input type="text" name="code"><br>
	 Product state:    <input type="text" name="state"><br>
	 Product Category: <input type="text" name="category"><br>
	 Product Type:     <input type="text" name="type"> (normal & etched & special)<br>
	 Product detail:   <input type="text" name="detail"><br>
	 Image file: (.jpg image only)<input type="hidden" name="MAX_FILE_SIZE" value="1000000"><input type="file" name="userfile" size=30> <br>
	<div class="redNotice"><?php if ($_smarty_tpl->tpl_vars['error']->value){?> ERROR:<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
  <?php }?>  <br>
	
	
   <input type="submit" value="update"> 
   <input type="reset"  name="reset"  value="Reset">

</form>


<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
</body>
</html><?php }} ?>