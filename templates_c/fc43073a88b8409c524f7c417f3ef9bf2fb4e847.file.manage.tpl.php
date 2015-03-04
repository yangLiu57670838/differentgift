<?php /* Smarty version Smarty-3.1.13, created on 2013-06-17 15:36:08
         compiled from "./templates/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123509758451a40b68241c00-90047984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc43073a88b8409c524f7c417f3ef9bf2fb4e847' => 
    array (
      0 => './templates/manage.tpl',
      1 => 1371508559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123509758451a40b68241c00-90047984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a40b68413346_16243011',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a40b68413346_16243011')) {function content_51a40b68413346_16243011($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Welcome to The Different Gifts</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>




<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	

<h1 class="CH"> Welcome Denis!! </h1>
<table class="categoriesTable">
<tr>
<td class="Ccol1"><a href="manageScrolling.php">Scrolling Images</a></td>
<td class="Ccol2"><a href="manageCategories.php">Categories</a></td>
<td class="Ccol3"><a href="products.php?admin=true">Products</a></td></tr>
<tr>
<td class="Ccol1"><a href="manageUsers.php">Users</a></td>
<td class="Ccol2"><a href="manageCode.php">Special Code</a></td>
<td class="Ccol3"><a href="flyer_one_product.php">Flyer One</a></td>
</tr>
</table>





	
	

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


</body>
</html><?php }} ?>