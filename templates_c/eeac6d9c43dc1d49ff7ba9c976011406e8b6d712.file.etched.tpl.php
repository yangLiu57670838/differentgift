<?php /* Smarty version Smarty-3.1.13, created on 2013-05-28 16:10:56
         compiled from "./templates/etched.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192400687551a23b72756165-40294347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eeac6d9c43dc1d49ff7ba9c976011406e8b6d712' => 
    array (
      0 => './templates/etched.tpl',
      1 => 1369782652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192400687551a23b72756165-40294347',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a23b727f25e6_73452317',
  'variables' => 
  array (
    'allEproducts' => 0,
    'allproduct' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a23b727f25e6_73452317')) {function content_51a23b727f25e6_73452317($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
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
	

<?php  $_smarty_tpl->tpl_vars['allproduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['allproduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allEproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['allproduct']->key => $_smarty_tpl->tpl_vars['allproduct']->value){
$_smarty_tpl->tpl_vars['allproduct']->_loop = true;
?>
<table class="categoriesTable">

<tr>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_id'];?>
<?php $_tmp1=ob_get_clean();?><?php if (($_tmp1%3)==0){?>

<td class="Ccol1"><a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_name'];?>
</a></td>
 <?php }?>

 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_id'];?>
<?php $_tmp2=ob_get_clean();?><?php if (($_tmp2%3)==1){?>

<td class="Ccol2"><a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_name'];?>
</a></td>
 <?php }?>
 
 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_id'];?>
<?php $_tmp3=ob_get_clean();?><?php if (($_tmp3%3)==2){?>

<td class="Ccol3"><a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['allproduct']->value['p_name'];?>
</a></td>
 <?php }?>

</tr>
</table>
<?php } ?>




<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
</body>
</html><?php }} ?>