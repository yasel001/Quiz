<?php
$title = 'Editer user';
$titre = "---Modifier mon login---";

ob_start();
?>


<a href="index.php?action=accLoginMod">
    <button class="buttonInscrireConnection">Modifier mon login</button>
</a>

<a href="index.php?action=accPassMod">
    <button class="buttonInscrireConnection">Modifier mon mot de passe</button>
</a>

<?php

$form = ob_get_clean();

require 'template\templateEditUEncoderP.php';
?>