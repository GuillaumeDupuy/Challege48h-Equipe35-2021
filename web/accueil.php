<?php
session_start();
?>
<!DOCTYPE html>
<span style="color: #FFFFFF;" font-family="Oswald" , serif;>
	<!-- Affichera les éventuelles erreurs dans un commentaire HTML -->

	<!--Page d'accueil  -->

	<head>
		<meta charset="UTF-8" />
		<title>Photothèque</title>
		<a href="./accueil.php"><img src="images/logo.png" alt="logo"></a>
		<link href="./css/style.css" type="text/css" rel="stylesheet" title="style_principal" />
		<script src="./scripts/mini_diapo.js"></script>
	</head>

	<body>
		<?php include 'menu.php'; ?>
		<br>
		<section>
			<article>
				<br>
				<h2>Bienvenue !</h2>
				<br />
				<p>Ce site vous propose une photothèque banque d'images libres de droit de PassionFroid</p>
				<p>Parcourez 160 photos et images disponibles de photothèque, ou utilisez les mots-clés via la barre de recherche en tapant
					un mot clé, un auteur, etc.</p>
				<p>Nous vous proposons aussi un espace membre (créer votre compte) et ainsi pouvoir créer
					votre propre photothèque et voir les photothèques des autres utilisateurs enregistrés.</p>
				<p>Bonne visite !</p>
			</article>
		</section>
		<br>
		<br>
		<?php include 'piedpage.php'; ?>
	</body>

	</html>