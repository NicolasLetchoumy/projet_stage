<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../css/font_awesome/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <title>Réalisation du formulaire</title>
</head>
<body id="body">
    <header>
        <h1 class="titre">bienvenue sur le site du formulaire</h1>
    </header>
    <main>
        <h3 class="titreModeleFormulaire">Voici votre formulaire a remplir a votre guise</h3>
        <div class="centrage">
            <div class="formulaireChoisie">
                <form action="" method="" id="formulaire">
                    <div class="partie1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16" id="btnPartie1">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                        </svg>
                        <div id="overlay2">
                            <form action="" method="">
                                <div id="formulairePartie1">
                                        <button class="fermerPopup">X</button>
                                        <select class="form-select" id="mesQuestion" aria-label="Default select example">
                                            <option selected>Faites votre choix</option>
                                            <option value="1">voulez ajouter un text</option>
                                            <option value="2">voulez vous ajouter un bouton</option>
                                            <option value="3">voulez vous un choix coché</option>
                                            <option value="4">voulez vous un choix circulaire</option>
                                          </select>
                                        <input type="submit" value="Validé" class="btn btn-primary">
                                    </div>
                                </form>
                        </div>
                    </div>
                    <div class="formulaireDroite">
                    <div class="partie2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16" id="btnPartie2">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                          </svg>
                          <div id="overlay2">
                              <form action="" method="GET">
                                  <div id="formulairePartie1">
                                        <button class="fermerPopup">X</button>
                                        <select class="form-select" id="mesQuestion2" aria-label="Default select example">
                                            <option selected>Faites votre choix</option>
                                            <option value="1">voulez ajouter un text</option>
                                            <option value="2">voulez vous ajouter un bouton</option>
                                            <option value="3">voulez vous un choix coché</option>
                                            <option value="4">voulez vous un choix circulaire</option>
                                          </select>
                                        <input type="submit" value="Validé" class="btn btn-primary">
                                    </div>
                                </form>
                        </div>
                    </div>
                        <div class="partie3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16" id="btnPartie3">
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                            </svg>
                            <div id="overlay2">
                                <form action="" method="GET">
                                    <div id="formulairePartie1">
                                            <button class="fermerPopup">X</button>
                                            <select class="form-select" id="mesQuestion" aria-label="Default select example">
                                                <option selected>Faites votre choix</option>
                                                <option value="1">voulez ajouter un text</option>
                                                <option value="2">voulez vous ajouter un bouton</option>
                                                <option value="3">voulez vous un choix coché</option>
                                                <option value="4">voulez vous un choix circulaire</option>
                                              </select>
                                            <input type="submit" value="Validé" class="btn btn-primary">
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="logoReseaux">
            <a href=""><img src="../css/image/fb.png" alt=""></a>
            <a href=""><img src="../css/image/insta.jpg" alt=""></a>
            <a href=""><img src="../css/image/twitter.png" alt=""></a>
        </div>
        <h3 class="copyright"> site créer par M. Letchoumy Nicolas</h3>
    </footer>
    <script src="../js/formulaire.js"></script>
</body>
</html>