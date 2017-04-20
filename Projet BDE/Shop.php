	<!--=================== DATABASE CONNECTOR ========================-->
	<?php
	try {
		//Connexion string
	    $cnx = new PDO('mysql:host=localhost;dbname=website_project', 'root', '');
	    //The catch is used in case of an error
	}catch (PDOException $e) {
	    print "Erreur !: " . $e->getMessage() . "<br/>";
	    die();
	}
	?>

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
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
			
		</fieldset>
	</aside>

		<?php
		$shop=$cnx->prepare("SELECT * FROM store");
		$shop->execute();
		while($result=$shop->fetch())
		{	
			echo '<meta charset="utf-8"/>';
			echo	'<fieldset>';
			echo    	'<img class="articlePic" src="'.$result["product_picture"].'">';
			echo		'<article>';
			echo		'<h2>'.$result["product_name"].'</h2>';
			echo		'<p><br>Description :<p><p>'.$result["notice"].'</p>';
			echo		'<p>Quantité :</p>';
			echo			'<form method="get" action="addToCart.php"><label><input class="quantities" type="text" name="quantities"></label>';
			echo				'<br>';
			echo			'<input onclick="addtocart(\''.$result['id_store'].'\')" type="submit" value="Ajouter au panier"/>';
			echo			'</form>';
			echo			'</article>';
			echo	'</fieldset>';
		}
		?>
	<?php include("Footer.php"); ?>
</body>
</html>