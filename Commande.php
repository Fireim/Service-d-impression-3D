<html>
<head>
<title>Commande</title>
<link href="Style.css" rel="stylesheet" media="screen">

</head>

<body>
<?php session_start(); ?>
<div class="global" id="global">
	<div class="triangle down"></div>
	<div class="infos" id="bienvenue">
		<h1>Merci !</h1>
		<h4>Voici le récapitulatif de votre commande.</h4>
		</br>
		<form class="formulaire" id="formulaireCommande" method=get action="Interface.php">
		<button class="buttonSubmit" type="submit" name="valide">Commander à nouveau
			</button></div></div>
			</form>
	<div class="infos" id="commande" align = 'center'>
		</br>	
			<div class="cadre" id="cadre">	
				<fieldset>
				<legend>Forme</legend>
					<div class="cadreInput" id="cadreSelectForme">
						<h2><?php echo $_SESSION['forme'] ?></h2></div>
				</fieldset>
				</br>
				<fieldset>
				<legend>Dimensions</legend>
				<h3>Longueur</h3>
					<div class="cadreInput" id="champs">
					<h2><?php echo $_SESSION['param1'] ?></h2></div>
				<h3>Largeur</h3>
					<div class="cadreInput" id="champs">
					<h2><?php echo $_SESSION['param2'] ?></h2></div>
				<h3>Hauteur</h3>
					<div class="cadreInput" id="champs">
					<h2><?php echo $_SESSION['param3'] ?></h2></div>
				</br>
				</fieldset>
				</br>
				<form class="formulaire" id="formulaireCommande" method=get action="Compte.php">
				<button class="buttonSubmit" type="submit" name="valide">Mes commandes
			</button>
			</div></div>
		</br>
	<div class="triangle up"></div>
	<?php session_destroy(); ?>
</body>
</html>


