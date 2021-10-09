    <?php
        $title = "Accueil Joueur";
        $nom = $_SESSION['login'];
        $role = $_SESSION['typeUser'];
        $score = ' <br> Vous avez effectué ' . $nbEssai[0][1] . ' parties';

        ob_start();
    ?>

    <a href="index.php?action=classement">
        <button class="buttonClassement">Classement Joueur</button>
    </a>

    <a href="index.php?action=theme">
        <button class="buttonGestQuestion">Play Game</button>
    </a>

    <a href="index.php">
        <button class="buttonDeco">Deconnexion</button>
    </a>

    <br><br>

    <a href="index.php?action=tapePassModJoueur">
        <button class="buttonDeco">Gestion Profil</button>
    </a>

    <?php
        $outBoutonAcc = ob_get_clean();

        require 'template\templateEcranAccueil.php';
    ?>