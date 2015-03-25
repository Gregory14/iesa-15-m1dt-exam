<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	if (isset($_POST['searchPlanet'])) {
		$fichier = 'planetes.xml';
		$xml = simplexml_load_file($fichier);
		
		foreach($xml as $planete){ 
			//return $planete->nom;
			
			if ($planete->nom == $_POST['searchPlanet']) {
				// header('Location: index.php?searchPlanet='.$_POST['searchPlanet']);
				echo "Tu es un champion mon gars :) !";
			}
			else {
				echo "Bad !";
			}
			//var_dump($planete->nom);
		}
	}
?>
</body>
</html>