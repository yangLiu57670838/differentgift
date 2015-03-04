<?php /* Smarty version Smarty-3.1.13, created on 2013-05-28 17:13:44
         compiled from "./templates/specialCode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80405124851a23e9f7b3573-76602181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d7f3dc37931d3ada79a2567e826e1b72410ea1e' => 
    array (
      0 => './templates/specialCode.tpl',
      1 => 1369786421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80405124851a23e9f7b3573-76602181',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a23e9f830cd7_79199023',
  'variables' => 
  array (
    'originalCode' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a23e9f830cd7_79199023')) {function content_51a23e9f830cd7_79199023($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
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
	

<h1 class="CH"> Please enter the special code we sent to you through email. </h1>
<div class="CH"> <form method="post" action="checkCodeAction.php">    
    <input type="hidden" name="originalCode" value="<?php echo $_smarty_tpl->tpl_vars['originalCode']->value['code'];?>
">
    <input type="text" name="code"><br>
    <input type="submit" value="insert">
    </form></div>
<div class="redNotice"><?php if ($_smarty_tpl->tpl_vars['error']->value){?> ERROR:<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
  <?php }?>  <br>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
</body>
</html><?php }} ?>