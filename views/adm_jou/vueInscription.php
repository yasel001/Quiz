<!DOCTYPE html>
<html>

<head>
    <title>Inscription</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="divers\css\styles.css">
    <script src="divers\js\Password.js" async></script>
    <script src="divers\js\InscriptionValide.js" async></script>
</head>

<body>
    <br>
    <form method="POST" action="" id="ins">
        <h2 class="titresPage">INSCRIPTION</h2>
        <fieldset class="taillefieldset">
            <legend>Données</legend>
            <label for="login">Login : </label>
            <input class="inputSaisie" type="text" name="login" id="login" placeholder="Saisir login" required value=<?php if (isset($login)) echo $login; ?>>
            <span class="errorInput" id="errorLog"><?php if (isset($msgErrorLogin)) echo $msgErrorLogin ?></span>
            <br><br>

            <label for="passwd">Mot de passe :</label>
            <input class="inputSaisie" type="password" name="passwd" id="passwd" required placeholder="Saisir mot de passe">
            <input class="inputBoutonAfficherCacher" type="checkbox" id="showPass">
            <span class="errorInput" id="errorPass">
                <?php
                if (isset($msgErrorPassword))
                    echo $msgErrorPassword;
                else if ((isset($msgErrorPassword2)))
                    echo $msgErrorPassword2;
                ?>
            </span>
            <br><br>

            <label for="passwd2">Verification mot de passe :</label>
            <input class="inputSaisie" type="password" name="passwd2" id="passwd2" required placeholder="Retapez mot de passe">
            <input class="inputBoutonAfficherCacher" type="checkbox" id="showPass2">
            <span class="errorInput" id="errorPass2"><?php if (isset($msgErrorPassword2)) echo $msgErrorPassword2 ?></span>
            <br><br>

            <input class="buttonInscrireConnection" type="submit" name="ins" value="S'inscrire">
        </fieldset>
    </form>
    <a href="index.php"><button class="Retour">Retour</button></a>
    <a href="index.php?action=connect"><button class="DejaOrPasDeCompte_connexion">Déja un compte !</button></a>
</body>

</html>