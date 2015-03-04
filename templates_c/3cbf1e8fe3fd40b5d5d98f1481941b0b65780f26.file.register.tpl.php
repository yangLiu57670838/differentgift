<?php /* Smarty version Smarty-3.1.13, created on 2014-04-24 23:11:46
         compiled from "./templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164737151551a56783839121-59465979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cbf1e8fe3fd40b5d5d98f1481941b0b65780f26' => 
    array (
      0 => './templates/register.tpl',
      1 => 1398406304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164737151551a56783839121-59465979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a56783919207_03494892',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a56783919207_03494892')) {function content_51a56783919207_03494892($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
	<script type="text/javascript">

				function ValidateContactForm()
				{
					
					

					var error="";
	                var surname = document.ContactForm.Lname;
					var firstname = document.ContactForm.Fname;
					var password = document.ContactForm.password;
					var phone = document.ContactForm.phone;
					var postCode = document.ContactForm.postCode;
					var email = document.ContactForm.email;


   
					if (surname.value == "" || surname.value == null)
					{
						error+="Please enter your surname.";
						surname.focus();
						//return false;
					}
					if (firstname.value == "" || firstname.value == null)
					{
						error+="Please enter your firstname.";
						firstname.focus();
						//return false;
					}						
					if (password.value == "" || password.value == null)
					{
						error+="Please enter your password.";
						password.focus();
						//return false;
					}
					if (email.value == "" || email.value == null)
					{
						error+="Please enter your email address.";
						email.focus();
						//return false;
					}
									if (phone.value == "" || phone.value == null)
					{
						error+="Please enter your Phone Number.";
						email.focus();
						//return false;
					}
									if (postCode.value == "" || postCode.value == null)
					{
						error+="Please enter your post code.";
						email.focus();
						//return false;
					}
					
					
					
					
				
					
			
				
					if (error== "" ||error == null)
					{
						return true;
					}
					else
					{
						alert(error);
						return false;
					
					}
				}
				
	
	</script>


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
	


<div id="Rforms">

<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
   <div class="redNotice"> <h3><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3></div>
<?php }?>
<h3> input 4 digits as password please</h3>
<form method="get" action="register_action.php" Name="ContactForm" onSubmit="return ValidateContactForm()">
      <table class="bordered"> 
        
        <tr>
            <td class="col1"> First Name *</td>
			<td class="col2"> <input type="text" name="Fname" size=30> </td>
							
        </tr>
 
                   <tr>
            <td class="col1"> Last Name *</td>
			<td class="col2"> <input type="text" name="Lname" size=30> </td>
							
        </tr>
 
 
	
     
		 <tr>
            <td class="col1"> Phone Number *</td>
			<td class="col2"> <input type="text" name="phone" size=15> </td>
							
        </tr>
		
				 <tr>
            <td class="col1"> Password *</td>
			<td class="col2"> <input type="text" name="password" size=15> </td>
							
        </tr>
		
		 <tr>
            <td class="col1"> Post Code *</td>
			<td class="col2"> <input type="text" name="postCode" size=15> </td>
							
        </tr>
         <tr>
            <td class="col1"> Email *</td>
			<td class="col2"> <input type="text" name="email" size=30> </td>
							
        </tr>
		
		<tr>
            <td class="col1"> want to receive the flyer? </td>
            <td class="col2">
			<input type="radio" id="accept" onclick="document.getElementById('dropdown').style.display = 'block', document.getElementById('decline').checked = 0"> I ACCEPT<br>
            <input type="radio" id="decline" onclick="document.getElementById('dropdown').style.display = 'none',document.getElementById('accept').checked = 0"> I DECLINE<br>


<div id="dropdown" style="display:none">
	
	<h3>Select your favorite type of products</h3>
	We would like to send you the last price<br>
<div class="container">
    <input type="checkbox" /> Jewellery <br />
    <input type="checkbox" /> Water Crystals <br />
    <input type="checkbox" /> Coasters <br />
    <input type="checkbox" /> Pillow/Baskets <br />

</div>
</div>
                
            </td>
        </tr>

        <tr>
            <td colspan=2 style="text-align: center"> 
                <input type="submit" name="submit" value="Submit">
                <input type="reset"  name="reset"  value="Reset">
            </td>
        </tr>
				
	

		
		
      </table>
      </form>

	 <h1> If you have already become a registerd member</h1>
      <h3> login below</h3>	 
	  
	  <form method="get" action="login_action.php">     
    
    email:  <input type="text" name="email"></br>
	Password:  <input type="password" name="password"></br>
	<div class="redNotice"><?php if ($_smarty_tpl->tpl_vars['error']->value){?> ERROR:<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
  <?php }?>  <br>
	
	
   <input type="submit" value="login"> 

</form>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  </div>




<a href="register.php">Sign out</a>













<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


</body>
</html><?php }} ?>