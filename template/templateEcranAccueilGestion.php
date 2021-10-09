<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="divers\css\styles.css">
</head>

<body>
    <h3 class="titresPage"><?= $titre ?></h3>

    <div>
        <a href="index.php?action=<?= $boutonRetour ?>">
            <button class="buttonClassement">Retour</button>
        </a>

        <a href="index.php?action=<?= $boutonMilieu ?>">
            <button class="buttonGestQuestion">
            <?php if(!isset($textRetour)) echo '<img src=\'divers/img/add.png\' title=\'Add New Question\' />'; else echo $textRetour;?>
            </button>
        </a>

        <a href="index.php">
            <button class="buttonDeco">Deconnexion</button>
        </a>

        <br><br>
        <?php if(isset($boutonAccueil)) echo $boutonAccueil; ?>
    </div>

    <br><br><br><br><br><br>

    <div>
        <table class="quadrillageTableGestionQuestion">

    <?php echo $liste; ?>

        </table>
    </div>
</body>

</html>