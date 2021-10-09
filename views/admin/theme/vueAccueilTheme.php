<?php
$title = "Gerer Themes";
$titre = "---Gestion des Themes---";
$boutonRetour = "typeUser";
$boutonMilieu = "insertTheme";

ob_start();
?>

<thead>
    <tr>
        <th class="quadrillageTableGestionQuestion" width="20%">n°</th>
        <th class="quadrillageTableGestionQuestion" width="30%">Theme</th>
    </tr>
</thead>

<tbody>
    <?php
    if (!empty($listeTheme)) {
        foreach ($listeTheme as $ligneDeTheme) :
    ?>
            <tr>
                <td class="quadrillageTableGestionQuestion"><?php echo $ligneDeTheme["theme"]; ?></td>
                <td class="quadrillageTableGestionQuestion"><?php echo $ligneDeTheme["nom"]; ?></td>
                <td class="quadrillageTableGestionQuestion" width="2%">
                    <a href="index.php?action=editTheme&id=<?php echo $ligneDeTheme['theme']; ?>">
                        <img src="divers/img/edit.png" title="Edit" />
                    </a>
                    <a href="index.php?action=deleteTheme&id=<?php echo $ligneDeTheme['theme']; ?>">
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