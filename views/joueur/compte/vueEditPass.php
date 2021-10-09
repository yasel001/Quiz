<?php
$title = "Editer Pass";
$script = "<script src=\"divers\js\EditValidePass.js\" async></script>";
$titre = "Modifier mon mot de passe";

ob_start();
?>

<form class="formAddQuestion" action="" method="POST" id='save_pass'>
    <div>
        <label>Nouveau mot de passe: </label><br>
        <input type="password" name="pass" id="passwd" required>
        <span class="errorInput" id="errorPass"><?php if (isset($msgErrorPass)) echo $msgErrorPass;  ?></span>
    </div>
    <div>
        <label>Confirmer Nouveau: </label><br>
        <input type="password" name="pass2" id="passwd2" required>
        <span class="errorInput" id="errorPass2"><?php if (isset($msgErrorPass2)) echo $msgErrorPass2;  ?></span>
    </div>

    <input class="buttonInscrireConnection" name="save_pass" type="submit" value="Save">
</form>
<?php
$form = ob_get_clean();

require 'template\templateEditLogPass.php';

?>