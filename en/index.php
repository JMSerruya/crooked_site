<!DOCTYPE html>
<html>

<head>
	<title>Crooked Films</title>
	<?php include 'head.php'; ?> <!-- css and meta data -->
</head>

<body onresize="position();" onload="position();">

<div id="language"><a href="/crookedfilms">DA.</a></div>

<div id="visiblecontent">

	<div id="overlay"></div> <!-- used to play videos -->
	<div id="overlay2">
		<div id="logo2">CROOKED FILMS</div>
		<div id="test"></div>
	</div> <!-- used in transition to video player -->

	<div id="normalcontent">

		<div id="header">
			<div id="logoHeader">CROOKED FILMS</div>
		</div> <!-- closes header -->
		<div id="headersub">MUSIC VIDEOS FOR AMBITIOUS UP-AND-COMERS</div>
		<div class="accordion">
  			<div class="accord-header">WORK</div>
  			<div id="home" class="accord-content"><?php include 'home.php'; ?></div>
  			<div class="accord-header">INFORMATION</div>
  			<div id="information"><?php include 'information.php'; ?></div>
  			<div class="accord-header">PRODUCTS</div>
  			<div id="produkter"><?php include 'produkter.php'; ?></div>
  			<div class="accord-header">CONTACT</div>
			<div id="kontakt"><?php include 'kontakt.php'; ?></div>
		</div>
		
		<div id="footer">
			<?php include 'footer.php'; ?> <!-- social media buttons, copyright etc -->
		</div> <!-- closes footer -->
	
	</div> <!-- close normalcontent div -->

</div> <!-- close visiblecontent div -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script src="script.js"></script>

<script type="text/javascript">
   $(document).ready(function() {
     $(".accordion .accord-header").click(function() {
       if($(this).next("div").is(":visible")){
         $(this).next("div").slideUp("slow");
       } else {
         $(".accordion .accord-content").slideUp("slow");
         $(this).next("div").slideToggle("slow");
       }
     });
   });
 </script>

</body>

</html>