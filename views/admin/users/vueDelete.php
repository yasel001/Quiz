<?php
    $title = "---Supprimer un Utilisateur---";
    $redirectionRetour = "accGererUser";
    $confirmation = "Voulez vous vraiment supprimer l'utilisateur : ";
    $suiteConf = $rowToDelete['loginUser'];

    require 'template\templateDelete.php';
?>