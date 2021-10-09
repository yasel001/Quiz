<?php
//EL FILALI Yassine 2IG

require 'Question.php';
require 'QuestionManager.php';
require 'UtilisateurManager.php';
require 'Utilisateur.php';
require 'DBManager.php';
require 'QuizManager.php';
require 'Theme.php';
require 'ThemeManager.php';

function securisation($chaine)
{ // Permet de sécuriser la chaine de caractere
    $chaine = trim($chaine);
    $chaine = stripcslashes($chaine);
    $chaine = strip_tags($chaine);
    $chaine = htmlspecialchars($chaine);
    return $chaine;
}
