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

	<!-- Page use for the sign up -->

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
			<!-- Formulary using the get method, contain allow the informations required for the sign up -->
			<form method="get">
			<label>Nom: <br/><input type="text" name="name"/></label><br/><br/>
			<label>prénom: <br/><input type="text" name="firstName"/></label><br/><br/>
			<label>Mot de passe: <br/><input type="password" name="pass"/></label><br/><br/>
			<label>Confirmation du mot de passe: <br/><input type="password" name="password"/></label><br/><br/>
			<label>Adresse e-mail: <br/><input type="text" name="email"/></label><br/><br/>
			<label>Fomation : <br/><select name="formation" size="1"><option>RH</option><option>Exia</option><option>EI</option><option>QSE</option><option>GMSI</option></select></label><br/><br/>
			<input type="submit" value="Valider"/>
			</form><br/>
			<!-- return to the connexion page -->
			<a href="Connexion.php"><input type="button" name="returnCnx" value="Se connecter"></a><br/>
			<?php
			//check if every field is fulfil//
			if(isset($_GET['name']) && isset($_GET['firstName']) && isset($_GET['pass']) && isset($_GET['password']) && isset($_GET['email'])){
				//check for special caracter that might entail a SQL Injection//
				$name = htmlspecialchars($_GET['name']);
				$firstName = htmlspecialchars($_GET['firstName']);
				$pass = htmlspecialchars($_GET['pass']);
				$password = htmlspecialchars($_GET['password']);
				$email = htmlspecialchars($_GET['email']);
				$formation = htmlspecialchars($_GET['formation']);
				//check if the two passeword are identical//
				if($pass == $password){
					//prepare the SQL query//
					$addUser = $cnx->prepare("INSERT INTO users (id_users, first_name, name, formation, email, password, premium_status) VALUES (NULL, ?, ?, ?, ?, ?, '1')");
					//Encrypt the password//
					$pass = md5($pass);
					//attribute a value to the '?' in the query preparation//
					$addUser->bindParam(1, $firstName);
					$addUser->bindParam(2, $name);
					$addUser->bindParam(3, $formation);
					$addUser->bindParam(4, $email);
					$addUser->bindParam(5, $pass);
					$addUser->execute();
					//redirect the user to the connection page//
					header('Location: Connexion.php');
				}else {
					//print a message if the password are different//
					echo "les deux mots de passe ne sont pas identiques";
				}
			}
			?>
		</section>
	</fieldset>
</body>
</html>