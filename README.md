# Depot git du Challege48h-Equipe35 de l'équipe 35 : DUPUY Guillaume / CHATILLON Aurélien / PERRIN Sacha / FOURNIE William

## Installation

Les étapes pour lancer le projet :
  
  **Local
  
  - Cloner le projet
  - Activer votre environnements virtuel (Xampp ou Wampp) 
  - Modifier les informations de connexion de la bdd dans connexionbdd.php
  - Importer le fichier phototheque.sql dans phpmyadmin
  - Aller sur localhost/php
  - Naviguer sur le site Web
  
  **Serveur Web
  
  - Cliquer sur le lien heroku (application error) : https://challenge48h-equipe35.herokuapp.com/
 
## Base de données

La base de données se présente ainsi :

### Table « image »

- titre : varchar(255)
- auteur : varchar(255)
- urlphoto : text
- urlauteur : text
- dimension : text
- typelicence : text
- categorie : varchar(255)
- nom : varchar(255)
- mime : text
- motscles : varchar(255)
- → primary key (nom)

### Table « membres »

- id : int → auto-increment
- pseudo : varchar(255)
- motdepasse : text
- → primary key (id)

### Table « imagesusers »

- id : int
- nom : varchar(255)
- → primary key (id)
- → foreign key(id) references membres(id)
- → foreign key(nom) references image(nom)

# Descriptif des pages

- accueil.php : la page d’accueil qui explique le fonctionnement du site
- ajoutimg.php : ce code ajoute une image dans la photothèque de l’user connecté (marche pas)
- produits.php : cette page contient toutes les images de la catégories « produits »
- ambiance.php : cette page contient toutes les images de la catégories « ambiances »
- categories.php : cette page contient les différentes catégories d’images
- config_upload.php : cette page contient la configuration des dossiers temporaires, définitif ainsi que la taille pour les vignettes
- connexionbdd.php : cette page contient le code permettant de se connecter à la base de données
- downloadImage.php : ce code permet de récupérer l’url d’une image et de la télécharger
- edit_profile.php : cette page permet de modifier son password et son username à un user connecté
- ImageForm.php : cette page permet d’ajouter une image à la base de données 
- liste_user.php : cette page affiche les users crées sur le site
- login.php : cette page sert à se connecter à un compte
- logout.php : cette page permet de se déconnecter de son compte
- maphototheque.php : cette page affiche les photos que l’user à créer
- menu.php : cette page regroupe le menu principal et la barre de recherche
- page_recherche.php : cette page affiche toutes les images correspondant aux mots clés écrit 
- piedpage.php : cette page contient le pied de page de toutes les pages du site
- profil.php : cette page contient le profil user enregistrer et toutes les fonctionnalités associées
- recordImage.php : ce code permet de récupérer toutes les informations de l’image et d’insérer ces informations dans la base de données
- registrer.php : cette page permet de se créer un compte

 
