<?php

//Initialize the connection to the DB
session_start();
// =================== DATABASE CONNECTOR ======================== //
try {
    $conn = new PDO('mysql:host=localhost;dbname=website_project', "root", "");
}catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

//Creation of a variable, it contains the prepared querie who display the event_bde table
$get_all_activities=$conn->prepare("SELECT * FROM event_bde");
$get_all_activities->execute();

//Creation of a variable, it contains the prepared querie who display the proposition table
$get_all_activities1=$conn->prepare("SELECT * FROM propos_activity");
$get_all_activities1->execute();

// =============================================================== //
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="activites.css" />
        <title>Activités</title>
    </head>
	
	<script>
	<!-- Use a script for the function who update the vote -->
		function add_vote(id_event)
		{
			document.getElementById("vote_1_"+id_event).value+1;
		}
	</script>

    <body>
	<!-- Open the markup php to include the header of the page -->
	<?php include("Header.php")?>
		<h2 id="ActProp">Activités proposées</h2>

		
		<?php

		//Loop for fill the field "Activités proposées" withe the number's vote and the posibility to choose an activity
		while($rs=$get_all_activities->fetch())
		{		
			echo	'<fieldset>';
			echo		'<legend>'.$rs["activity_name"].'</legend>';
			echo		'<p>'.$rs["detail_text"].'</p>';
			echo		'<form method="post" action="">';
			echo		'<p>';
			echo			'<select name="Date">';
			echo				'<option value="">'.$rs["event_date1"].'</option>';
			echo			'</select>';
			echo			'<input type="submit" id="vote_1_'.$rs["id_event"].'" value="Voter" onclick="add_vote(vote_1_'.$rs["id_event"].');" title="voter pour la date de l\'activité" />';
			echo			'   Nombre de votes : '.$rs["vote1"].'<br><br>';
			echo			'<select name="Date">';
			echo				'<option value="">'.$rs["event_date2"].'</option>';
			echo			'</select>';	
			echo			'<input type="submit" id="vote_2_'.$rs["id_event"].'" value="Voter" onclick="add_vote(vote_2_'.$rs["id_event"].');" title="voter pour la date de l\'activité" />';
			echo			'   Nombre de votes : '.$rs["vote2"].'';
			echo		'</p>';
			echo		'</form>';
			echo	'</fieldset>';
		}
		
		?>
		
		
		
		
		
		


		<h2 id="PropAct">Proposer une activité</h2>
		
		<?php
		
		//Form who permit to propose an activity with a description and an id
		$rs1=$get_all_activities1->fetch();
		
		echo	'<form action="" method="get">';
		echo		'<fieldset>';
		echo		'<legend>Formulaire de proposition</legend>';
		echo			'<form method="get">';
		echo				'<p>';
		echo					'<label>Activité</label> : <input type="text" name="activity_proposed" value="'.$rs1["activity_proposed"].'"required></br>';
		echo					'<label for="descriptif">Descriptif</label></br>';
		echo					'<input name="description_text" id="descriptif" value="'.$rs1["description_text"].'"required>';
		echo					'<input name="id_users" id="id_users" value="'.$rs1["id_users"].'" required>';
		echo				'</p>';
		echo			'</form>';
		echo			'<input type="submit" value="Envoyer" />';
		echo		'</fieldset>';
		echo	'</form>';
		
		//If the field is fill you can realize the insert into
		if(isset($_GET['activity_proposed']) && isset($_GET['description_text']) && isset($_GET['id_users']))
		{
			$activity_proposed = htmlspecialchars($_GET['activity_proposed']);
			$description_text = htmlspecialchars($_GET['description_text']);
			$id_users = htmlspecialchars($_GET['id_users']);
			$insert=$conn->prepare("INSERT INTO propos_activity (id_propos, activity_proposed, description_text, id_users) VALUES (NULL, ?, ?, ?);");
			$insert->bindParam(1, $activity_proposed);
			$insert->bindParam(2, $description_text);
			$insert->bindParam(3, $id_users);
			$insert->execute();
		}
		?>

		<h2 id="Histo">Historique des activités</h2>
		
		<?php
		//Display the last activity with a photo
		echo	'<fieldset>';
		echo		'<legend>Piscine</legend>';
		echo		'<p>C\'était trops bien <a href="Galerie.php"><img src="image3.jpg" alt="Piscine" id="piscine"/></a></p>';
		echo	'</fieldset>';
		?>
	<!-- Open the markup php to include the footer of the page -->
    <?php include("Footer.php")?>	
    </body>
</html>