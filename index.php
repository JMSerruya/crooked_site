<!DOCTYPE html>
<html>

<head>
	<title>Crooked Films</title>
	<?php include 'head.php'; ?> <!-- css and meta data -->
</head>

<body onresize="position();" onload="position();">

<div id="language"><a href="http://crooked-films.com/en/">ENG.</a></div>

<div id="visiblecontent">

	<div id="overlay"></div> <!-- used to play videos -->
	<div id="overlay2">
		<div id="logo2">CROOKED FILMS</div>
		<div id="test"></div>
	</div> <!-- used in transition to video player -->

		<div id="header">
		CROOKED FILMS
		</div> <!-- closes header -->
			
		<div class="accordion">
  			<div class="accord-header">VIDEOS</div>
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

</div> <!-- close visiblecontent div -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script src="script.js"></script>
<script>
$(function() {
    $('.jcarousel').jcarousel({
        auto: 1,
        visible: 3
    });
});
</script>




</body>

</html>