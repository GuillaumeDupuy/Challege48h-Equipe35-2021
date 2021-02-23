<?php
session_start();

include 'connexionbdd.php';

/* Si un utilisateur est connecté on continue ... */
if (isset($_GET['id']) and ($_GET['id'] > 0)) {
	$getid = intval($_GET['id']);
	$requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
	$requser->execute(array($getid));
	$userinfo = $requser->fetch();
?>

	<!DOCTYPE html>
	<span style="color: #FFFFFF;" font-family="Oswald" , serif;>
		<!-- Affichera les éventuelles erreurs dans un commentaire HTML -->

		<!-- Page du profil de l'utilisateur enregistré-->

		<head>
			<meta charset="UTF-8" />
			<title>Profil</title>
			<a href="./accueil.php"><img src="images/logo.png" alt="logo"></a>
			<link href="./css/style.css" type="text/css" rel="stylesheet" title="style" />
		</head>

		<body>
			<?php include 'menu.php'; ?>
			<section>
				<div id="centrer">
					<h2>Mon Profil</h2>
					<br />
					Votre Pseudo est :
					<?php
					echo '<b>' . $userinfo['pseudo'] . '</b>';
					?>
					<br />
					<br />
					<?php
					/* si l'utilsateur connecté est sur sa page de profil alors il peut voir 
				les informations suivantes : voir sa photothèque, voir les utilisateurs enregistrés, editer son
				profil et se déconnecter */
					if (isset($_SESSION['id']) and $userinfo['id'] == $_SESSION['id']) {
					?>
						<a href="./maphototheque.php">Voir ma Photothèque</a>
						<br />
						<br />
						<a href="./liste_user.php">Voir utilisateurs enregistrés</a>
						<br />
						<br />
						<a href="./edit_profil.php">Editer mon profil</a>
						<br>
						<br>
						<a href="./logout.php">Se déconnecter</a>
					<?php
					}
					?>
				</div>
			</section>
			<br>
			<br>
			<?php include 'piedpage.php'; ?>
		</body>

		</html>
	<?php
}
/* ...sinon on est redirgé vers la page de connexion */ else {
	header("Location: login.php");
}
	?>