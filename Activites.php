<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="activites.css" />
        <title>Activités</title>
    </head>

    <body>
	<?php include("Header.php")?>
		<h2 id="ActProp">Activités proposées</h2>
		<fieldset>
		<legend>Bowling</legend>
		<p>Soirée Bowling de fin d'année pour décomprésser avant le stage que j'ai toujours pas.</p>
		<form method="post" action="">
			<p>
				<select name="Date">
					<option value="">Date1</option>
					<option value="">Date2</option>
					<option value="">Date3</option>
				</select>

				<input type="submit" value="Voter" title="voter pour la date de l'activité" />
				Nombre de votes : actualiser avec la BDD
			</p>
		</form>
		</fieldset>

		<h2 id="PropAct">Proposer une activité</h2>
		<form action="" method="post">
			<fieldset>
				<legend>Formulaire de proposition</legend>
				<form method="post" action="traitement.php">
					<p>
						<label>Activité</label> : <input type="text" name="activité"/></br>
						<label for="descriptif">Descriptif</label></br>
						<textarea name="descriptif" id="descriptif" rows="5" cols="70"></textarea>
					</p>
				</form>
				<input type="submit" value="Envoyer" />
			</fieldset>
		</form>

		
		<h2 id="Histo">Historique des activités</h2>
			<fieldset>
				<legend>Piscine</legend>
				<p>C'était trops bien <img src="image3.jpg" alt="Piscine" id="piscine"/></p>
		</fieldset>
		
    <?php include("Footer.php")?>	
    </body>
</html>