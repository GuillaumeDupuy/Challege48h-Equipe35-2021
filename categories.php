<?php
session_start();
include 'connexionbdd.php';
?>
<!DOCTYPE html>
<span style="color: #FFFFFF;" font-family="Oswald" , serif;>

	<!-- Page des catégories des images -->

	<head>
		<meta charset="UTF-8" />
		<title>Categories</title>
		<a href="./accueil.php"><img src="images/logo.png" alt="logo"></a>
		<link href="./css/style_album.css" type="text/css" rel="stylesheet" title="style_album" />
	</head>

	<body>
		<?php include 'menu.php'; ?>
		<br>
		<section>
			<table id="album">
				<tbody>
					<tr>
						<th>
							<a href="./produits.php"> <img src="images/produits.png" alt="Produits" /></a>
						</th>
						<th>
							<a href="./ambiance.php"> <img src="images/photos ambiance/AdobeStock_106008623.jpg" alt="Ambiances" /></a>
						</th>
					</tr>
					<tr>
						<td><b>Produits</b></td>
						<td><b>Ambiances</b></td>
					</tr>
				</tbody>
			</table>
		</section>
		<br>
		<br>
		<?php include 'piedpage.php'; ?>
	</body>

	</html>