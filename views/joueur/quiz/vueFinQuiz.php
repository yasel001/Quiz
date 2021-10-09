<!DOCTYPE html>

<html>

<head>
    <title>Score</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="divers\css\styles.css">
</head>

<body>
    <h4>Votre quiz est terminé avec le score de <b><?php echo $_SESSION['score'] . "/" . $maxQuest; ?></b></h4>

    <div>
        <a href="index.php?action=typeUser">
            <button class="buttonClassement">Accueil</button>
        </a>

        <a href="index.php?action=theme">
            <button class="buttonGestQuestion">Je voudrais refaire un autre quiz</button>
        </a>

        <a href="index.php">
            <button class="buttonDeco">Deconnexion</button>
        </a>
    </div>

    <br><br>
    
    <h2>Resume de votre partie</h2>

    <div>
        <table class="quadrillageTableFinQuiz">
            <thead>
                <tr>
                    <th class="quadrillageTableFinQuiz" width="5%">n°</th>
                    <th class="quadrillageTableFinQuiz" width="40%">Question</th>
                    <th class="quadrillageTableFinQuiz" width="30%">Votre Reponse</th>
                    <th class="quadrillageTableFinQuiz" width="30%">La reponse correcte</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if (!empty($tableauPartie)) {
                    $cpt = 0;
                    foreach ($tableauPartie as $key => $value) :
                        $cpt++;
                ?>
                        <tr>
                            <td class="quadrillageTableFinQuiz"><?php echo $cpt; ?></td>
                            <td class="quadrillageTableFinQuiz"><?php echo $value['qu']; ?></td>
                            <td class="quadrillageTableFinQuiz"><?php echo $value['repUser']; ?></td>
                            <td class="quadrillageTableFinQuiz"><?php echo $value['repO']; ?></td>
                        </tr>
                <?php
                    endforeach;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>