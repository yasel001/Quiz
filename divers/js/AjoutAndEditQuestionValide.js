//Recuperer les elements

let formEnvoyer = document.getElementById('submit_question');

let question = document.getElementById('question');
let reponse1 = document.getElementById('r1');
let reponse2 = document.getElementById('r2');
let reponse3 = document.getElementById('r3');
let reponse4 = document.getElementById('r4');
let reponseCorrecte = document.getElementById('rCorrecte');

let erreurQuestion = document.getElementById('errorQuestion');
let erreurRep1 = document.getElementById('errorR1');
let erreurRep2 = document.getElementById('errorR2');
let erreurRep3 = document.getElementById('errorR3');
let erreurRep4 = document.getElementById('errorR4');
let erreurRepCorrecte = document.getElementById('errorRCorrecte');



//Evenement

formEnvoyer.addEventListener('submit', function(e) { //Verification integrité des données lors de l'envoi du formulaire
    erreurQuestion.innerHTML = '';
    erreurRep1.innerHTML = '';
    erreurRep2.innerHTML = '';
    erreurRep3.innerHTML = '';
    erreurRep4.innerHTML = '';
    erreurRepCorrecte.innerHTML = '';

    if (question.validity.valueMissing) {
        e.preventDefault();
        question.focus();
        erreurQuestion.innerHTML = 'Question manquante';
    } else if (reponse1.validity.valueMissing) {
        e.preventDefault();
        reponse1.focus();
        erreurRep1.innerHTML = 'Reponse 1 manquante';
    } else if (reponse2.validity.valueMissing) {
        e.preventDefault();
        reponse2.focus();
        erreurRep2.innerHTML = 'Reponse 2 manquante';
    } else if (reponse3.validity.valueMissing) {
        e.preventDefault();
        reponse3.focus();
        erreurRep3.innerHTML = 'Reponse 3 manquante';
    } else if (reponse4.validity.valueMissing) {
        e.preventDefault();
        reponse4.focus();
        erreurRep4.innerHTML = 'Reponse 4 manquante';
    } else if (reponseCorrecte.validity.valueMissing) {
        e.preventDefault();
        reponseCorrecte.focus();
        erreurRepCorrecte.innerHTML = 'Reponse Correcte manquante';
    } else if (reponseCorrecte.value < 1 || reponseCorrecte.value > 4) {
        e.preventDefault();
        reponseCorrecte.focus();
        erreurRepCorrecte.innerHTML = 'Nombre Incorrect';
    }
});


reponseCorrecte.addEventListener('keyup', function(e) { //Controler que l'utilisateur entre le bon numero de reponse
    if (reponseCorrecte.value < 1 || reponseCorrecte.value > 4) {
        erreurRepCorrecte.style.color = 'RED';
        erreurRepCorrecte.innerHTML = 'Nombre Incorrect';
    } else {
        erreurRepCorrecte.style.color = 'GREEN';
        erreurRepCorrecte.innerHTML = 'Nombre Correct';
    }
});