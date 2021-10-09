<!DOCTYPE html>
<html>

<head>
    <title>Classement</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="divers\css\styles.css">
</head>

<body>
    <h3 class="titresPage">---Classement utilisateurs---</h3>

    <div>
        <a href="index.php">
            <button class="buttonDeco">Deconnexion</button>
        </a>

        <a href="index.php?action=typeUser">
            <button class="buttonClassement">Retour</button>
        </a>
    </div>

    <table class="quadrillageTable">
        <thead>
            <tr>
                <th class="quadrillageTable" width="20%">Pseudo</th>
                <th class="quadrillageTable" width="20%">Moyenne</th>
                <th class="quadrillageTable" width="20%">Nombre de partie</th>
            </tr>
        </thead>

        <tbody>
            <?php
            if (!empty($listeScoreJoueur)) {
                foreach ($listeScoreJoueur as $ligneDeScore) :
            ?>
                    <tr>
                        <td class="quadrillageTable"><?php echo $ligneDeScore["loginUser"] . " : "; ?></td>
                        <td class="quadrillageTable"><?php echo number_format($ligneDeScore["resultat"] * 10, 2) . "%"; ?></td>
                        <td class="quadrillageTable"><?php echo $ligneDeScore["nb_essai"] . " parties "; ?></td>
                    </tr>
            <?php
                endforeach;
            }
            ?>
        </tbody>
    </table>
</body>
</html>