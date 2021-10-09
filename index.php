<?php
//EL FILALI Yassine 2IG

// Controleur frontal 

require 'controllers\controller.php';

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'inscription') { //Redirige vers le controleur d'inscription
        inscription();
    } else if ($_GET['action'] == 'connect') {  //Redirige vers le controleur de connection
        connection();
    } else if ($_GET['action'] == 'typeUser') { //Redirige vers le controleur qui amene vers la vue accueil (quand utilisateur est connecter)
        ecranAccueil();
    } else if ($_GET['action'] == 'accQuest') { //Redirige vers le controleur qui controle l'accueil des questions
        ecranListeQuestion();
    } else if ($_GET['action'] == 'insert') {   //Redirige vers le controleur gerant l'insertion questions
        ecranAddQuestion();
    } else if ($_GET['action'] == 'edit') {     //Redirige vers le controleur gerant l'edition question
        ecranEditQuestion();
    } else if ($_GET['action'] == 'delete') {   //Redirige vers le controleur de suppression de question
        ecranDeleteQuestion();
    } else if ($_GET['action'] == 'classement') {   //Redirige vers le controleur de classement
        ecranClassement();
    } else if ($_GET['action'] == 'jouer') {    //Redirige vers le controleur de lancement du quiz
        ecranDemarrerQuiz();
    } else if ($_GET['action'] == 'theme') {    //Redirige vers le controleur de choix du theme
        ecranThemeJouer();
    } else if ($_GET['action'] == 'accTheme') { //Redirige vers le controleur d'accueil des themes
        ecranListeTheme();
    } else if($_GET['action'] == 'insertTheme'){    //Redirige vers le controleur d'insertion de theme
        ecranAddTheme();
    } else if($_GET['action'] == 'editTheme'){  //Redirige vers le controleur d'edition de theme
        ecranEditTheme();
    } else if($_GET['action'] == 'deleteTheme'){    //Redirige vers le controleur de suppression de theme
        ecranDeleteTheme();
    } else if($_GET['action'] == 'tapePassModJoueur'){  //Redirige vers le controleur d'entrer mot de passe (gestion user)
        ecranTapePasswordForModify();
    } else if($_GET['action'] == 'accModUser'){ //Redirige vers le controleur qui permet de choisir a modifier le login, password
        ecranUserModify();
    } else if($_GET['action'] == 'accLoginMod'){    //Redirige vers le controleur qui permet de modifier le login
        ecranEditLog();
    } else if($_GET['action'] == 'accPassMod'){ //Redirige vers le controleur qui permet de modifier le mdp
        ecranEditPass();
    } else if($_GET['action'] == 'accGererUser'){   //Redirige vers le controleur permettant a l'admin de gerer l'user
        ecranGererUser();
    } else if($_GET['action'] == 'deleteUser'){ //Redirige vers le controleur permettant la suppression de l'utilisateur
        ecranDeleteUser();
    } else if($_GET['action'] == 'deleteAllUsers'){ //Redirige vers le controleur de suppression des utilisateurs
        ecranDeleteAllUser();
    }
} else {
    accueilEtranger();  //Redirige vers l'écran principale
}