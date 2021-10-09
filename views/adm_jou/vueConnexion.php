<!DOCTYPE html>

<html>

<head>
    <title>Connexion</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="divers\css\styles.css">
    <script src="divers\js\ConnexionValide.js" async></script>
</head> 

<body>
    <form method="POST" action="" id="con">
        <br><br><br>
        <h2 class="titresPage">CONNEXION</h2>
        <fieldset class="taillefieldset">
            <legend>Données</legend>
            <label for="login">Login : </label>
            <input class="inputSaisie" type="text" name="login" id="login" placeholder="Saisir login" required value=<?php if (isset($login)) echo $login; ?>>
            <span class="errorInput" id="errorLog"><?php if (isset($msgErrorLogin)) echo $msgErrorLogin ?></span>
            <br><br>

            <label for="passwd">Mot de passe :</label>
            <input class="inputSaisie" type="password" name="passwd" id="passwd" placeholder="Saisir password" required>
            <span class="errorInput" id="errorPass"><?php if (isset($msgErrorPassword)) echo $msgErrorPassword; ?></span>
            <br>
            Afficher/Cacher mot de passe <input class="inputBoutonAfficherCacher" type="checkbox" id="showPass">
            <br><br>

            <input class="buttonInscrireConnection" type="submit" name="con" value="Se connecter">
        </fieldset>
    </form>
    <a href="index.php"><button class="Retour">Retour</button></a>
    <a href="index.php?action=inscription"><button class="DejaOrPasDeCompte_connexion">Pas encore de compte !</button></a>
</body>

</html>