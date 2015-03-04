<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Welcome to The Different Gifts</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <script src="jquery-1.11.1.min.js"></script>
  
  
  
  
  <script>
$(document).ready(function(){
  $("#logo").mouseenter(function()
  {
    $(this).animate({
            marginLeft : "-180px"
        },7000);
  });
  
  
});
</script>
</head>




<body>
{include 'header.tpl'}	



	

<h1> Front Page Modification </h1></br> 

<table>
<tr>
<td>
<h3>Add new Scorlling Images: (.jpg) ==> </h3>

<form method="post" action="scrollingImage_action.php" enctype="multipart/form-data">   
   
    
	 Image file 1: <input type="hidden" name="MAX_FILE_SIZE" value="2000000"><input type="file" name="userfile" size=30> <br>

   <input type="submit" value="AddImage1"> 
   <input type="reset"  name="reset"  value="Reset">

</form>
</td>
<td>
<img src="getImage.php" width="200" height="150" alt="Scrolling Images" border="1"/>
</td>
<td>
<h3>Add new Scorlling Images2: ==></h3>
<form method="post" action="scrollingImage_action2.php" enctype="multipart/form-data">   
   
    
	 Image file 2: <input type="hidden" name="MAX_FILE_SIZE" value="2000000"><input type="file" name="userfile2" size=30> <br>

   <input type="submit" value="AddImage2"> 
   <input type="reset"  name="reset"  value="Reset">

</form>
</td>
<td>
<img src="getImage2.php" width="200" height="150" alt="Scrolling Images" border="1"/>
<td></tr>
<tr>
<td>
<h3>Add new Scorlling Images3: ==></h3>
<form method="post" action="scrollingImage_action3.php" enctype="multipart/form-data">   
   
    
	 Image file 3: <input type="hidden" name="MAX_FILE_SIZE" value="2000000"><input type="file" name="userfile3" size=30> <br>

   <input type="submit" value="AddImage3"> 
   <input type="reset"  name="reset"  value="Reset">

</form>
</td>
<td>
<img src="getImage3.php" width="200" height="150" alt="Scrolling Images" border="1"/>
</td>
<td>
<h3>Add new Scorlling Images4: ==></h3>
<form method="post" action="scrollingImage_action4.php" enctype="multipart/form-data">   
   
    
	 Image file 4: <input type="hidden" name="MAX_FILE_SIZE" value="2000000"><input type="file" name="userfile4" size=30> <br>

   <input type="submit" value="AddImage4"> 
   <input type="reset"  name="reset"  value="Reset">

</form>
</td>
<td>
<img src="getImage4.php" width="200" height="150" alt="Scrolling Images" border="1"/>
</td>
</tr>
<tr><td>
<h3>Add new Scorlling Images5: ==></h3>
<form method="post" action="scrollingImage_action5.php" enctype="multipart/form-data">   
   
    
	 Image file 5: <input type="hidden" name="MAX_FILE_SIZE" value="2000000"><input type="file" name="userfile5" size=30> <br>

   <input type="submit" value="AddImage5"> 
   <input type="reset"  name="reset"  value="Reset">

</form>
</td>
<td>
<img src="getImage5.php" width="200" height="150" alt="Scrolling Images" border="1"/>
</td>
<td>
<h3>Add new Scorlling Images6: ==></h3>
<form method="post" action="scrollingImage_action6.php" enctype="multipart/form-data">   
   
    
	 Image file 6: <input type="hidden" name="MAX_FILE_SIZE" value="2000000"><input type="file" name="userfile6" size=30> <br>

   <input type="submit" value="AddImage6"> 
   <input type="reset"  name="reset"  value="Reset">

</form>
</td>
<td>
<img src="getImage6.php" width="200" height="150" alt="Scrolling Images" border="1"/>
</td>
</tr>
</table>
{include 'footer.tpl'}	


</body>
</html>