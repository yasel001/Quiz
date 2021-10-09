//Element

let radioOui = document.getElementById('oui');
let radioNon = document.getElementById('non');
let validerDel = document.getElementById('deleteok');


//Evenement

validerDel.addEventListener('click', function() {
    if (radioOui.checked) {
        alert('Suppression effectué');
    } else if (radioNon.checked) {
        alert('Suppression non effectuée');
    }
});