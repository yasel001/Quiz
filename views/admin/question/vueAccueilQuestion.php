    <?php
    $title = "Gerer Question";
    $titre = "---Gestion des Questions---";
    $boutonRetour = "theme";
    $boutonMilieu = "insert";

    ob_start();
    ?>
    <a href="index.php?action=typeUser">
        <button class="buttonClassement">Accueil</button>
    </a>
    <?php
    $boutonAccueil = ob_get_clean();

    ob_start();
    ?>

    <thead>
        <tr>
            <th class="quadrillageTableGestionQuestion" width="1%">n°</th>
            <th class="quadrillageTableGestionQuestion" width="30%">Question</th>
            <th class="quadrillageTableGestionQuestion" width="25%">Reponse 1</th>
            <th class="quadrillageTableGestionQuestion" width="20%">Reponse 2</th>
            <th class="quadrillageTableGestionQuestion" width="20%">Reponse 3</th>
            <th class="quadrillageTableGestionQuestion" width="25%">Reponse 4</th>
            <th class="quadrillageTableGestionQuestion" width="1%">Reponse correcte</th>
        </tr>
    </thead>

    <tbody>
        <?php
        if (!empty($listeQuestion)) {
            foreach ($listeQuestion as $ligneDeQuestion) :
        ?>
                <tr>
                    <td class="quadrillageTableGestionQuestion"><?php echo $ligneDeQuestion["num_quest"]; ?></td>
                    <td class="quadrillageTableGestionQuestion"><?php echo $ligneDeQuestion["question"]; ?></td>
                    <td class="quadrillageTableGestionQuestion"><?php echo $ligneDeQuestion["r1"]; ?></td>
                    <td class="quadrillageTableGestionQuestion"><?php echo $ligneDeQuestion["r2"]; ?></td>
                    <td class="quadrillageTableGestionQuestion"><?php echo $ligneDeQuestion["r3"]; ?></td>
                    <td class="quadrillageTableGestionQuestion"><?php echo $ligneDeQuestion["r4"]; ?></td>
                    <td class="quadrillageTableGestionQuestion"><?php echo $ligneDeQuestion["reponse"]; ?></td>
                    <td class="quadrillageTableGestionQuestion">
                        <a href="index.php?action=edit&id=<?php echo $ligneDeQuestion['num_quest']; ?>">
                            <img src="divers/img/edit.png" title="Edit" />
                        </a>
                        <a href="index.php?action=delete&id=<?php echo $ligneDeQuestion['num_quest']; ?>">
                            <img src="divers/img/delete.png" title="Delete" />
                        </a>
                    </td>
                </tr>
        <?php
            endforeach;
        }
        $liste = ob_get_clean();

        require 'template\templateEcranAccueilGestion.php';
        ?>
    </tbody>