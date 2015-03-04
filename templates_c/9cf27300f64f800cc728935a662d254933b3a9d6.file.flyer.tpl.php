<?php /* Smarty version Smarty-3.1.13, created on 2013-06-07 20:19:45
         compiled from "./templates/flyer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180217189251b2a267cc0015-12626167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cf27300f64f800cc728935a662d254933b3a9d6' => 
    array (
      0 => './templates/flyer.tpl',
      1 => 1370661583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180217189251b2a267cc0015-12626167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b2a267d649a7_99380422',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b2a267d649a7_99380422')) {function content_51b2a267d649a7_99380422($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Welcome to The Different Gifts</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>




<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	








<h3>Send your flyer here </h3>
<form method="post" action="send_flyer_action.php" enctype="multipart/form-data">   
   

	 <input type="text" name="title"> (email title)<br>
	 <input type="text" name="email"> (receiver email)<br>
	 
     <textarea name="text">Enter text here...</textarea><br>
	 
	 Image file: (.jpg image only)<input type="hidden" name="MAX_FILE_SIZE" value="1000000"><input type="file" name="userfile" size=30> <br>


	
   <input type="submit" value="send"> 
   <input type="reset"  name="reset"  value="Reset">

</form>






	
	

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


</body>
</html><?php }} ?>