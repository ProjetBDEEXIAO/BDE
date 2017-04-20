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
$get_all_pictures=$conn->prepare("SELECT * FROM picture");
$get_all_pictures->execute();
// =============================================================== //
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="galerie.css"/>
        <title>Galerie</title>
    </head>

    <body>
	<?php include("Header.php")?>
	<?php

		//Loop for fill the field "Activités proposées" withe the number's vote and the posibility to choose an activity
			
			echo '<aside>';
			echo	'<ul>Historique des evénements';
					while($rs=$get_all_pictures->fetch())
					{
			echo		'<li><a href="#'.$rs["uploading_date"].'">'.$rs["uploading_date"].'</a></li>';
					}
			echo	'</ul>';
			echo '</aside>';
			$get_all_pictures->execute();
					while($rs=$get_all_pictures->fetch())
					{
			echo		'<h3 id="'.$rs["uploading_date"].'">'.$rs["uploading_date"].'</h3>';
			echo		'<img src="image1.jpg">';
			echo		'<img src="image2.jpg">';
			echo		'<img src="image4.jpg">';
			echo		'<img src="image5.jpg">';
					}
		?>
	<?php include("Footer.php")?>
    </body>
</html>