<?php /* Smarty version Smarty-3.1.13, created on 2013-06-16 15:30:39
         compiled from "./templates/categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160077340751a1d5eb0d4319-83685470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebae1f76a7edbe8b76dea28d9451fca475fb284b' => 
    array (
      0 => './templates/categories.tpl',
      1 => 1371421832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160077340751a1d5eb0d4319-83685470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a1d5eb104807_39991685',
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a1d5eb104807_39991685')) {function content_51a1d5eb104807_39991685($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
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
	

<?php if (empty($_smarty_tpl->tpl_vars['categories']->value)){?>
<h2>There are no categories have been set.</h2>
<?php }else{ ?>

<h1> These categories products will directly link to our products in our ebay store </h1>
<table class="categoriesTable">
<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>



<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp2=ob_get_clean();?><?php if ((($_tmp1%3)==0)&&($_tmp2<4)){?>
<tr>
<td class="Ccol1"> <a href="http://stores.ebay.com.au/Different-Gifts-Qld/Gifts-/_i.html?_fsub=623641119&_sid=310554049&_trksid=p4634.c0.m322"><?php echo $_smarty_tpl->tpl_vars['category']->value['c_name'];?>
</a> </td>
 <?php }?>

 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp4=ob_get_clean();?><?php if ((($_tmp3%3)==1)&&($_tmp4<4)){?>

<td class="Ccol2"> <a href="http://stores.ebay.com.au/Different-Gifts-Qld/Gifts-/_i.html?_fsub=623641119&_sid=310554049&_trksid=p4634.c0.m322"><?php echo $_smarty_tpl->tpl_vars['category']->value['c_name'];?>
</a> </td>
 <?php }?>
 
 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp6=ob_get_clean();?><?php if ((($_tmp5%3)==2)&&($_tmp6<4)){?>

<td class="Ccol3"> <a href="http://stores.ebay.com.au/Different-Gifts-Qld/Gifts-/_i.html?_fsub=623641119&_sid=310554049&_trksid=p4634.c0.m322"><?php echo $_smarty_tpl->tpl_vars['category']->value['c_name'];?>
</a> </td>
 </tr>
 <?php }?>



<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp9=ob_get_clean();?><?php if ((($_tmp7%3)==0)&&($_tmp8>3)&&($_tmp9<7)){?>
<tr>
<td class="Ccol1"> <a href="http://stores.ebay.com.au/Different-Gifts-Qld/Gifts-/_i.html?_fsub=623641119&_sid=310554049&_trksid=p4634.c0.m322"><?php echo $_smarty_tpl->tpl_vars['category']->value['c_name'];?>
</a> </td>
 <?php }?>

 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp12=ob_get_clean();?><?php if ((($_tmp10%3)==1)&&($_tmp11>3)&&($_tmp12<7)){?>

<td class="Ccol2"> <a href="http://stores.ebay.com.au/Different-Gifts-Qld/Gifts-/_i.html?_fsub=623641119&_sid=310554049&_trksid=p4634.c0.m322"><?php echo $_smarty_tpl->tpl_vars['category']->value['c_name'];?>
</a> </td>
 <?php }?>
 
 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp13=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp14=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp15=ob_get_clean();?><?php if ((($_tmp13%3)==2)&&($_tmp14>3)&&($_tmp15<7)){?>

<td class="Ccol3"> <a href="http://stores.ebay.com.au/Different-Gifts-Qld/Gifts-/_i.html?_fsub=623641119&_sid=310554049&_trksid=p4634.c0.m322"><?php echo $_smarty_tpl->tpl_vars['category']->value['c_name'];?>
</a> </td>
 </tr>
 <?php }?>



<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp16=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp17=ob_get_clean();?><?php if ((($_tmp16%3)==0)&&($_tmp17>6)){?>
<tr>
<td class="Ccol1"> <a href="http://stores.ebay.com.au/Different-Gifts-Qld/Gifts-/_i.html?_fsub=623641119&_sid=310554049&_trksid=p4634.c0.m322"><?php echo $_smarty_tpl->tpl_vars['category']->value['c_name'];?>
</a> </td>
 <?php }?>

 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp18=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp19=ob_get_clean();?><?php if ((($_tmp18%3)==1)&&($_tmp19>6)){?>

<td class="Ccol2"> <a href="http://stores.ebay.com.au/Different-Gifts-Qld/Gifts-/_i.html?_fsub=623641119&_sid=310554049&_trksid=p4634.c0.m322"><?php echo $_smarty_tpl->tpl_vars['category']->value['c_name'];?>
</a> </td>
 <?php }?>
 
 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp20=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
<?php $_tmp21=ob_get_clean();?><?php if ((($_tmp20%3)==2)&&($_tmp21>6)){?>

<td class="Ccol3"> <a href="http://stores.ebay.com.au/Different-Gifts-Qld/Gifts-/_i.html?_fsub=623641119&_sid=310554049&_trksid=p4634.c0.m322"><?php echo $_smarty_tpl->tpl_vars['category']->value['c_name'];?>
</a> </td>
 </tr>
 <?php }?>





<?php } ?>
</table>
 <?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
</body>
</html><?php }} ?>