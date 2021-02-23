<?php
/*Connexion à la base de données*/
try {
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=phototheque','root','');
	$bdd -> query('set names utf8');
}
catch (PDOException $e) {
	echo ("Erreur connexion : " . $e->getMessage());
	exit();
}

?>
