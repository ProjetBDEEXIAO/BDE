<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="activites.css" />
        <title>Activit�s</title>
    </head>

    <body>
	<?php include("Header.php")?>
		<h2 id="ActProp">Activit�s propos�es</h2>
		<fieldset>
		<legend>Bowling</legend>
		<p>Soir�e Bowling de fin d'ann�e pour d�compr�sser avant le stage que j'ai toujours pas.</p>
		<form method="post" action="">
			<p>
				<select name="Date">
					<option value="">Date1</option>
					<option value="">Date2</option>
					<option value="">Date3</option>
				</select>

				<input type="submit" value="Voter" title="voter pour la date de l'activit�" />
				Nombre de votes : actualiser avec la BDD
			</p>
		</form>
		</fieldset>

		<h2 id="PropAct">Proposer une activit�</h2>
		<form action="" method="post">
			<fieldset>
				<legend>Formulaire de proposition</legend>
				<form method="post" action="traitement.php">
					<p>
						<label>Activit�</label> : <input type="text" name="activit�"/></br>
						<label for="descriptif">Descriptif</label></br>
						<textarea name="descriptif" id="descriptif" rows="5" cols="70"></textarea>
					</p>
				</form>
				<input type="submit" value="Envoyer" />
			</fieldset>
		</form>

		
		<h2 id="Histo">Historique des activit�s</h2>
			<fieldset>
				<legend>Piscine</legend>
				<p>C'�tait trops bien <img src="image3.jpg" alt="Piscine" id="piscine"/></p>
		</fieldset>
		
    <?php include("Footer.php")?>	
    </body>
</html>