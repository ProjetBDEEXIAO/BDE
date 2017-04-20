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
	<!-- Page use for the sign in -->

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
			<!-- Formulary using the get method, contain all the informations required for the connexion -->
			<form method="post">
			<label>Adresse Mail : <br/><input type="text" name="email"/></label><br/><br/>
			<label>Mot de passe : <br/><input type="password" name="password"/></label><br/><br/>
			<input type="submit" value="Se connecter"/>
			</form><br>
			<!-- Two buttons use to redirect the user to the inscription form or the main page if he don't have an account -->
			<a href="register.php"><input type="button" name="register" value="Inscription"></a><br/><br/>	
			<a href="Accueil.php"><input type="button" name="simplecnx" value="Visiteur simple"></a><br/>
			<?php
			//check if the email and password field are fulfil//
			if(isset($_POST['email']) && isset($_POST['password'])){
				//check for special caracter that might entail a SQL Injection//
				$email = htmlspecialchars($_POST['email']);
				$password = htmlspecialchars($_POST['password']);
				//prepare the SQL query//
				$check_user = $cnx->prepare('SELECT id_users FROM users WHERE password = :password AND email = :email');
				//retrieve the result of the SQL query//
				$check_user->execute(array(
					':password' => md5($password), 
					':email' => $email
				));
				//If their is a result (if the user exist) redirect to the main page//
				if($result = $check_user->fetch()){
					header('Location: Accueil.php');
				}
			}
			?>
			</fieldset>
		</section>
	</body>
</html>