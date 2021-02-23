<?php

include 'connexionbdd.php';

/* Si il clique sur le bouton "je m'inscris" on regarde si les champs du formulaire ne sont pas vides.
On regarde aussi si les mots de passes correspondent si c'est le cas on crée le compte et on connecte l'utilisateur
sinon on renvoit un message d'erreur */
if (isset($_POST['forminscription'])) {
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$mdp = sha1($_POST['mdp']);
	$mdp2 = sha1($_POST['mdp2']);

	if (!empty($_POST['pseudo']) and !empty($_POST['mdp']) and !empty($_POST['mdp2'])) {
		$pseudolength = strlen($pseudo);
		if ($pseudolength <= 255) {
			if ($mdp == $mdp2) {
				$insertmembre = $bdd->prepare('INSERT INTO membres(pseudo,motdepasse) VALUES(?,?)');
				$insertmembre->execute(array($pseudo, $mdp));
				$message = "Votre compte a été créé ! ";
			} else {
				$message = "Vos mots de passes ne correspondent pas ! ";
			}
		} else {
			$message = "L'username ne doit pas dépassés 255 caractères ! ";
		}
	} else {
		$message = "Tous les champs doivent être complétés ! ";
	}
}
?>

<!DOCTYPE html>
<span style="color: #FFFFFF;" font-family="Oswald" , serif;>
	<!-- Affichera les éventuelles erreurs dans un commentaire HTML -->

	<!-- Page de création d'un compte -->

	<head>
		<meta charset="UTF-8" />
		<title>Creation compte</title>
		<a href="./accueil.php"><img src="images/logo.png" alt="logo"></a>
		<link href="./css/style.css" type="text/css" rel="stylesheet" title="style_principal" />
	</head>

	<body>
		<?php include 'menu.php'; ?>
		<br>
		<section>
			<br>
			<div id="centrer">
				<h2>Inscription</h2>
				<br />
				<!-- Formulaire de création de compte -->
				<form method="POST" id="inscription">
					<table>
						<tr>
							<td class="right">
								<label for="pseudo">Username : </label>
							</td>
							<td>
								<input type="text" placeholder="Username" id="pseudo" name="pseudo" value="<?php if (isset($pseudo)) {
																												echo $pseudo;
																											} ?>" />
							</td>
						</tr>

						<tr>
							<td class="right">
								<label for="mdp">Password : </label>
							</td>
							<td>
								<input type="password" placeholder="Password" id="mtp" name="mdp" />
							</td>
						</tr>

						<tr>
							<td class="right">
								<label for="mdp2">Confirmation Password : </label>
							</td>
							<td>
								<input type="password" placeholder="Confirmation Password" id="mtp2" name="mdp2" />
							</td>
						</tr>

						<tr>
							<td>
							</td>
							<td>
								<br />
								<input type="submit" name="forminscription" value="Sign up" />
							</td>
						</tr>

					</table>
					<?php
					if (isset($message)) {
						echo '<p class="erreur2">' . $message . '</p>';
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