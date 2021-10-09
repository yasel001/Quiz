<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="divers\css\styles.css">
</head>

<body>
    <h3 class="titresPage"><?= $titre; ?></h3>

    <div>
        <a href="index.php?action=typeUser">
            <button class="buttonClassement">Retour</button>
        </a>

        <a href="index.php">
            <button class="buttonDeco">Deconnexion</button>
        </a>
    </div>

    <br><br><br><br><br><br>

    <div>
        <?= $form ?>
    </div>
</body>

</html>