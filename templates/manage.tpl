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
<?php include_once("analyticstracking.php") ?>
{include 'header.tpl'}	

<h1 class="CH" id="greeting"> Welcome!! </h1>
<script>
var dojoConfig = {
            async: true,
			baseUrl: '.',
			packages: [
			   'dojo',
			   'dijit',
			   'dojox'
            ]
        };
</script>
<script src="dojo/dojo.js"></script>
<script>
        require([  
            'dojo/dom',
			'dojo/fx', 
            'dojo/domReady!' 
        ], function (dom, fx) {
            var greeting = dom.byId('greeting');
            greeting.innerHTML += ' to manage!';
			
			 fx.slideTo({
        node: greeting,
        top: 28,
        left: 250
    }).play();
	
        });
    </script>




<table class="categoriesTable">
<tr>
<td class="Ccol1"><a href="manageScrolling.php">Scrolling Images</a></td>
<td class="Ccol2"><a href="manageCategories.php">Categories</a></td>
<td class="Ccol3"><a href="products.php?admin=true">Products</a></td></tr>
<tr>
<td class="Ccol1"><a href="manageUsers.php">Users</a></td>
<td class="Ccol2"><a href="manageCode.php">Special Code</a></td>
<td class="Ccol3"><a href="flyer_one_product.php">Flyer One</a></td>
</tr>
<tr>
<td class="Ccol1"><a href="manageRecords.php">Recent Unsigned Visitors</a></td>
</tr>
</table>

	

{include 'footer.tpl'}	


</body>
</html>