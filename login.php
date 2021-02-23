<?php
session_start();

include 'connexionbdd.php';

/* Si il clique sur le bouton connexion on regarde si les champs du formulaire ne sont pas vides.
On regarde aussi si le nom de compte et le mot de passe correspondent si c'est le cas on se connecte
sinon on recommence  */
if (isset($_POST['formconnexion'])) {
	$pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);
	$mdpconnect = sha1($_POST['mdpconnect']);
	if (!empty($pseudoconnect) and !empty($mdpconnect)) {
		$requser = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ? AND motdepasse = ?");
		$requser->execute(array($pseudoconnect, $mdpconnect));
		$userexist = $requser->rowCount();
		if ($userexist == 1) {
			$userinfo = $requser->fetch();
			$_SESSION['id'] = $userinfo['id'];
			$_SESSION['pseudo'] = $userinfo['pseudo'];
			header("Location: profil.php?id=" . $_SESSION['id']);
		} else {
			$message = "Mauvais username ou password ! ";
		}
	} else {
		$message = "Tous les champs doivent être complétés ! ";
	}
}
?>

<!DOCTYPE html>
<span style="color: #FFFFFF;" font-family="Oswald" , serif;>

	<!--Page de connexion-->
	<head>
		<meta charset="UTF-8" />
		<title>Connexion</title>
		<a href="./accueil.php"><img src="images/logo.png" alt="logo"></a>
		<link href="./css/style.css" type="text/css" rel="stylesheet" title="style_principal" />
	</head>

	<body>
		<?php include 'menu.php'; ?>
		<br>
		<section>
			<br>
			<div id="centrer">
				<h2>Connexion</h2>
				<a href="./registrer.php">Créer votre compte</a>
				<br />
				<br />
				<!-- Formulaire de connexion -->
				<form method="POST" id="connect">
					<table>
						<tr>
							<td class="right">
								<label for="pseudo">Username : </label>
							</td>
							<td>
								<input type="text" placeholder="Username" name="pseudoconnect" id="pseudo" />
							</td>
						</tr>

						<tr>
							<td class="right">
								<label for="mdp">Password : </label>
							</td>
							<td>
								<input type="password" placeholder="Password" name="mdpconnect" id="mdp" />
							</td>
						</tr>

						<tr>
							<td>
							</td>
							<td>
								<br />
								<input type="submit" value="Connexion" name="formconnexion" />
							</td>
						</tr>

					</table>
					<?php
					if (isset($message)) {
						echo '<p class="erreur">' . $message . '</p>';
					}
					?>
				</form>

			</div>
		</section>
		<br>
		<br>
		<?php include 'piedpage.php'; ?>
	</body>

	</html>