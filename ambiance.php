<?php
session_start();
include 'connexionbdd.php';

/* Selection des images de la catégorie ambiance */
$req = $bdd->query("SELECT * FROM image WHERE categorie ='ambiance'");

$nbimgparlignes = 5; // nombre d'images maximum par ligne
$numimgligne = 0; // numéro de l'image
?>
<!DOCTYPE html>
<span style="color: #FFFFFF;" font-family="Oswald" , serif;>

	<!-- Page de la catégorie ambiance-->

	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Ambiance</title>
		<a href="./accueil.php"><img src="images/logo.png" alt="logo"></a>

		<link href="./css/style_photos.css" type="text/css" rel="stylesheet" title="style_photos" />
		<script src="./scripts/diaporama.js"></script>

		<!-- gallery -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/bootstrap-gallery.css" />

	</head>

	<body>
		<div id="overlay" title="fermer">
		</div>
		<?php include 'menu.php'; ?>

		<!-- Affichage des vignettes + informations des images -->
		<br>
		<br>
		<br>
		<!-- <section>
			<div id="photos"> -->
		<?php
		/*echo
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
					"<td>";*/
		?>

		<!-- <div class="info"><img src="<?php /*echo './images/photos ambiance/' . $info['nom']*/ ?>" />
						<span>
							<h1 id="titrephoto"><?php /*echo $info['titre'] */ ?></h1> -->
		<?php
		/* Seulement si l'utilisateur est connecté, il peut ajouter une image à
						sa photothèque */
		/*if (isset($_SESSION['id'])) {
								echo '
							<form method="post" action="ajoutimg.php">
								<button name="ajouter" type="submit">Ajouter image</button>
							</form>
							<br/>';
							}*/
		?>
		<!-- <b>Auteur : </b><?php /*echo $info['auteur'] */ ?> <br />
							<a href="<?php /*echo $info['urlauteur']*/ ?>"><b>Page web auteur</b></a> <br /><br />
							<a href="<?php /*echo $info['urlphoto'] */ ?>"><b>Image originale</b></a> <br />
							<b>Dimensions : </b><?php /*echo $info['dimension']*/ ?> px <br />
							<b>Type MIME : </b><?php /*echo $info['mime'] */ ?><br />
							<b>Type de licence CC : </b><?php /*echo $info['typelicence']*/ ?> <br /></br />
							<b>Catégorie(s) : </b><?php /*echo $info['categorie'] */ ?> <br />
							<b>Mots clés : </b><?php /*echo $info['motscles']*/ ?> <br />
						</span>
					</div> -->
		<?php
		/*echo
					"</td>";
				}
				$req->closeCursor();
				echo
				"</tr>
					</table>";
				*/
		?>

		</div>
		</section>

		<!-- Diaporama -->
		<!-- <div id="slider">
			<div id="slides">
				<?php
				/*echo '<figure>
					<img src="' . $infos[0]['urlphoto'] . '" />
					<figcaption>' . $info[0]['titre'] . '</figcaption>
				</figure>';*/
				?>
			</div>
			<img id="croix" src="images/croix.png" />
			<div id="button">
				<img id="button_left" src="images/left.png" />
				<img id="button_right" src="images/right.png" />
			</div>

		</div> -->

		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-3">
					<a href="images/photos ambiance/AdobeStock_155621863.jpeg" class="thumbnail">
						<img src="images/photos ambiance/AdobeStock_155621863.jpeg" alt="Commande restaurateur" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos ambiance/AdobeStock_58987667.jpeg" class="thumbnail">
						<img src="images/photos ambiance/AdobeStock_58987667.jpeg" alt="Service de plat" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos ambiance/Pavé d'abadèche et poêlée de légumes du soleil-31.jpg" class="thumbnail">
						<img src="images/photos ambiance/Pavé d'abadèche et poêlée de légumes du soleil-31.jpg" alt="Pavé d'abadèche et poêlée de légumes du soleil" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos ambiance/Bavette d'aloyau et gratin de carotte brocolis.jpg" class="thumbnail">
						<img src="images/photos ambiance/Bavette d'aloyau et gratin de carotte brocolis.jpg" alt="Bavette d'aloyau et gratin de carotte brocolis" />
					</a>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-3">
					<a href="images/photos ambiance/Brigade.jpg" class="thumbnail">
						<img src="images/photos ambiance/Brigade.jpg" alt="Brigade" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos ambiance/Cafe affogato.jpg" class="thumbnail">
						<img src="images/photos ambiance/Cafe affogato.jpg" alt="Cafe affogato" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos ambiance/Club sud ouest ok.jpg" class="thumbnail">
						<img src="images/photos ambiance/Club sud ouest ok.jpg" alt="Sandwich club sud ouest" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos ambiance/Chine PE -OR.jpg" class="thumbnail">
						<img src="images/photos ambiance/Chine PE -OR.jpg" alt="Poisson Chinois" />
					</a>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos ambiance/Jean-Marc Cluzeau (3).jpg" class="thumbnail">
						<img src="images/photos ambiance/Jean-Marc Cluzeau (3).jpg" alt="Chef Jean-Marc Cluzeau" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos ambiance/Decoupe Agneau.png" class="thumbnail">
						<img src="images/photos ambiance/Decoupe Agneau.png" alt="Découpe d'un agneau" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos ambiance/Fotolia_75601010_Subscription_Monthly_XXL.jpg" class="thumbnail">
						<img src="images/photos ambiance/Fotolia_75601010_Subscription_Monthly_XXL.jpg" alt="Village typique campnagard" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="images/photos ambiance/Fotolia_23305587_Subscription_XXL.jpg" class="thumbnail">
						<img src="images/photos ambiance/Fotolia_23305587_Subscription_XXL.jpg" alt="Eclairage restaurant cosy" />
					</a>
				</div>

			</div>
		</div>

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