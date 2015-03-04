<?php /* Smarty version Smarty-3.1.13, created on 2013-05-28 16:41:50
         compiled from "./templates/manageCode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13425188451a53a9151bec2-75707136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90d2584ead70f0b8650b455afc660e131a72c38' => 
    array (
      0 => './templates/manageCode.tpl',
      1 => 1369784507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13425188451a53a9151bec2-75707136',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a53a9152ce00_52827715',
  'variables' => 
  array (
    'originalCode' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a53a9152ce00_52827715')) {function content_51a53a9152ce00_52827715($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Welcome to The Different Gifts</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>




<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	






<h3>your original special code is:  <?php echo $_smarty_tpl->tpl_vars['originalCode']->value['code'];?>
</h3>


<h3>input the new special code below: </h3>
<form method="post" action="add_code_action.php">     
    
    <input type="text" name="code">
	<div class="redNotice"><?php if ($_smarty_tpl->tpl_vars['error']->value){?> ERROR:<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
  <?php }?>  <br>
	
	
   <input type="submit" value="update"> 

</form>



	
	

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


</body>
</html><?php }} ?>