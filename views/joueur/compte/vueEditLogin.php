<?php
$title = "Editer Login";
$script = "<script src=\"divers\js\EditLoginUser.js\" async></script>";
$titre = "Modifier mon Login";

ob_start();
?>

<form class="formAddQuestion" action="" method="POST" id='save_log'>
    <div>
        <label>Login: </label><br>
        <input name="login" id="login" required value="<?php echo $_SESSION['login']; ?>">
        <span class="errorInput" id="errorLogin"><?php if (isset($msgErrorLogin)) echo $msgErrorLogin;  ?></span>
    </div>

    <input class="buttonInscrireConnection" name="save_log" type="submit" value="Save">
</form>
<?php
$form = ob_get_clean();

require 'template\templateEditLogPass.php';
?>