var btnPartie1 = document.querySelector('#btnPartie1');
var btnPartie2 = document.querySelector('#btnPartie2');
var btnPartie3 = document.querySelector('#btnPartie3');
var overlay = document.querySelector('#overlay2');
var formulairePartie1 = document.querySelector('#formulairePartie1')
var mesQuestion = document.querySelector('#mesQuestion');
var fermer = document.querySelector('.fermerPopup');
const xhttp = new XMLHttpRequest();




btnPartie1.addEventListener('click', function(){
    overlay.style.display = "initial";
    formulairePartie1.style.opacity = "1";
    formulairePartie1.style.display = "initial";

    if(mesQuestion.value == 1){
        // include titre
        formulairePartie1.innerHTML = "<?php include_once(../php/include/_titre.php)";
    }else if(mesQuestion.value == 2){
        // include button
        formulairePartie1.innerHTML = "<?php include_once(../php/include/_button.php)";
    }else if(mesQuestion.value == 3){
        //include choix cocher
        formulairePartie1.innerHTML = "<?php include_once(../php/include/_cocher.php)";
    }else if(mesQuestion.value == 4){
        // include choix radio
        formulairePartie1.innerHTML = "<?php include_once(../php/include/_radio.php)";
    }

});

btnPartie2.addEventListener('click', function(){
    overlay.style.display = "initial"
    formulairePartie1.style.opacity = "1"
    formulairePartie1.style.display = "initial"
    if(mesQuestion.value == 1){
        // include titre
        console.log('non');
    }else if(mesQuestion.value == 2){
        // include button
        console.log('yes');
    }else if(mesQuestion.value == 3){
        //include choix cocher
    }else if(mesQuestion.value == 4){
        // include choix radio
    }
});

btnPartie3.addEventListener('click', function(){
    overlay.style.display = "initial"
    formulairePartie1.style.opacity = "1"
    formulairePartie1.style.display = "initial"
    if(mesQuestion.value == 1){
        // include titre
        console.log('non');
    }else if(mesQuestion.value == 2){
        // include button
        console.log('yes');
    }else if(mesQuestion.value == 3){
        //include choix cocher
    }else if(mesQuestion.value == 4){
        // include choix radio
    }
});

fermer.addEventListener('click', function(){
    overlay.style.display = "none"
    formulairePartie1.style.opacity = "1"
    formulairePartie1.style.display = "none"
});
