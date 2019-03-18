<html>
<head>
<title>Accueil</title>
<link href="Style.css" rel="stylesheet" media="screen">
<script src="processing.js"></script>
</head>

<body>
<div class="global" id="global">
	<div class="triangle down"></div>
	<div class="infos" id="bienvenue">
		<h1>Bienvenue Sculpteur</h1>
		<h4>Veuillez entrer la forme et les dimensions souhaitées.</h4></div>
	<div class="infos" id="commande" align = 'center'>
		</br>	
		<form class="formulaire" id="formulairePiece" method=get action="envoie.php">
			<div class="cadre" id="cadre">
				<fieldset>
				<legend>Forme</legend>
					<div class="cadreInput" id="cadreSelectForme">
						<select class="selectForme" name="forme">
							<optgroup label="Formes basiques">
								<OPTION value="cube">Cube</option>
								<OPTION value="sphere" onchange="document.getElementByID('champs').style.display='none'">Sphere</option>
								<OPTION value="cylinder">Cylindre</option>
							</optgroup>
							<optgroup label="Formes spéciales">
								<OPTION value="cale">Cale</option>
							</optgroup>
						</select></div>
				</fieldset>
				</br>
				<fieldset>
				<legend>Dimensions</legend>
				<h3>Longueur</h3>
					<div class="cadreInput" id="champs">
					<input class="dimensions" id="longueur" type = 'text' name = 'longueur' value = '' size = '24'></div>
				<h3>Largeur</h3>
					<div class="cadreInput" id="champs">
					<input class="dimensions" id="largeur" type = 'text' name = 'largeur' value = '' size = '24'></div>
				<h3>Hauteur</h3>
					<div class="cadreInput" id="champs">
					<input class="dimensions" id="hauteur" type = 'text' name = 'hauteur' value = '' size = '24'></div>
				</br>
				</fieldset>
				</br>
				<button class="buttonSubmit" type="submit" name="valide">Commander
				</button></div></div>
			</form>
		</br>
			<div class="infos" id="apercu"> 
			<canvas data-processing-sources="MouseTracker/MouseTracker.pde"></canvas></div>
	<div class="triangle up"></div>
</div>
</body>
</html>




