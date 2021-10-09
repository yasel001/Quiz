//Element

let formEnvoyer = document.getElementById('con');

let log = document.getElementById('login');
let pass = document.getElementById('passwd');

let errorLogin = document.getElementById('errorLog');
let errorPass = document.getElementById('errorPass');

let caseShowPass = document.getElementById('showPass');


//Evenement

formEnvoyer.addEventListener('submit', function(e) { //Verifier integrite formulaire
    errorLogin.innerHTML = '';
    errorPass.innerHTML = '';

    if (log.validity.valueMissing) {
        e.preventDefault();
        log.focus();
        errorLogin.innerHTML = "Login Manquant";
    } else if (pass.validity.valueMissing) {
        e.preventDefault();
        pass.focus();
        errorPass.innerHTML = 'Mot de passe non saisie';
    }
});


caseShowPass.addEventListener('click', function() { //Aficher caché mot de passe
    pass.type = pass.type === 'password' ? 'text' : 'password';
});