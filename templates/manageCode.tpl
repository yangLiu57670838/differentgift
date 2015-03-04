<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Welcome to The Different Gifts</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>




<body>
{include 'header.tpl'}	






<h3>your original special code is:  {$originalCode.code}</h3>


<h3>input the new special code below: </h3>
<form method="post" action="add_code_action.php">     
    
    <input type="text" name="code">
	<div class="redNotice">{if $error} ERROR:{$error}  {/if}  <br>
	
	
   <input type="submit" value="update"> 

</form>



	
	

{include 'footer.tpl'}	


</body>
</html>