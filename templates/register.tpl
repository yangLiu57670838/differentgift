<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Register</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <link rel="stylesheet" href="css/style.css" type="text/css" />
   <link rel="stylesheet" href="jquery-ui.css">
<script src="jquery-ui.js"></script>
  


  <script src="jquery-1.11.1.min.js"></script>



	<script type="text/javascript">

				function ValidateContactForm()
				{
					
					

					var error="";

					var numbers = /^[-+]?[0-9]+$/;
					var post = /^[0-9]+$/;
					var password = document.ContactForm.password;
					var phone = document.ContactForm.phone;
					var postCode = document.ContactForm.postCode;
					var email = document.ContactForm.email;


					
					if (password.value == "" || password.value == null || password.value.length < 4)
					{
						error+="Please enter a long password.\n";
						password.focus();
						//return false;
					}
					if (email.value == "" || email.value == null)
					{
						error+="Please enter your email address.\n";
						email.focus();
						//return false;
					}
									if (phone.value == "" || phone.value == null || (!phone.value.match(numbers)))
					{
						error+="Please enter correct phone number.\n";
						phone.focus();
						//return false;
					}
									if (postCode.value == "" || postCode.value == null || (!postCode.value.match(post)))
					{
						error+="Please enter correct post code.\n";
						postCode.focus();
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
	
	<script>
        function OnChangeCheckbox (checkbox) {
            if (checkbox.checked) {
                document.getElementById("myBtn").disabled=false;
            }
            else {
                document.getElementById("myBtn").disabled=true;
            }
        }
    </script>
	

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
  
  
  <script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
	  
    }
  }
  xmlhttp.open("GET","geth.php?q="+str,true);
  xmlhttp.send();
}
  </script>
  
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-51346217-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script>
function personController($scope) {
    
    $scope.myVar = false;
    $scope.toggle = function() {
        $scope.myVar = !$scope.myVar;
    };
}
</script> 

<script src="angular.js"></script>



</head>




<body>

{include 'header.tpl'}	


<div id="Rforms">

{if $error}
   <div class="redNotice"> <h3>{$error}</h3></div>
{/if}
<h3>register<br></h3>

<form method="get" action="register_action.php" Name="ContactForm" onSubmit="return ValidateContactForm()">
      <table class="bordered"> 
        
        <tr>
            <td class="col1"> User Name *</td>
			<td class="col2"> <input type="text" name="Uname" size=30  onkeyup="showResult(this.value)"> </td>
			<td><div id="livesearch"></div> </td>			
        </tr>
 
         
 
          <tr>
            <td class="col1"> Email *</td>
			<td class="col2"> <input type="text" name="email" size=30> </td>
							
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
          
		  <td> 
		  <a href="policyCondition.php">I accept all terms and conditions
		  </td>
		  <td><input type="checkbox" onclick="OnChangeCheckbox (this)" id="myCheckbox" /></td>
		</tr>
		
        <tr>
            <td colspan=2 style="text-align: center"> 
                <input type="submit" name="submit" value="Submit" id="myBtn" disabled=true>
            </td>
        </tr>
				
	

		
		
      </table>
      </form>
	  
	  
	  
	  <div ng-app="" ng-controller="personController">

<button ng-click="toggle()">Registration Details</button>

<p ng-show="myVar"> <!-- ng-show directive defines the visibility of an application -->
User Name must be unique,<br>
You will receive an email after registration, <br>
password must meet complexity requirements.
</p>

</div>
	  
	  
	  

	 <h1> If you have already become a registerd member</h1>
      <h3> login below</h3>	 
	  
	  <form method="get" action="login_action.php">     
    
    User Name:  <input type="text" name="userName"></br>
	Password:  <input type="password" name="password"></br>
	<div class="redNotice">{if $error2} Message:{$error2}  {/if}  <br>
	
	
   <input type="submit" value="login"> 

</form>
	  </div>



{if $login}
<a href="signout.php">Sign out</a>

{/if}



{include 'footer.tpl'}	


</body>
</html>