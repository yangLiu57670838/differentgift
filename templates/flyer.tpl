<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Welcome to The Different Gifts</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>




<body>
{include 'header.tpl'}	








<h3>Send your flyer here </h3>
<form method="post" action="send_flyer_action.php" enctype="multipart/form-data">   
   

	 <input type="text" name="title"> (email title)<br>
	 <input type="text" name="email"> (receiver email)<br>
	 
     <textarea name="text">Enter text here...</textarea><br>
	 
	 Image file: (.jpg image only)<input type="hidden" name="MAX_FILE_SIZE" value="1000000"><input type="file" name="userfile" size=30> <br>


	
   <input type="submit" value="send"> 
   <input type="reset"  name="reset"  value="Reset">

</form>






	
	

{include 'footer.tpl'}	


</body>
</html>