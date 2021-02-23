<?php
session_start();
include 'connexionbdd.php';

/* Selection des images de la catégorie animaux */
$req = $bdd->query("SELECT * FROM image WHERE categorie ='produits'");

$nbimgparlignes = 5; // nombre d'images maximum par ligne
$numimgligne = 0; // numéro de l'image
?>
<!DOCTYPE html>
<span style="color: #FFFFFF;" font-family="Oswald" , serif;>
<!-- Affichera les éventuelles erreurs dans un commentaire HTML -->

	<!--Page de la catégorie produits-->

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Produits</title>
		<a href="./accueil.php"><img src="images/logo.png" alt="logo"></a>

		<!-- style diaporama images -->
		<link href="./css/style_photos.css" type="text/css" rel="stylesheet" title="style_photos" />
		<script src="./scripts/diaporama.js"></script>

		<!-- style gallery -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-gallery.css" />
	</head>

	<body>
		<div id="overlay" title="fermer">
		</div>
		<?php include 'menu.php'; ?>

		<!-- Affichage des vignettes + informations des images -->
		<br>
		<section>
			<div id="photos">
				<?php
				echo
				"<table>
					<tr>";
				$infos = $req->fetchAll();
				foreach ($infos as $info) {
					if ($numimgligne >= $nbimgparlignes) {
						echo "</tr><tr>";
						$numimgligne = 0;
					}
					$numimgligne++;
					echo
					"<td>";
				?>
					<div class="info"><img src="<?php echo './images/photos produits/' . $info['nom'] ?>" />
						<span>
							<h1 id="titrephoto"><?php echo $info['titre'] ?></h1>
							<?php
							/* Seulement si l'utilisateur est connecté, il peut ajouter une image à
						sa photothèque */
							if (isset($_SESSION['id'])) {
								echo '
							<form method="post" action="ajoutimg.php">
								<button name="ajouter" type="submit">Ajouter image</button>
							</form>
							<br/>';
							}
							?>
							<b>Auteur : </b><?php echo $info['auteur']  ?> <br />
							<a href="<?php echo $info['urlauteur'] ?>"><b>Page web auteur</b></a> <br /><br />
							<a href="<?php echo $info['urlphoto'] ?>"><b>Image originale</b></a> <br />
							<b>Dimensions : </b><?php echo $info['dimension'] ?> px <br />
							<b>Type MIME : </b><?php echo $info['mime']  ?><br />
							<b>Type de licence CC : </b><?php echo $info['typelicence'] ?> <br /><br />
							<b>Catégorie(s) : </b><?php echo $info['categorie']  ?> <br />
							<b>Mots clés : </b><?php echo $info['motscles'] ?> <br />
						</span>
					</div> -->
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

		<!-- Diaporama -->
		<div id="slider">
			<div id="slides">
				<?php
				echo '<figure>
					<img src="' . $infos[0]['urlphoto'] . '" />
					<figcaption>' . $infos[0]['titre'] . '</figcaption>
				</figure>';
				?>
			</div>
			<img id="croix" src="images/croix.png" />
			<div id="button">
				<img id="button_left" src="images/left.png" />
				<img id="button_right" src="images/right.png" />
			</div>

		</div>

		<!-- div gallery image -->
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-3">
					<a href="images/photos produits/1006_Cuisse de canard de Barbarie VF 280 380 g.jpg" class="thumbnail">
						<img src="images/photos produits/1006_Cuisse de canard de Barbarie VF 280 380 g.jpg" alt="_Cuisse de canard de Barbari" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos produits/12249_Salade coleslaw PassionFroid.jpg" class="thumbnail">
						<img src="images/photos produits/12249_Salade coleslaw PassionFroid.jpg" alt="Salade coleslaw" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos produits/178037.JPG" class="thumbnail">
						<img src="images/photos produits/178037.JPG" alt="Pave de Steak" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos produits/20089-Ciboulette coupée 500 g PassionFroid.jpg" class="thumbnail">
						<img src="images/photos produits/20089-Ciboulette coupée 500 g PassionFroid.jpg" alt="Ciboulette coupée" />
					</a>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-3">
					<a href="images/photos produits/215347.jpg" class="thumbnail">
						<img src="images/photos produits/215347.jpg" alt="Saumon Norvégien" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos produits/222312.jpg" class="thumbnail">
						<img src="images/photos produits/222312.jpg" alt="Cordon Bleue" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos produits/39987.jpg" class="thumbnail">
						<img src="images/photos produits/39987.jpg" alt="Foie Gras" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos produits/99310.jpg" class="thumbnail">
						<img src="images/photos produits/99310.jpg" alt="Opéra au chocolat" />
					</a>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos produits/7419-4_Crème légère liquide 18� MG UHT 1 litre PassionFroid.jpg" class="thumbnail">
						<img src="images/photos produits/7419-4_Crème légère liquide 18� MG UHT 1 litre PassionFroid.jpg" alt="Crème légère liquide" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos produits/99749.jpg" class="thumbnail">
						<img src="images/photos produits/99749.jpg" alt="Pavé de Steak 2" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos produits/59736-RC.jpg" class="thumbnail">
						<img src="images/photos produits/59736-RC.jpg" alt="Gâteau" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos produits/68875.jpg" class="thumbnail">
						<img src="images/photos produits/68875.jpg" alt="Assortiment de glace" />
					</a>
				</div>

			</div>
		</div>

		<!-- scripts js gallery -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="scripts/bootstrap-gallery.js"></script>

		<script>
			$(document).ready(function() {
				$('a.custom-selector').bootstrapGallery();
			});
		</script>

		<br>
		<?php include 'piedpage.php'; ?>
	</body>

	</html>