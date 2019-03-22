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
		<script type="text/javascript" src="jquery.min.js" /></script>
		<script type="text/javascript">
		$(document).ready(function() {
			document.getElementById("param1Text").innerHTML = "Longueur (mm)"
			$('#param1Val').show(); 
			$('#champ1').show();
			document.getElementById("param2Text").innerHTML = "Largeur (mm)"
			$('#param2Val').show(); 
			$('#champ2').show();
			document.getElementById("param3Text").innerHTML = "Hauteur (mm)"
			$('#param3Val').show(); 
			$('#champ3').show();
			document.getElementById('cadre').style.height='605'
			$('#forme').hide();
			var forme = document.getElementById("forme").value;
			
					if(forme == 'cube') { 
						document.getElementById("legendDimensions").innerHTML = "Dimensions"
						document.getElementById("param1Text").innerHTML = "Longueur (mm)"
						$('#param1Val').show(); 
						$('#champ1').show();
						document.getElementById("param2Text").innerHTML = "Largeur (mm)"
						$('#param2Val').show(); 
						$('#champ2').show();
						document.getElementById("param3Text").innerHTML = "Hauteur (mm)"
						$('#param3Val').show(); 
						$('#champ3').show();
						document.getElementById('cadre').style.height='605'
					}
					else if(forme == 'sphere') { 
						document.getElementById("legendDimensions").innerHTML = "Dimensions"
						document.getElementById("param1Text").innerHTML = "Rayon (mm)"
						$('#param1Val').show(); 
						$('#champ1').show();
						document.getElementById("param2Text").innerHTML = ""
						$('#param2Val').hide(); 
						$('#champ2').hide();
						document.getElementById("param3Text").innerHTML = ""
						$('#param3Val').hide(); 
						$('#champ3').hide();
						document.getElementById('cadre').style.height='390'
					} 
					else if(forme == 'cylinder') { 
						document.getElementById("legendDimensions").innerHTML = "Dimensions"
						document.getElementById("param1Text").innerHTML = "Hauteur (mm)"
						$('#param1Val').show(); 
						$('#champ1').show();
						document.getElementById("param2Text").innerHTML = "Rayon (mm)"
						$('#param2Val').show(); 
						$('#champ2').show();
						document.getElementById("param3Text").innerHTML = ""
						$('#param3Val').hide(); 
						$('#champ3').hide();
						document.getElementById('cadre').style.height='510'
					}
					else if(forme == 'cale') { 
						document.getElementById("legendDimensions").innerHTML = ""
						document.getElementById("param1Text").innerHTML = ""
						$('#param1Val').hide(); 
						$('#champ1').hide();
						document.getElementById("param2Text").innerHTML = ""
						$('#param2Val').hide(); 
						$('#champ2').hide();
						document.getElementById("param3Text").innerHTML = ""
						$('#param3Val').hide(); 
						$('#champ3').hide();
						document.getElementById('cadre').style.height='260'
					}
				});
		</script>
	<div class="infos" id="commande" align = 'center'>
		</br>	
			<div class="cadre" id="cadre">	
				<fieldset>
				<legend>Forme</legend>
					<div class="cadreInput" id="cadreSelectForme">
						<h2 id="formeVal"><?php echo $_SESSION['forme'] ?></h2></div>
				</fieldset>
				</br>
				<fieldset>
				<legend id="legendDimensions">Dimensions</legend>
				<h3 id="param1Text">Longueur</h3>
					<div class="cadreInput" id="champ1">
					<h2 id="param1Val"><?php echo $_SESSION['param1'] ?></h2></div>
				<h3 id="param2Text">Largeur</h3>
					<div class="cadreInput" id="champ2">
					<h2 id="param2Val"><?php echo $_SESSION['param2'] ?></h2></div>
				<h3 id="param3Text">Hauteur</h3>
					<div class="cadreInput" id="champ3">
					<h2 id="param3Val"><?php echo $_SESSION['param3'] ?></h2></div>
				</br>
				</fieldset>
				</br>
				<form class="formulaire" id="formulaireCommande" method=get action="Compte.php">
				<button class="buttonSubmit" type="submit" name="valide">Mes commandes
			</button>
			</div></div>
		</br>
	<div class="triangle up"></div>
	<input class="dimensions" id="forme" type = 'text' value = '<?php echo $_SESSION['forme'] ?>' name="forme" size = '24'></div>
	
	<?php session_destroy(); ?>
</body>
</html>


