<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Register</title>
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

<h1 class="CH"> Please enter the special code we sent to you through email. </h1>
<div class="CH"> <form method="post" action="checkCodeAction.php">    
    <input type="hidden" name="originalCode" value="{$originalCode.code}">
    <input type="text" name="code"><br>
    <input type="submit" value="insert">
    </form></div>
<div class="redNotice">{if $error} ERROR:{$error}  {/if}  <br>
{include 'footer.tpl'}	
</body>
</html>