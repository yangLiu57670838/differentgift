<?php /* Smarty version Smarty-3.1.13, created on 2013-06-06 20:11:19
         compiled from "./templates/manageUsers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:497584551a59a9fe8e3e3-27372850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8ccf3ffd1a7537be17f6de7bbaf56274ac17a98' => 
    array (
      0 => './templates/manageUsers.tpl',
      1 => 1370574677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '497584551a59a9fe8e3e3-27372850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a59aa0212276_04112568',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a59aa0212276_04112568')) {function content_51a59aa0212276_04112568($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Welcome to The Different Gifts</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>




<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	




<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
<table class="categoriesTable">

<tr>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['u_id'];?>
<?php $_tmp1=ob_get_clean();?><?php if (($_tmp1%3)==0){?>

<td class="Ccol1"><?php echo $_smarty_tpl->tpl_vars['user']->value['firstName'];?>
</td>
<td class="Ccol2"><?php echo $_smarty_tpl->tpl_vars['user']->value['lastName'];?>
</td>
<td class="Ccol1"><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</td>
<td class="Ccol1"><?php echo $_smarty_tpl->tpl_vars['user']->value['postCode'];?>
</td>
<td class="Ccol1"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>

 <?php }?>

 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['u_id'];?>
<?php $_tmp2=ob_get_clean();?><?php if (($_tmp2%3)==1){?>

<td class="Ccol1"><?php echo $_smarty_tpl->tpl_vars['user']->value['firstName'];?>
</td>
<td class="Ccol2"><?php echo $_smarty_tpl->tpl_vars['user']->value['lastName'];?>
</td>
<td class="Ccol1"><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</td>
<td class="Ccol1"><?php echo $_smarty_tpl->tpl_vars['user']->value['postCode'];?>
</td>
<td class="Ccol1"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
 <?php }?>
 
 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['u_id'];?>
<?php $_tmp3=ob_get_clean();?><?php if (($_tmp3%3)==2){?>

<td class="Ccol1"><?php echo $_smarty_tpl->tpl_vars['user']->value['firstName'];?>
</td>
<td class="Ccol2"><?php echo $_smarty_tpl->tpl_vars['user']->value['lastName'];?>
</td>
<td class="Ccol1"><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</td>
<td class="Ccol1"><?php echo $_smarty_tpl->tpl_vars['user']->value['postCode'];?>
</td>
<td class="Ccol1"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>

 <?php }?>

</tr>
</table>
<?php } ?>

<h3>upload Excel</h3>
<script> 
function import_check(){
var f_content = form1.file.value;
var fileext=f_content.substring(f_content.lastIndexOf("."),f_content.length) 
fileext=fileext.toLowerCase() 
if (fileext!='.xls') 
{
alert("please inport xls format file");
return false;
} } 
</script>
<table width="98%" border="0" align="center" style="margin-top:20px; border:1px solid #9abcde;"> 
<form id="form1" name="form1" enctype="multipart/form-data" method="POST" action="insert.php">

<tr> 

<input name="file" type="file" id="file" size="50" />

<label> 
<input name="button" type="submit" class="nnt_submit" id="button" value="submit" onclick="import_check();"/>  
</label> 
</td> 
</tr> 
<tr> 
<td colspan="2" bgcolor="#DDF0FF">Import format:</td> 
</tr>
<tr> 
<td colspan="2"> the import must be <strong>excel</strong> format .xls
file． </td> 
</tr> 
<tr>
<td colspan="2">&nbsp;</td> 
<tr> <tr> 
<td colspan="2"> </td>
</tr></form> 
</table>


<a href="export.php">Download</a>


	
	

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


</body>
</html><?php }} ?>