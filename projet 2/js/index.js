var btn = document.querySelector('#btnAccueil');
var formulairePartie1 = document.querySelector('#formulairePartie1')
var fermer = document.querySelector('.fermerPopup');
var overlay = document.querySelector('#overlay');
var valider = document.querySelector('#validerAccueil');
var titre = document.querySelector('#titre')


btn.addEventListener('click', function () {
    overlay.style.display = "initial";
    formulairePartie1.style.opacity = "1";
    formulairePartie1.style.display = "initial";
});

fermer.addEventListener('click', function(){
    overlay.style.display = "none";
    formulairePartie1.style.opacity = "1";
    formulairePartie1.style.display = "none";
});
