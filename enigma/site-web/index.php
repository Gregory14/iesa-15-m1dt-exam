<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Le système solaire !</title>
	<link rel="stylesheet" media="screen and (min-width: 801px)" href="desktop.css">
	<link rel="stylesheet" media="screen and (max-width: 800px)" href="mobile.css">
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=set_to_true_or_false"></script>
	<script>
		function displayLocation(position) {
			var centerPos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			var optionsGmaps = {
				center : centerPos,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				zoom: 15
			};
			var map = new google.maps.Map(document.getElementById('map'), optionsGmaps);
			//Marker de position
			var marker = new google.maps.Marker({
				position: centerPos,
				map: map,
				title: "Vous êtes ici"
			});
		}
		function displaySpeedLocation(position) {
			var geoInfos = "Position déterminée : <br/>";
			geoInfos += "Longitude : "+position.coords.longitude+"<br />"; 
			geoInfos += "Latitude : "+position.coords.latitude+"<br />";
			geoInfos += "Altitude : "+position.coords.altitude+"<br />";
			geoInfos += "Vitesse : "+position.coords.speed+"<br />";
			document.getElementById("geolocation").innerHTML = geoInfos;
		}
		function displayError(error){
			var info = "Erreur lors de la géolocalisation : ";
			switch(error.code) {
				case error.TIMEOUT:
					info += "Timeout !";
				break;
				case error.PERMISSION_DENIED:
					info += "Vous n'avez pas donnée la permission.";
				break;
				case error.POSITION_UNVAILABLE:
					info += "La position n'a pu être déterminée.";
				break;
				case error.UNKNOWN_ERROR:
					info += "Erreur inconnue.";
				break;
			}
			alert(info);
		}

		if (navigator.geolocation) {
			//alert('L\API de géolocalisation en HTML5 est disponible');
			navigator.geolocation.getCurrentPosition(displayLocation,displayError);

		} else {
			alert("Votre navigateur ne prend pas en compte la géolocalisation HTML5");
		}
	</script>
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
				<?php echo '<img src="img/'.$planete->image.'" alt="Nom de la planète">'?>
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
			<form action="search.php" method="post">
				<label for="searchPlanet">Quelle planète souhaitez-vous découvrir ?</label><input type="text" name="searchPlanet"><input type="submit" value="envoyer">
			</form>
			<div id="map" style="width:100%; height:200px;"></div>
		</footer>	
	</div>
	
</body>
</html>