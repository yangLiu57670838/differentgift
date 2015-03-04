$(document).ready(function() {
   $("#ab a").addClass("js");
   $("#ab a").hover(
          function () {
	     $(this).stop(true,true).animate({backgroundPosition:"(0 0)"}, 200);
        $(this).animate({backgroundPosition:"(0 -5px)"}, 150);
		 },
		 function () {
		     $(this).animate({backgroundPosition:"(0 -149px)"}, 200);
		 }
      
		 );
	  
	  });
