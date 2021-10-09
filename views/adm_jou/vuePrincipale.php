<!DOCTYPE html>
<?php
session_unset();
session_destroy();
?>

<html>

<head>
    <title>Accueil</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="divers\css\styles.css">
</head>

<body>
    <h1 class="titresPage">QUIZ : </h1>
    
    <a href="index.php?action=inscription">
        <button class="buttonInscrireAccueil">Inscription</button>
    </a>

    <a href="index.php?action=connect">
        <button class="buttonConnectionAccueil">Connexion</button>
    </a>
</body>

</html>