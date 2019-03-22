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
		
		<script type="text/javascript" src="jquery.min.js" /></script>
		<script type="text/javascript">
		$(document).ready(function() {
			document.getElementById("param1Text").innerHTML = "Longueur (mm)"
			$('#param1').show(); 
			$('#champ1').show();
			document.getElementById("param2Text").innerHTML = "Largeur (mm)"
			$('#param2').show(); 
			$('#champ2').show();
			document.getElementById("param3Text").innerHTML = "Hauteur (mm)"
			$('#param3').show(); 
			$('#champ3').show();
			document.getElementById('cadre').style.height='605'
	
			$('select[name="forme"]').change(function() {
			var valeur = $(this).val(); 
	
				if(valeur != '') {
					if(valeur == 'cube') { 
						document.getElementById("legendDimensions").innerHTML = "Dimensions"
						document.getElementById("param1Text").innerHTML = "Longueur (mm)"
						$('#param1').show(); 
						$('#champ1').show();
						document.getElementById("param2Text").innerHTML = "Largeur (mm)"
						$('#param2').show(); 
						$('#champ2').show();
						document.getElementById("param3Text").innerHTML = "Hauteur (mm)"
						$('#param3').show(); 
						$('#champ3').show();
						document.getElementById('cadre').style.height='605'
					}
					if(valeur == 'sphere') { 
						document.getElementById("legendDimensions").innerHTML = "Dimensions"
						document.getElementById("param1Text").innerHTML = "Rayon (mm)"
						$('#param1').show(); 
						$('#champ1').show();
						document.getElementById("param2Text").innerHTML = ""
						$('#param2').hide(); 
						$('#champ2').hide();
						document.getElementById("param3Text").innerHTML = ""
						$('#param3').hide(); 
						$('#champ3').hide();
						document.getElementById('cadre').style.height='390'
					} 
					if(valeur == 'cylinder') { 
						document.getElementById("legendDimensions").innerHTML = "Dimensions"
						document.getElementById("param1Text").innerHTML = "Hauteur (mm)"
						$('#param1').show(); 
						$('#champ1').show();
						document.getElementById("param2Text").innerHTML = "Rayon (mm)"
						$('#param2').show(); 
						$('#champ2').show();
						document.getElementById("param3Text").innerHTML = ""
						$('#param3').hide(); 
						$('#champ3').hide();
						document.getElementById('cadre').style.height='510'
					}
					if(valeur == 'cale') { 
						document.getElementById("legendDimensions").innerHTML = ""
						document.getElementById("param1Text").innerHTML = ""
						$('#param1').hide(); 
						$('#champ1').hide();
						document.getElementById("param2Text").innerHTML = ""
						$('#param2').hide(); 
						$('#champ2').hide();
						document.getElementById("param3Text").innerHTML = ""
						$('#param3').hide(); 
						$('#champ3').hide();
						document.getElementById('cadre').style.height='260'
					}
				}
			});

		});
		</script>

		<form class="formulaire" id="formulairePiece" method=get action="envoie.php">
			<div class="cadre" id="cadre">
				<fieldset>
				<legend>Forme</legend>
					<div class="cadreInput" id="cadreSelectForme">
						<select class="selectForme" name="forme" id="forme">
							<optgroup label="Formes basiques">
								<OPTION value="cube">Cube</option>
								<OPTION value="sphere">Sphere</option>
								<OPTION value="cylinder">Cylindre</option>
							</optgroup>
							<optgroup label="Formes spéciales">
								<OPTION value="cale">Cale</option>
							</optgroup>
						</select></div>
				</fieldset>
				</br>
				<fieldset>
				<legend id="legendDimensions">Dimensions</legend>
				<h3 id="param1Text">Longueur (mm)</h3>
					<div class="cadreInput" id="champ1">
					<input class="dimensions" id="param1" type = 'text' value = '' name="param1" size = '24'></div>
				<h3 id="param2Text">Largeur (mm)</h3>
					<div class="cadreInput" id="champ2">
					<input class="dimensions" id="param2" type = 'text' value = '' name="param2" size = '24'></div>
				<h3 id="param3Text">Hauteur (mm)</h3>
					<div class="cadreInput" id="champ3">
					<input class="dimensions" id="param3" type = 'text' value = '' name="param3" size = '24'></div>
				</br>
				</fieldset>
				</br>
				<button class="buttonSubmit" type="submit" name="valide">Commander
				</button></div></div>
			</form>
		</br>
			<div class="infos" id="apercu"> 
				<img src="prusa.jpg" style="width:400px; height;400px"> 
				<script src="three.js"></script>
				<script>
					var scene = new THREE.Scene();
					var camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
					scene.background = new THREE.Color( 0xDDEEFF );

					var renderer = new THREE.WebGLRenderer();
					renderer.setSize( window.innerWidth, window.innerHeight );
					document.body.appendChild( renderer.domElement );
					
					function getSelectValue(forme)
					{
						var selectElmt = document.getElementById(forme);
						return selectElmt.options[selectElmt.selectedIndex].value;
					}
					
					var forme = getSelectValue('forme');
					var Jparam1 = document.getElementById("param1").value;
					var Jparam2 = document.getElementById("param2").value;
					var Jparam3 = document.getElementById("param3").value;

					
					var geometry = new THREE.BoxGeometry( 0, 0, 0 );
					var material = new THREE.MeshBasicMaterial( { color: 0x46a28d } );
					var cube = new THREE.Mesh( geometry, material );
					scene.add( cube );
					var geometry = new THREE.SphereGeometry( 0, 32, 32 );
					var material = new THREE.MeshBasicMaterial( { color: 0x46a28d } );
					var sphere = new THREE.Mesh( geometry, material );
					scene.add( sphere );
					var geometry = new THREE.CylinderGeometry( 0, 0, 0, 32 );
					var material = new THREE.MeshBasicMaterial( { color: 0x46a28d } );
					var cylinder = new THREE.Mesh( geometry, material );
					scene.add( cylinder );
					
					var light = new THREE.DirectionalLight( 0xffffff );
					light.position.set( 1, 1, 1 ).normalize();
					scene.add( light );

						var grandeur = 5;
						camera.position.z = grandeur;
						
						function animate() {
							requestAnimationFrame( animate );
							renderer.render( scene, camera );
							
							Jparam1 = document.getElementById("param1").value;
							Jparam2 = document.getElementById("param2").value;
							Jparam3 = document.getElementById("param3").value;
							
							if( Jparam1 > grandeur || Jparam2 > grandeur || Jparam3 > grandeur )
							{
								grandeur *= 2;
								camera.position.z = grandeur;
							}
							
							if (forme == 'cube')
							{
							sphere.scale.x = 0;
							sphere.scale.y = 0;
							sphere.scale.z = 0;
							cylinder.scale.x = 0;
							cylinder.scale.y = 0;
							cylinder.scale.z = 0;
							
							cube.scale.x = Jparam1;
							cube.scale.y = Jparam2;
							cube.scale.z = Jparam3;
							
							cube.rotation.x += 0.01;
							cube.rotation.y += 0.01;
							renderer.render(scene);
							}
							
							if (forme == 'sphere')
							{
								cube.scale.x = 0;
								cube.scale.y = 0;
								cube.scale.z = 0;
								cylinder.scale.x = 0;
								cylinder.scale.y = 0;
								cylinder.scale.z = 0;
								
								sphere.scale.x = Jparam1;
								sphere.scale.y = Jparam1;
								sphere.scale.z = Jparam1;
								
								sphere.rotation.x += 0.01;
								sphere.rotation.y += 0.01;	
							}
							if (forme == 'cylinder')
							{
								cube.scale.x = 0;
								cube.scale.y = 0;
								cube.scale.z = 0;
								sphere.scale.x = 0;
								sphere.scale.y = 0;
								sphere.scale.z = 0;
								
								cylinder.scale.x = Jparam1;
								cylinder.scale.y = Jparam1;
								cylinder.scale.z = Jparam2;
								
								cylinder.rotation.x += 0.01;
								cylinder.rotation.y += 0.01;	
							}
							forme = getSelectValue('forme');
							}
				animate();
				</script>

			</div>
	<div class="triangle up"></div>
</div>
</body>
</html>