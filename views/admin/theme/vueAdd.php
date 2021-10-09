<?php
$title = "Ajouter un Theme";
$titre = "---Ajouter un Theme---";
ob_start();
?>

<form class="formAddQuestion" action="" method="POST" id='submit_theme'>
    <div>
        <label>Theme: </label><br>
        <input type='text' name="theme" id="theme" required>
        <span class="errorInput" id="errorTheme"><?php if (isset($msgErrorTheme)) echo $msgErrorTheme;  ?></span>
    </div>
    <input class="buttonInscrireConnection" name="add_theme" type="submit" value="Add">
</form>

<?php
     $form = ob_get_clean(); 
     
     require 'template\templateTheme.php';
?>