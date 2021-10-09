    <?php
            $title = "Panel Admin";
            $nom = $_SESSION['login'];
            $role = $_SESSION['typeUser'];

            ob_start();
    ?>

    <a href="index.php?action=classement">
        <button class="buttonClassement">Classement Joueur</button>
    </a>

    <a href="index.php?action=theme">
        <button class="buttonGestQuestion">Gestion des questions</button>
    </a>

    <a href="index.php">
        <button class="buttonDeco">Deconnexion</button>
    </a>

    <br><br>
    <a href="index.php?action=accTheme">
        <button class="buttonDeco">Gestion des themes</button>
    </a>

    <a href="index.php?action=accGererUser">
        <button class="buttonClassement">Gestion des Utilisateurs</button>
    </a>

    <?php
        $outBoutonAcc = ob_get_clean();

        require 'template\templateEcranAccueil.php';
    ?>