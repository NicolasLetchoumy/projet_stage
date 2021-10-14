<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <title>page Accueil</title>
</head>
<body>
    <header>
        <h1 class="titre">bienvenue sur le site du formulaire</h1>
    </header>
    <main>
        <!-- image de formulaire -->
        <section class="modeleFormulaire">
            <img src="../css/image/form1.jpg" alt="">
            <img src="../css/image/form2.jpg" alt="">
            <img src="../css/image/form3.jpg" alt="">
            <img src="../css/image/form4.jpg" alt="">
            <img src="../css/image/form5.jpg" alt="">
            <img src="../css/image/form6.jpg" alt="">
        </section>
        <div class="centrage">
            <p class="presentation">bonjour et bienvenu sur ce site pour réaliser le formulaire de vos rêves parmis un nombre impressionnant de modèle divers et varié.
                vous pouvez également rajouter des section a votre formulaire si vous en avez le besoin.
                vous pourrez le partager avec un lien, partager directement sur vos réseaux sociaux ou bien le télecharger et l'imprimer a la fin de la création du formulaire.
                merci a tous d'être parmis nous
            </p>
            <button id="btnAccueil">cliquez ici pour commencer a concevoir votre formulaire</button>
        </div>
        <!-- le popup de la page -->
        <form action="http://localhost/projet%20stage/projet%202/PHP/rea/realisation.php" method="POST" class="formulaire">
        <div id="overlay">
            <div id="formulairePartie1">
                <input type="button" name="" class="fermerPopup" value="X">
                <h3>entrez votre titre</h3>
                <div class="input-group input-group-lg">
                        <input type="text" name="titre" class="form-control" id="titre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" value="" placeholder="Titre" required>
                        <input type="submit" class="btn btn-primary"  id="validerAccueil" value="valider">
                    </div>
                </div>       
            </div>
        </form>
    </main>
    <footer>
        <div class="logoReseaux">
            <a href=""><img src="../css/image/fb.png" alt=""></a>
            <a href=""><img src="../css/image/insta.jpg" alt=""></a>
            <a href=""><img src="../css/image/twitter.png" alt=""></a>
        </div>
        <h3 class="copyright"> site créer par M. Letchoumy Nicolas</h3>
    </footer>
    <script src="../js/index.js"></script>
</body>
</html>