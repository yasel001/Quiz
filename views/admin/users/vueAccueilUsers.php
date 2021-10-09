<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="divers\css\styles.css">
</head>

<?php
$title = "Gerer Users";
$titre = "---Gestion des Utilisateurs---";
$boutonRetour = "typeUser";
$boutonMilieu = "deleteAllUsers";
$textRetour = "Supprimer tous les utilisateurs qui ne se sont jamais connecté";

ob_start();
?>

<body>

    <thead>
        <tr>
            <th class="quadrillageTableGestionQuestion" width="50%">Pseudo</th>
        </tr>
    </thead>

    <tbody>
        <?php
        if (!empty($listeUsers)) {
            foreach ($listeUsers as $ligneDeUsers) :
        ?>
                <tr>
                    <td class="quadrillageTableGestionQuestion"><?php echo $ligneDeUsers["loginUser"]; ?></td>
                    <td class="quadrillageTableGestionQuestion" width="2%">
                        <a href="index.php?action=deleteUser&id=<?php echo $ligneDeUsers['id']; ?>">
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