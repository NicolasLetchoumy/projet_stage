<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/bootstrap/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../css/font_awesome/fontawesome.min.css">
    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.css">
    <title>Réalisation du formulaire</title>
</head>
<body id="body">
    <header>
        <h1 class="titre">bienvenue sur le site du formulaire</h1>
    </header>
    <main>
        <h1 class="titre">
        <?php
            include('../inc/_titre.php');
        ?>

        </h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16" id="btnPartie1">
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
        </svg>
        <form action="" method="post">   
            <!-- titre du formulaire et 1er popup-->
            <?php
                include('../inc/_premierePopupRea.php');
            ?>
            <div class="titreDuFormulaire">
                <h3 id="titreFormulaireEntrer"></h3>
                <!-- question du formulaire avec popup-->
            </div>
            <?php
                include('../inc/_poppupQuestion.php');
            ?>
            <!-- toutes les question rentrer par l'utilisateur question utilisateur -->
            <div id="toutesQuestion">
                   
            </div>
            <!--selection des question-->
          <?php
                include('../inc/_selection.php');
            ?>
            <!-- la partie téléchargement du formulaire -->
            <a href="http://localhost/projet%20stage/projet%202/PHP/rea/realisation.php" class="btn btn-primary" id="terminerFormulaire" download="formulaire créé.pdf">télécharger </a>
        </form>
    </main>
    <footer>
        <div class="test">
            <div class="logoReseaux">
                <a href=""><img src="../../css/image/fb.png" alt=""></a>
                <a href=""><img src="../../css/image/insta.jpg" alt=""></a>
                <a href=""><img src="../../css/image/twitter.png" alt=""></a>
            </div>
            <h3 class="copyright"> site créer par M. Letchoumy Nicolas</h3>
        </div>
    </footer>
    <script src="../../js/formulaire.js"></script>
</body>
</html>