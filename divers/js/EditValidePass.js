let envoyer = document.getElementById('save_pass');

let pass = document.getElementById('passwd');
let passVerif = document.getElementById('passwd2');

let errorPass = document.getElementById('errorPass');
let errorPassVer = document.getElementById('errorPass2');


envoyer.addEventListener('submit', function(e) { //Controle formulaire
    errorPass.innerHTML = '';
    errorPassVer.innerHTML = '';

    if (pass.validity.valueMissing || pass.value == '') {
        e.preventDefault();
        pass.focus();
        errorPass.innerHTML = 'Mot de passe a saisir';
    } else if (pass.value.length < 8) {
        e.preventDefault();
        pass.focus();
        pass.value = '';
        errorPass.innerHTML = 'Mot de passe au minimum 8 caracteres';
    } else if (passVerif.validity.valueMissing || passVerif.value == '') {
        e.preventDefault();
        passVerif.focus();
        passVerif.value = '';
        errorPassVer.innerHTML = 'Mot de passe de controle non saisie';
    } else if (passVerif.value !== pass.value) {
        e.preventDefault();
        passVerif.value = '';
        errorPassVer.innerHTML = 'Les mot de passe ne correspondent pas';
    }
});


pass.addEventListener('keyup', function(e) { //Controle password
    if (passwd.value.length < 8) {
        errorPass.style.color = 'red';
        errorPass.innerHTML = 'Mot de passe Invalide';
    } else {
        errorPass.style.color = 'green';
        errorPass.innerHTML = 'Mot de passe fort';
    }
});

passVerif.addEventListener('keyup', function(e) { //Controle password
    if (passVerif.value == passwd.value) {
        errorPassVer.style.color = 'green';
        errorPassVer.innerHTML = 'Mot de passe correspondent';
    } else {
        errorPassVer.style.color = 'red';
        errorPassVer.innerHTML = 'Mot de passe ne corresponde pas';
    }
});