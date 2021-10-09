<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="divers\css\styles.css">
    <script src="divers\js\AjoutAndEditTheme.js" async></script>
</head>

<body>
    <h3 class="titresPage"><?= $titre ?></h3>

    <div>
        <a href="index.php?action=accTheme">
            <button class="buttonClassement">Retour</button>
        </a>

        <a href="index.php?action=typeUser">
            <button class="buttonGestQuestion">Accueil</button>
        </a>

        <a href="index.php">
            <button class="buttonDeco">Deconnexion</button>
        </a>
    </div>

    <br><br>

    <div>
        <?= $form ?>
    </div>
</body>

</html>
