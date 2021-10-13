var btnPartie1 = document.querySelector('#btnPartie1');
var fermer = document.querySelector('.fermerPopup');
var fermer2 = document.querySelector('.fermerPopup2');
var overlay = document.querySelector('#overlay');
var formulairePartie1 = document.querySelector('#formulairePartie1');
var titreFormulaire = document.querySelector('#titreFormulaire');
var validerFormulaire = document.querySelector('#validerFormulaire');
var titreFormulaireEntrer = document.querySelector('#titreFormulaireEntrer');
var boxTitre = document.querySelector('.titreDuFormulaire');
var selection1 = document.querySelector('#formulaireSelect1');
var selectionner = document.querySelector('#selected');
var overlay2 = document.querySelector('#overlay2');
var formulairePartie2 = document.querySelector('#formulairePartie2');
var question = document.querySelector('#question');
var toutesQuestion = document.querySelector('#toutesQuestion');
var validerQuestion = document.querySelector('#validerQuestion');
var btn = document.querySelector('#terminerFormulaire');



btnPartie1.addEventListener('click', function(){
    overlay.style.display = "initial";
    formulairePartie1.style.opacity = "1";
    formulairePartie1.style.display = "initial";
});

fermer.addEventListener('click', function(event){
    event.preventDefault();
    overlay.style.display = "none";
    formulairePartie1.style.display = "none";

});

validerFormulaire.addEventListener('click', function(event){
    event.preventDefault();
    if(titreFormulaire.value){
        titreFormulaireEntrer.innerHTML = titreFormulaire.value;
        boxTitre.style.display = "block";
        selection1.style.display = "block";
        btnPartie1.remove();
        overlay.style.display = "none";
        formulairePartie1.style.display = "none";
    }
});

selectionner.addEventListener('click', function(){
    if(selectionner.selectedIndex == "1"){
        toutesQuestion.innerHTML += "<div class='box'><h5>Quel âge avez vous?</h5> <input type='number' id='age' name='age' min='1' max='100'> <label class='form-check-label' for='flexRadioDefault1'>Age</label></div> <br>";
        selectionner.selectedIndex = "0";
        question.value = "";
    }
    if(selectionner.selectedIndex == "2"){
        toutesQuestion.innerHTML += "<div class='box'><h5>Votre sexe?</h5><input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1'> <label class='form-check-label' for='flexRadioDefault1'>Homme</label> <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault2'> <label class='form-check-label' for='flexRadioDefault1'>Femme</label></div><br>";
        selectionner.selectedIndex = "0";
        question.value = "";
    }
    if(selectionner.selectedIndex == "3"){
        overlay2.style.display = "initial";
        formulairePartie2.style.opacity = "1";
        formulairePartie2.style.display = "initial";
    }
    if(selectionner.selectedIndex == "4"){
        btn.style.display = "initial";
        selectionner.selectedIndex = "0";
    }
});


fermer2.addEventListener('click', function(event){
    event.preventDefault()
    overlay2.style.display = "none";
    formulairePartie2.style.display = "none";
    selectionner.selectedIndex = "0";
    
});

validerQuestion.addEventListener('click', function(event){
    event.preventDefault();
    if(question.value){
        toutesQuestion.innerHTML += "<div class='box'><h5>"+ question.value +"</h5> <label for='oui'>oui</label> <input type='checkbox' name='oui' id='oui' value=''><label for='non'>non</label> <input type='checkbox' name='non' id='non' value=''></div><br>";
        boxTitre.style.display = "block";
        selection1.style.display = "block";
        overlay2.style.display = "none";
        formulairePartie2.style.display = "none";
        selectionner.selectedIndex = "0";
        question.value = "";
    }
});


btn.addEventListener('click', function(){
    window.location.href ="pageFinal.html";

});
