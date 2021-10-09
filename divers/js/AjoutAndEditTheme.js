//Recuperer les elements 

let formEnvoyer = document.getElementById('submit_theme');

let theme = document.getElementById('theme');

let erreurTheme = document.getElementById('errorTheme');


//Evenement 

formEnvoyer.addEventListener('submit', function(e) { //Controler l'integrite formulaire
    erreurTheme.innerHTML = '';

    if (theme.validity.valueMissing) {
        e.preventDefault();
        theme.focus();
        erreurTheme.innerHTML = 'Champs non saisie';
    }
});