<!DOCTYPE html>
<html>

<head>
    <title>Theme</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="divers\css\styles.css">
</head>

<body>
    <h3 class="titresPage">---Choix du theme :---</h3>
    <div>
        <a href="index.php">
            <button class="buttonDeco">Deconnexion</button>
        </a>

        <a href="index.php?action=typeUser">
            <button class="buttonClassement">Retour</button>
        </a>
    </div>

    <br><br><br><br><br><br><br><br><br>

    <form class="formAddQuestion" method="POST" action="">
        <label for="theme">Theme : <label>
                <select name="themeName" id="theme" size="1" required>
                    <option value="0">Tout
                        <?php if (isset($ligneTheme)) {
                            foreach ($ligneTheme as $ligneDeTheme) : ?>
                    <option value="<?php echo $ligneDeTheme['theme']; ?>"><?php echo $ligneDeTheme['nom'] ?>
                <?php endforeach;
                        } ?>
                </select>

                <br>
                <br>
                <input type="submit" value="VALIDER" name="bouton">
    </form>
</body>

</html>