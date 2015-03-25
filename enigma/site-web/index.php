<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Le système solaire !</title>
	<link rel="stylesheet" media="screen and (min-width: 801px)" href="desktop.css">
	<link rel="stylesheet" media="screen and (max-width: 800px)" href="mobile.css">
</head>
<body>
	<div id="mainContent">
		<header>
			<img src="img/logo.png" alt="Les planètes">
			<h1>Le système solaire</h1>
		</header>

		<nav><ul>
			<li>Mercure</li>
			<li>Venus</li>
			<li>Terre</li>
			<li>Mars</li>
			<li>Jupiter</li>
			<li>Saturne</li>
			<li>Uranus</li>
			<li>Neptune</li>
		</ul></nav>
		<section>		
<?php 
	$fichier = 'planetes.xml';
	$xml = simplexml_load_file($fichier);
	foreach($xml as $planete){ ?>
	
			<div class="planet">
				<h2><?php echo $planete->nom; ?></h2>
				<img src="img/terre.jpg" alt="Nom de la planète">
				<ul>
					<li><span>Taille : </span> <?php echo $planete->taille; ?></li>
					<li><span>Distance du soleil : </span><?php echo $planete->distance; ?></li>
				</ul>
				<p><?php echo substr($planete->description, 0, 99); ?></p>
			</div>
	
	<?php }
?>
		</section>

		<footer>
			<label for="searchPlanet">Quelle planète souhaitez-vous découvrir ?</label><input type="text" name="searchPlanet">
		</footer>	
	</div>
	
</body>
</html>