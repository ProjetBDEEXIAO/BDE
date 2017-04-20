<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="accueil.css"/>
        <title>Accueil BDE CESI</title>
    </head>

    <body>
	
	<!-- Open the markup php to include the header of the page -->
	<?php include("Header.php")?>
		
		<!-- Open the markup div to realize the carrousel for the activities -->
		<div id="sliderActivites">
		  <figure>
			<img src="image1.jpg">
			<img src="image2.jpg">
			<img src="image1.jpg">
		  </figure>
		</div>	
		
		<!-- Open the markup div to realize the carrousel for the gallery -->
		<div id="sliderPhotos">
		  <figure>
			<img src="image4.jpg">
			<img src="image5.jpg">
			<img src="image4.jpg">
		  </figure>
		</div>

		<!-- Open the markup div to realize the carrousel for the store -->
		<div id="sliderBoutique">
		  <figure>
			<img src="image6.jpg">
			<img src="image7.jpg">
			<img src="image6.jpg">
		  </figure>
		</div>
	
	<!-- Open the markup php to include the footer of the page -->
    <?php include("Footer.php")?>
    </body>
</html>
