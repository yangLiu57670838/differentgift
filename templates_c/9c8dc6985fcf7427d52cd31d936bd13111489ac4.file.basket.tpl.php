<?php /* Smarty version Smarty-3.1.13, created on 2013-05-28 19:58:31
         compiled from "./templates/basket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92020248251a242ca6ce4e5-08617328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c8dc6985fcf7427d52cd31d936bd13111489ac4' => 
    array (
      0 => './templates/basket.tpl',
      1 => 1369796307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92020248251a242ca6ce4e5-08617328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a242ca76a9c6_53922006',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a242ca76a9c6_53922006')) {function content_51a242ca76a9c6_53922006($_smarty_tpl) {?> <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
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
	

<table class="listTable">
<tr>
<td> <img src="Small_White_Lace_Umbrella.jpg" alt="products" width="100" height="100">  </td>
<td class="listDetail"> Category: gifts </td>
<td class="smallButton"> <a href="categories.php"> Delete this item </a> </td>
</tr>

<tr>
<td> basket total:</td>
<td> $90</td>
</tr>
</table>

<div class="smallButton"> <a href="payment.php"> continue to pay </a> </div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
</body>
</html><?php }} ?>