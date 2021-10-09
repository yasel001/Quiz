<!DOCTYPE html>
<html>

<head>
    <title>DELETE</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="divers\css\styles.css">
    <script src="divers\js\Delete.js" async></script>
</head>

<body>
    <h3 class="titresPage"><?= $title; ?></h3>

    <div>
        <a href="index.php?action=<?= $redirectionRetour ?>">
            <button class="buttonClassement">Retour</button>
        </a>

        <a href="index.php?action=typeUser">
            <button class="buttonGestQuestion">Accueil</button>
        </a>

        <a href="index.php">
            <button class="buttonDeco">Deconnexion</button>
        </a>
    </div>

    <br>

    <div>
        <?= $confirmation; ?>
        <?php
            if(isset($suiteConf))
                echo $suiteConf;
        ?>

        <form class="formAddQuestion" action="" method="POST">
            <input type="radio" id="oui" name="choix" value="oui" checked /> Oui
            <input type="radio" id="non" name="choix" value="non" /> Non

            <input type="submit" name="deleteok" id="deleteok" value="Valider mon choix">
        </form>
    </div>
</body>

</html>