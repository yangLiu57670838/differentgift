<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Welcome to The Different Gifts</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <link rel="stylesheet" href="css/style.css" type="text/css" />
  
<script src="jquery-1.11.1.min.js" type="text/javascript"></script>
 <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
	<script src="animate-bg.js" type="text/javascript"></script>
	<script src="scripts.js" type="text/javascript"></script>
    <script type="text/javascript" src="jquery.color.js"></script>
    <script type="text/javascript" src="jquery.bgpos.js"></script>
<script src="subscribepopup.js" type="text/javascript"></script>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBTDDIV3Cf_sCT9cvuXWtkhHmIHiQ9y_wk&sensor=false">
</script>

<script>
var myCenter=new google.maps.LatLng(-27.629633, 153.052420);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"Find my location!"
  });

google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });
  
}

google.maps.event.addDomListener(window, 'load', initialize);
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
$(document).ready(function(){
  $("#box1").mouseenter(function()
  {
    $(this).animate({
            marginLeft : "120px"
        },1000);
  });
  
   $("#box1").mouseout(function()
  {
    $(this).animate({
            marginLeft : "-4px"
        },800);
  });
  
  
});
</script>



  <script>
  function showHint(str)
  {
   if (str.length==0)
    {
	   document.getElementById("txtHint").innerHTML="";
	   return;
	}
	var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","gethint.php?q="+str,true);
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

<script type="text/javascript">

				function ValidatesubscribeForm()
				{
					
					

					var error="";

					var email = document.subscribeForm.email;

					if (email.value == "" || email.value == null)
					{
						error+="Please enter your email address.\n";
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



</head>




<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=543954765714484&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="message">
			Welcome to Different Gifts!
		</div>	
{include 'header.tpl'}	


<div class="box1" id="box1" >


 <img src="email.png" alt="email me" title="email me" width="165px" />
 
</div>  

<div id="popupContact">
		<a id="popupContactClose">x</a>
		<h1>Hi, Tell me your email address.</h1>
		<p id="contactArea">
			
		</p>
		<form method="get" action="subscribe_action.php" Name="subscribeForm" onSubmit="return ValidatesubscribeForm()">
      <table class="bordered"> 
        
          <tr>
            <td class="col1"> Email </td>
			<td class="col2"> <input type="text" name="email" size=30> </td>
							
        </tr>
	
		
        <tr>
            <td colspan=2 style="text-align: center"> 
                <input type="submit" name="submit" value="Subscribe">
            </td>
        </tr>
				
	

		
		
      </table>
      </form>
	  
		
	</div>
	<div id="backgroundPopup"></div>

	

			
		<form method="get" action="categoriesSearch.php" class="form-wrapper">

	     <input type="text" name="search" id="search" onkeyup="showHint(this.value)" placeholder="Search for the categories">
	   <input type="submit" id="s_submit" value="Go" />
  </form>
<p> <span id="txtHint"></span></p>

		
	
<br>

<br>
<div id="content">
		
		

		
		
		
		<div style="margin:30px auto;max-width:800px;">
    
  
    <div id="amazingslider-1" style="display:block;position:relative;margin:16px auto 56px;">
        <ul class="amazingslider-slides" style="display:none;">
            <li><img src="things-to-do-in-Brisbane.jpg" alt="Things to do here" /></li>
            <li><img src="Brisbane-Pelicans-at-Bretts-Wharf-Queensland-Australia.jpg" alt="Pelicans here" /></li>
            <li><img src="Brisbane.jpg" alt="Bridge here" /></li>
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none;">
            <li><img src="getImage.php" /></li>
            <li><img src="getImage2.php" /></li>
            <li><img src="getImage3.php" /></li>
        </ul>
       
    </div>
  
    
</div>
		
	
	
	<ul id="scrolling">
	
	<li class=""><a href="index.html"></a></li>
	
	<li class="">
	  <div style="width:1000px; height: 80px; text-align:center; border: solid 0px #C0C0C0; background: #FFFFFF; padding: 0px;
  color: #000000; font-size: 12px"><CENTER><strong></strong></CENTER>
 <!-- Change marquee direction height and speed below Change image link and image with yours below -->
    <marquee onmouseover='this.stop();' onmouseout='this.start();' direction="right" height="100"  scrollamount="2" >
	
	
	<table>
<tr>
<td><div id="picture scroll"><img src="getImage.php" width="80" height="70" alt="Scrolling Images" border="1"/></a></div></td>
<td><div id="picture scroll"><img src="getImage2.php" width="80" height="70" alt="Scrolling Images" border="1"/></a></div></td>
<td><div id="picture scroll"><img src="getImage3.php" width="80" height="70" alt="Scrolling Images" border="1"/></a></div></td>
<td><div id="picture scroll"><img src="getImage4.php" width="80" height="70" alt="Scrolling Images" border="1"/></a></div></td>
<td><div id="picture scroll"><img src="getImage5.php" width="80" height="70" alt="Scrolling Images" border="1"/></a></div></td>
<td><div id="picture scroll"><img src="getImage6.php" width="80" height="70" alt="Scrolling Images" border="1"/></a></div></td>
</tr>
</table> 
</marquee>
 </div>
 <!-- Scrolling Images End --> 
	
	</li>

	</ul>
		


{include 'footer.tpl'}	


</body>
</html>