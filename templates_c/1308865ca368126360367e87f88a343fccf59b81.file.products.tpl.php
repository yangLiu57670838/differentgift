<?php /* Smarty version Smarty-3.1.13, created on 2013-05-28 14:51:27
         compiled from "./templates/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67435386651a4baea093f13-76190310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1308865ca368126360367e87f88a343fccf59b81' => 
    array (
      0 => './templates/products.tpl',
      1 => 1369777884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67435386651a4baea093f13-76190310',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a4baea26df26_57159897',
  'variables' => 
  array (
    'admin' => 0,
    'allproducts' => 0,
    'allproduct' => 0,
    'error' => 0,
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a4baea26df26_57159897')) {function content_51a4baea26df26_57159897($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Welcome to The Different Gifts</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>




<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	







<?php if ($_smarty_tpl->tpl_vars['admin']->value=='true'){?>
<?php  $_smarty_tpl->tpl_vars['allproduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['allproduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['allproduct']->key => $_smarty_tpl->tpl_vars['allproduct']->value){
$_smarty_tpl->tpl_vars['allproduct']->_loop = true;
?>
<table class="categoriesTable">

<tr>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_id'];?>
<?php $_tmp1=ob_get_clean();?><?php if (($_tmp1%3)==0){?>

<td class="Ccol1"><a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_id'];?>
&admin=true"><?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_name'];?>
</a></td>
<td class="button"> <a href="deleteProductAction.php?id=<?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_id'];?>
">Delete</a> </td>
 <?php }?>

 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_id'];?>
<?php $_tmp2=ob_get_clean();?><?php if (($_tmp2%3)==1){?>

<td class="Ccol2"><a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_id'];?>
&admin=true"><?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_name'];?>
</a></td>
<td class="button"> <a href="deleteProductAction.php?id=<?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_id'];?>
">Delete</a> </td>
 <?php }?>
 
 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_id'];?>
<?php $_tmp3=ob_get_clean();?><?php if (($_tmp3%3)==2){?>

<td class="Ccol3"><a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_id'];?>
&admin=true"><?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_name'];?>
</a></td>
<td class="button"> <a href="deleteProductAction.php?id=<?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_id'];?>
">Delete</a> </td>
 <?php }?>

</tr>
</table>
<?php } ?>


<h3>Add new Category: </h3>
<form method="post" action="Add_detail_action.php" enctype="multipart/form-data">   
   
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
	
	
   <input type="submit" value="Add"> 
   <input type="reset"  name="reset"  value="Reset">

</form>

<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
<table class="categoriesTable">

<tr>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['product']->value['p_id'];?>
<?php $_tmp4=ob_get_clean();?><?php if (($_tmp4%3)==0){?>

<td class="Ccol1"><a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['p_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['p_name'];?>
</a></td>
 <?php }?>

 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['product']->value['p_id'];?>
<?php $_tmp5=ob_get_clean();?><?php if (($_tmp5%3)==1){?>

<td class="Ccol2"><a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['p_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['p_name'];?>
</a></td>
 <?php }?>
 
 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['product']->value['p_id'];?>
<?php $_tmp6=ob_get_clean();?><?php if (($_tmp6%3)==2){?>

<td class="Ccol3"><a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['p_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['p_name'];?>
</a></td>
 <?php }?>

</tr>
</table>
<?php } ?>


<?php }?>




	
	

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


</body>
</html><?php }} ?>