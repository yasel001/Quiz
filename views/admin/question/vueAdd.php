<?php
$title = "Ajouter une Question";
$titre = "---Ajouter une Question---";
ob_start();
?>

<form class="formAddQuestion" action="" method="POST" id='submit_question'>
    <div>
        <label>Question: </label><br>
        <textarea name="question" id="question" rows="5" cols="33" required></textarea>
        <span class="errorInput" id="errorQuestion"><?php if (isset($msgErrorQuestion)) echo $msgErrorQuestion;  ?></span>
    </div>
    <div>
        <label>Reponse 1: </label><br>
        <textarea name="r1" id="r1" rows="5" cols="33" required></textarea>
        <span class="errorInput" id="errorR1"></span>
    </div>
    <div>
        <label>Reponse 2: </label><br>
        <textarea name="r2" id="r2" rows="5" cols="33" required></textarea>
        <span class="errorInput" id="errorR2"></span>
    </div>
    <div>
        <label>Reponse 3: </label><br>
        <textarea name="r3" id="r3" rows="5" cols="33" required></textarea>
        <span class="errorInput" id="errorR3"></span>
    </div>
    <div>
        <label>Reponse 4: </label><br>
        <textarea name="r4" id="r4" rows="5" cols="33" required></textarea>
        <span class="errorInput" id="errorR4"></span>
    </div>
    <?php if ($_SESSION['themeName'] == 0) { ?>
        <div>
            <label>Theme: </label><br>
            <select name="themeNameAdd" size="1" required>
                <?php if (isset($ligneTheme)) {
                    foreach ($ligneTheme as $ligneDeTheme) : ?>
                        <option value="<?php echo $ligneDeTheme['theme']; ?>"><?php echo $ligneDeTheme['nom'] ?>
                    <?php endforeach;
                } ?>
            </select>
        </div>
    <?php } ?>

    <div>
        <label>Numero reponse correcte: </label><br>
        <input type="number" name="rCorrecte" id="rCorrecte" required min="1" max="4">
        <span class="errorInput" id="errorRCorrecte"><?php if (isset($msgErrorRepCorrecte)) echo $msgErrorRepCorrecte;  ?></span>
    </div>

    <br>
 
    <input class="buttonInscrireConnection" name="add_question" type="submit" value="Add">
    <?php if (isset($msgErrorReponse)) echo  $msgErrorReponse; ?>
</form>
<?php
$form = ob_get_clean();

require 'template\templateQuestion.php';
?>