<?php
$title = "Editer Theme";
$titre = "---Modifier un Theme---";
ob_start();
?>

<form class="formAddQuestion" action="" method="POST" id='submit_theme'>
    <div>
        <label>Theme: </label><br>
        <input type="text" name="theme" id="theme" value="<?php echo $rowThemeEdit['nom']; ?>" required>
        <span class="errorInput" id="errorTheme"><?php if (isset($msgErrorTheme)) echo $msgErrorTheme;  ?></span>
    </div>

    <br>
    <input class="buttonInscrireConnection" name="save_theme" type="submit" value="Save">
</form>
<?php

$form = ob_get_clean();
require 'template\templateTheme.php';

?>