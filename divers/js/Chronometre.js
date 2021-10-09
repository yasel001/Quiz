//Fichier audio 
let audio = new Audio('divers/son/minuteur.mp3');

//Constante
let seconde = 10;

//Methode du chronometre pour le diminuer toute les secondes
intervalId = setInterval(function() {
    document.getElementById('chrono').innerHTML = seconde;

    if (seconde < 4) { //Audio qui se met en route lorsqu'on atteint 3secondes
        document.getElementById('chrono').style.color = "RED";
        audio.play();
    }
    seconde--;
}, 1000);

//Arrete le chronometre apres 10secondes
intervalTimeOut = setTimeout(function() {
    document.getElementById('myform').submit(); //On soumet le formulaire pour passer a la question suivante

    clearInterval(intervalId); //Arreter l'execution du chrono
    clearTimeout(intervalTimeOut);
}, 11000);