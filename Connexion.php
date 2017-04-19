<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Connexion BDE CESI Orléans</title>
	<link rel="stylesheet" type="text/css" href="CSSConnexion.css">
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
	<header>
		<h1>BDE <br> CESI <br> Orléans</h1>
		<img src="Logo.png" />
	</header>
	<body>
		<section>
			<fieldset>
			<p>Se connecter</p>
			<form method="post">
			<label>Adresse Mail : <br/><input type="text" name="email"/></label><br/><br/>
			<label>Mot de passe : <br/><input type="text" name="password"/></label><br/><br/>
			<input type="submit" value="Se connecter"/>
			</form><br>
			<a href="Accueil.php"><input type="button" name="simplecnx" value="Visiteur simple"></a>

			<?php 
			// Connexion to the database
			mysql_connect("localhost", "root", "");
			mysql_select_db("projetbde");

			$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
			$passsword = mysql_real_escape_string(htmlspecialchars($_POST['password']));
			//Password encryption
			$password = sha1($password);
			$nbre = mysql_query("SELECT COUNT(*) AS exist FROM users WHERE login='$email'");
			$donnees = mysql_fetch_array($nbre);
			if($donnees['exist'] != 0) //If Email exist
			{
				$request = mysql_query("SELECT * FROM users WHERE email='$login'");
				$sendRequest = mysql_fetch_array($request);
				if($password == $sendRequest['password'])
				{
					// C'est ici que je mets le code servant à effectuer la connexion, car le mot de passe est bon.
				}
				else // error, wrong Email or Password
				{
				echo 'Vous n\'avez pas rentré les bons identifiants';
				}
			}
			?>
			<!--<p>Identifiant :</p>
			<div><input type="text" name="adresse mail"></div>
			<p>Mot de passe :</p>
			<div><input type="password" name="password"></div>
			</br>-->
				<!-- retravailler btn (voir screen) -->
			<!--<div><input type="button" name="Accueil.php " value="Visiteur simple" onclick="self.location.href='Accueil.php'">  <input type="button" name="Register.php" value="inscription" onclick="self.location.href='Accueil.php'"></div><br>-->
			</fieldset>
		</section>
	</body>
</html>