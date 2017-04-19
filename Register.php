<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Inscription BDE CESI Orléans</title>
	<link rel="stylesheet" type="text/css" href="CSSRegister.css">
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>
	<header>
		<h1>BDE <br> CESI <br> Orléans</h1>
		<img src="Logo.png" />
	</header>
	<fieldset>
		<section>
		<p id="phrase">Pour vous inscrire sur notre site veuillez renseigner les éléments suivants :</p>
			<form method="post">
			<label>Nom: <br/><input type="text" name="name"/></label><br/><br/>
			<label>prénom: <br/><input type="text" name="firstName"/></label><br/><br/>
			<label>Mot de passe: <br/><input type="password" name="pass"/></label><br/><br/>
			<label>Confirmation du mot de passe: <br/><input type="password" name="pass2"/></label><br/><br/>
			<label>Adresse e-mail: <br/><input type="text" name="email"/></label><br/><br/>
			<label>Fomation : <br/><select name="formation" size="1"><option>RH</option><option>Exia</option><option>EI</option><option>QSE</option><option>GMSI</option></select></label><br/><br/>
			<input type="submit" value="Valider"/>
			</form>

			<?php
			if(!empty($_POST['pseudo']))
			{

			}
			?>
			<?php
			// Connexion to the database
			try {
			    $conn = new PDO('mysql:host=localhost;dbname=projetbde', 'root', '');
			}catch (PDOException $e) {
			    print "Erreur !: " . $e->getMessage() . "<br/>";
			    die();
			}
			if($pass == $pass2)
			{

				// password encryption
				$pass = sha1($pass);
				//insertion request
				mysql_query("INSERT INTO users VALUES('', '$firstName', $name', '', '$formation', '', '', '$email', '$pass')");
			}else
			{
				echo 'Les deux mots de passe ne sont pas identiques.';
			}
			?>



			<!--<p id="phrase">Pour vous inscrire sur notre site veuillez renseigner les éléments suivants :</p>
			<p>Nom :</p>
			<input type="text" name="name">
			<p>Prénom :</p>
			<input type="text" name="firstName">
			<p>Avatar :</p>
			<input type="file" name="avatar">
			<p>Formation</p>
			<select name="Formation" size="1">
				<option>RH</option>
				<option>EXIA</option>
				<option>EI</option>
				<option>RacPi</option>
				<option>QSE</option>
				<option>GMSI</option>
			<p>Promo</p>
			</select>
			<select name="Promo" size="1">
				mettre en place IF en fonction de la formation 
			</select>
			<p>adresse Mail format CESI :</p>
			<input type="text" name="MailAdresse">
			<p>Mot de passe :</p>
			<input type="text" name="motDePasse">
			<p>Confirmer mot de passe :</p>
			<input type="text" name="confirmerMotDePasse">
			</br>
			</br>
			<input type="button" value="Valider">-->
		</section>
	</fieldset>
</body>
</html>