<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Boutique BDE CESI Orléans</title>
	<link rel="stylesheet" type="text/css" href="CSSShop.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
</head>
<body>
	<?php include("Header.php"); ?>
		<aside>
		<fieldset>
			<div class="panier">
				<p>Détail de votre panier :</p>
				<!-- Implémentation du pannier -->			
			</div>
			
		</fieldset>
	</aside>
	<fieldset>
		<img class="articlePic" src="article1.png">
		<article>
			<h2>Nom article 1</h2>
			<p>Description :<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat erat eget enim cursus pharetra non nec urna. Sed egestas auctor accumsan. Nam quis dictum odio, quis blandit sem. Nunc.</p>
			<p>Quantité :</p>
			<input class="quantities" type="text" name="quantities">
			<br>
			<input id="addtocart" type="button" name="addcart" value="ajouter au pannier">
		</article>
	</fieldset>
	<fieldset>
		<img class="articlePic" src="article2.png">
		<article>
			<h2>Nom article 2</h2>
			<p>Description :<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat erat eget enim cursus pharetra non nec urna. Sed egestas auctor accumsan. Nam quis dictum odio, quis blandit sem. Nunc.</p>
			<p>Quantité :</p>
			<input class="quantities" type="text" name="quantities">
			<p>Choix de la taille :</p>
			<select name="clothesSize" size="1">
				<option>S</option>
				<option>M</option>
				<option>L</option>
				<option>XL</option>
				<option>XXL</option>
			</select>
			<input id="addtocart" type="button" name="addcart" value="ajouter au pannier">
		</article>
	</fieldset>

	<!--<?php include("Footer.php"); ?>-->
</body>
</html>