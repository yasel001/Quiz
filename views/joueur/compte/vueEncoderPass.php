<?php
$title = 'Editer user';
$titre = "---Modifier mes données---";

ob_start();
?>

        <form class="formAddQuestion" action="" method="POST" id='entrerPass'>
            <div>
                <label>Mot de passe: </label><br>
                <input type="password" name="mdp" id="mdp" required>
                <span class="errorInput" id="errorPass"> <?php if (isset($msgErrorPass)) echo  $msgErrorPass; ?></span>
            </div>

            <input class="buttonInscrireConnection" name="entrerPass" type="submit" value="Enter">
        </form>
<?php
    $form = ob_get_clean();

    require 'template\templateEditUEncoderP.php';
?>
