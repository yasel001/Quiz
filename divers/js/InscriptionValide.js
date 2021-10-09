//Element

let formEnvoyer = document.getElementById('ins');

let log = document.getElementById('login');
let pass = document.getElementById('passwd');
let passVerif = document.getElementById('passwd2');

let errorLogin = document.getElementById('errorLog');
let errorPass = document.getElementById('errorPass');
let errorPassVer = document.getElementById('errorPass2');

let caseCheckPass = document.getElementById('showPass');
let caseCheckPass2 = document.getElementById('showPass2');


//Evenement 

formEnvoyer.addEventListener('submit', function(e) { //Controle formulaire
    errorLogin.innerHTML = '';
    errorPass.innerHTML = '';
    errorPassVer.innerHTML = '';

    if (log.validity.valueMissing || log.value == '') {
        e.preventDefault();
        log.focus();
        errorLogin.innerHTML = "Login Manquant";
    } else if (log.value.length > 15) {
        e.preventDefault();
        log.focus();
        errorLogin.innerHTML = 'Login => 15 caracteres maximum';
    } else if (pass.validity.valueMissing) {
        e.preventDefault();
        pass.focus();
        passVerif.value = '';
        errorPass.innerHTML = 'Mot de passe non saisie';
    } else if (pass.value.length < 8) {
        e.preventDefault();
        pass.focus();
        pass.value = '';
        passVerif.value = '';
        errorPass.innerHTML = 'Mot de passe au minimum 8 caracteres';
    } else if (passVerif.validity.valueMissing || passVerif.value == '') {
        e.preventDefault();
        passVerif.focus();
        passVerif.value = '';
        errorPassVer.innerHTML = 'Mot de passe de controle non saisie';
    } else if (passVerif.value !== pass.value) {
        e.preventDefault();
        passVerif.focus();
        passVerif.value = '';
        errorPassVer.innerHTML = 'Les mot de passe ne correspondent pas';
    }
});

caseCheckPass.addEventListener('click', function() { //Afficher caché mdp
    pass.type = pass.type === 'password' ? 'text' : 'password';
});

caseCheckPass2.addEventListener('click', function() { //Affciher caché mdp
    passVerif.type = passVerif.type === 'password' ? 'text' : 'password';
});