<?php
session_start();

include 'connexionbdd.php';

/* Si l'utilisateur est connecté alors il peut modifier son compte*/
/*Si l'utilisateur clique sur le bouton "mettre à jour" alors qu'il n'a rien changé, il retourne sur son profil.
Il peut modifier son username et son mot de passe qui doit taper deux fois pour confirmer.*/
if (isset($_SESSION['id'])) {
	$requser = $bdd->prepare("SELECT * FROM membres WHERE id=?");
	$requser->execute(array($_SESSION['id']));
	$user = $requser->fetch();

	if (isset($_POST['newpseudo']) and !empty($_POST['newpseudo']) and $_POST['newpseudo'] != $user['pseudo']) {
		$newpseudo = htmlspecialchars($_POST['newpseudo']);
		$insertpseudo = $bdd->prepare("UPDATE membres SET pseudo=? WHERE id=?");
		$insertpseudo->execute(array($newpseudo, $_SESSION['id']));
		header('Location: profil.php?id=' . $_SESSION['id']);
	}

	if (
		isset($_POST['newmdpasse']) and !empty($_POST['newmdpasse'])
		and isset($_POST['newmdpasse2']) and !empty($_POST['newmdpasse2'])
	) {
		$mdp1 = sha1($_POST['newmdpasse']);
		$mdp2 = sha1($_POST['newmdpasse2']);

		if ($mdp1 == $mdp2) {
			$insertmdp = $bdd->prepare("UPDATE membres SET motdepasse=? WHERE id=?");
			$insertmdp->execute(array($mdp1, $_SESSION['id']));
			header('Location: profil.php?id=' . $_SESSION['id']);
		} else {
			$message = "Vos deux mots de passes ne correspondent pas ! ";
		}
	}

	if (
		isset($_POST['newpseudo']) and $_POST['newpseudo'] == $user['pseudo']
		and empty($_POST['newmdpasse']) and empty($_POST['newmdpasse2'])
	) {
		header('Location: profil.php?id=' . $_SESSION['id']);
	}

?>

	<!DOCTYPE html>
	<span style="color: #FFFFFF;" font-family="Oswald" , serif;>
	<!-- Affichera les éventuelles erreurs dans un commentaire HTML -->

		<!-- Page d'edition du profil -->

		<head>
			<meta charset="UTF-8" />
			<title>Edition du Profil</title>
			<a href="./accueil.php"><img src="images/logo.png" alt="logo"></a>
			<link href="./css/style.css" type="text/css" rel="stylesheet" title="style" />
		</head>

		<body>
			<?php include 'menu.php'; ?>
			<section>
				<div id="centrer">
					<h2>Edition du Profil</h2>
					<br />
					<!-- Formulaire d'edition du profil -->
					<form method="POST" id="edit_profil">
						<label>Username : &nbsp; &nbsp; &nbsp; &nbsp;</label>
						<input type="text" name="newpseudo" value="<?php echo $user['pseudo']; ?>" /></br>
						<label>New Password :</label>
						<input type="password" name="newmdpasse" placeholder="New Password" /></br>
						<label>Confirmation New Password :</label>
						<input class="newpass" type="password" name="newmdpasse2" placeholder="Confirmation New Password" />
						</br>
						<br>
						<input type="submit" value="Mettre à jour" />
					</form>
					<?php
					if (isset($message)) {
						echo '<span>' . $message . '</span>';
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
/* si il n'est pas connecté, il est redirigé vers la page de connexion */ else {
	header("Location: login.php");
}
	?>