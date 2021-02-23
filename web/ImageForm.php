<!DOCTYPE HTML>
<span style="color: #FFFFFF;" font-family="Oswald" , serif;>
    <!-- Affichera les éventuelles erreurs dans un commentaire HTML -->

    <!-- Page d'ajout d'images à la base de données et création de vignettes -->

    <head>
        <meta charset="UTF-8" />
        <title>Ajout d'image à la photothèque</title>
        <link rel="stylesheet" href="./css/ImageForm.css" />
        <script src="./scripts/ImageForm.js"></script>
        <link href="./css/style.css" type="text/css" rel="stylesheet" title="style_principal" />
        <script src="./scripts/mini_diapo.js"></script>
        <a href="./accueil.php"><img src="images/logo.png" alt="logo"></a>
        <style>

        </style>
    </head>

    <body>
        <?php include 'menu.php'; ?>
        <br>
        <br>
        <section id="sectionURL">
            <form id="imageUrl" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Nouvelle image</legend>
                    <label for="url_image"><span>URL de l'image</span></label>
                    <input type="url" name="url_image" id="url_image" />
                    <button type="submit" name="ok">Valider</button>
                </fieldset>
            </form>
            <div class="message"></div>
            <form id="meta" method="post" enctype="multipart/form-data">
                <button type="submit" name="ok">Ajouter cette image</button>
                <button type="button" name="cancel"> <a href="maphototheque.php">Annuler</a> </button>
            </form>
            <div class="message"></div>
        </section>
        <br>
        <?php include 'piedpage.php'; ?>
    </body>

    </html>