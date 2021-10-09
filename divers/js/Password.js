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