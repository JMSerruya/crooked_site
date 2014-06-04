<!DOCTYPE html>
<html>

<head>
	<title>Crooked Films</title>
	<?php include 'head.php'; ?> <!-- css and meta data -->
</head>

<body onresize="position();" onload="position();">

<div id="language"><a href="http://crooked-films.com/">DA.</a></div>

<div id="visiblecontent">

	<div id="overlay"></div> <!-- used to play videos -->
	<div id="overlay2">
		<div id="logo2">CROOKED FILMS</div>
		<div id="test"></div>
	</div> <!-- used in transition to video player -->

	<div id="normalcontent">

		<div id="header">
			<?php include 'header.php'; ?> <!-- contains navigation -->
		</div> <!-- closes header -->
		
		<div id="wrapper"> <!-- all content between header and footer is here -->
			
			<div id="home"><?php include 'home.php'; ?></div>
			
			<div id="information"><?php include 'information.php'; ?></div>
			
			<div id="reference"><?php include 'work.php'; ?></div>
			
			<div id="produkter"><?php include 'produkter.php'; ?></div>
			
			<div id="kontakt"><?php include 'kontakt.php'; ?></div>
			
			<div id="handelsbetingelser"><?php include 'handelsbetingelser.php'; ?></div>
		
		</div> <!-- closes wrapper -->
		
		<div id="footer">
			<?php include 'footer.php'; ?> <!-- social media buttons, copyright etc -->
		</div> <!-- closes footer -->
	
	</div> <!-- close normalcontent div -->

</div> <!-- close visiblecontent div -->

<script type="text/javascript">
	<?php include 'script.js' ?> <!-- script common to all pages -->
</script>

</body>

</html>