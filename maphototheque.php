<?php
session_start();
include 'connexionbdd.php';

/* Selection des images de l'utilisateur si connecté sinon ... */
if (isset($_SESSION['id'])) {
	$req = $bdd->query("SELECT * FROM imagesusers WHERE id={$_SESSION['id']}");

	$nbimgparlignes = 5; // nombre d'images maximum par ligne
	$numimgligne = 0; // numéro de l'image 
?>
	<!DOCTYPE html>
	<span style="color: #FFFFFF;" font-family="Oswald" , serif;>
	<!-- Affichera les éventuelles erreurs dans un commentaire HTML -->

		<!-- Photothèque de l'utilisateur connecté -->

		<head>
			<meta charset="UTF-8" />
			<title>Photothèque</title>
			<a href="./accueil.php"><img src="images/logo.png" alt="logo"></a>
			<link href="./css/style_photos.css" type="text/css" rel="stylesheet" title="style_photos" />
		</head>

		<body>
			<?php include 'menu.php'; ?>
			<br>

			<section>

				<a href="./downloadImage.php">Download</a>
				<br>
				<br>
				<a href="./ImageForm.php">Upload</a>

				<!-- Affichage des vignettes -->
				<div id="photos">
					<?php
					echo
					"<table>
				<tr>";
					$infos = $req->fetchAll();
					foreach ($infos as $info) {
						if ($numimgligne >= $nbimgparlignes) {
							echo
							"</tr>
					<tr>";
							$numimgligne = 0;
						}
						$numimgligne++;
						echo
						"<td>";
					?>
						<img src="./images2/thumbnails/<?php echo $info['nom'] ?>" />
					<?php
						echo
						"</td>";
					}
					$req->closeCursor();
					echo
					"</tr> 
			</table>";
					?>
				</div>
			</section>
			<br>
			<?php include 'piedpage.php'; ?>
		</body>

		</html>
	<?php
}
/* ... retourne à la page de connexion */ else {
	header("Location: login.php");
}
	?>