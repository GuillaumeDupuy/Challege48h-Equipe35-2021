<?php
session_start();

include 'connexionbdd.php';

/* Si l'utilisateur est connecté affiche la page sinon ... */
if (isset($_SESSION['id'])) {
	$getid = intval($_GET['id']);
	$requser = $bdd->query("SELECT * FROM membres");
	$usersinfo = $requser->fetchAll();
?>

	<!DOCTYPE html>
	<span style="color: #FFFFFF;" font-family="Oswald" , serif;>
	<!-- Affichera les éventuelles erreurs dans un commentaire HTML -->

		<!-- Page des utilisateurs enregistrés -->

		<head>
			<meta charset="UTF-8" />
			<title>Utilisateurs enregistrés</title>
			<a href="./accueil.php"><img src="images/logo.png" alt="logo"></a>
			<link href="./css/style.css" type="text/css" rel="stylesheet" title="style" />
		</head>

		<body>
			<?php include 'menu.php'; ?>
			<section>
				<div id="centrer">
					<h2>Listes des utilisateurs enregistrés</h2>
					<br />
					<?php
					foreach ($usersinfo as $userinfo) {
						echo 'Username : ' . $userinfo['pseudo'] . '<br/>';
					}
					?>
				</div>
			</section>
			<br>
			<?php include 'piedpage.php'; ?>
		</body>

		</html>
	<?php
}
/* .. retourne à la page de connexion */ else {
	header("Location: login.php");
}
	?>