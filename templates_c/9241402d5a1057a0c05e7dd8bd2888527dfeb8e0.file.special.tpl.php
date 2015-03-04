<?php /* Smarty version Smarty-3.1.13, created on 2013-05-28 17:19:36
         compiled from "./templates/special.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160076763451a23fb44dc5b5-31342554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9241402d5a1057a0c05e7dd8bd2888527dfeb8e0' => 
    array (
      0 => './templates/special.tpl',
      1 => 1369786766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160076763451a23fb44dc5b5-31342554',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a23fb451b723_53357743',
  'variables' => 
  array (
    'allSproducts' => 0,
    'allproduct' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a23fb451b723_53357743')) {function content_51a23fb451b723_53357743($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
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
 $_from = $_smarty_tpl->tpl_vars['allSproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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