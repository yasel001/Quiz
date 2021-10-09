<!DOCTYPE html>

<html>

<head>
    <title><?= $title ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="divers\css\styles.css">
</head>

<body class="vl">
    <h1 class="titresPage">Bienvenue <?= $nom ?></h1>
    <h6 class="role">Rôle :
        <img src='divers\img\admin.png'>
        <?= $role; ?>
        <?php if(isset($score)) echo $score; ?>
    </h6>

    <?php
        if(isset($outBoutonAcc))
            echo $outBoutonAcc;
    ?>

</body>

</html>