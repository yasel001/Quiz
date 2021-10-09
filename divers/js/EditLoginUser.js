//Element

let formEnvoyer = document.getElementById('save_log');

let log = document.getElementById('login');

let errorLogin = document.getElementById('errorLogin');


//Evenement 

formEnvoyer.addEventListener('submit', function(e) { //Controle formulaire
    errorLogin.innerHTML = '';

    if (log.validity.valueMissing || log.value == '') {
        e.preventDefault();
        log.focus();
        errorLogin.innerHTML = "Login Manquant";
    } else if (log.value.length > 15) {
        e.preventDefault();
        log.focus();
        errorLogin.innerHTML = 'Login => 15 caracteres maximum';
    }
});