<?php
$title = "Modifier une Question";
$titre = "---Modifier une Question---";
ob_start();
?>
<form class="formAddQuestion" action="" method="POST" id='submit_question'>
    <div>
        <label>Question: </label><br>
        <textarea name="question" id="question" rows="5" cols="33" required><?php echo $rowToEdit['question']; ?></textarea>
        <span class="errorInput" id="errorQuestion"><?php if (isset($msgErrorQuestion)) echo $msgErrorQuestion;  ?></span>
    </div>
    <div>
        <label>Reponse 1: </label><br>
        <textarea name="r1" id="r1" rows="5" cols="33" required><?php echo $rowToEdit['r1']; ?></textarea>
        <span class="errorInput" id="errorR1"></span>
    </div>
    <div>
        <label>Reponse 2: </label><br>
        <textarea name="r2" id="r2" rows="5" cols="33" required><?php echo $rowToEdit['r2']; ?></textarea>
        <span class="errorInput" id="errorR2"></span>
    </div>
    <div>
        <label>Reponse 3: </label><br>
        <textarea name="r3" id="r3" rows="5" cols="33" required><?php echo $rowToEdit['r3']; ?></textarea>
        <span class="errorInput" id="errorR3"></span>
    </div>
    <div>
        <label>Reponse 4: </label><br>
        <textarea name="r4" id="r4" rows="5" cols="33" required><?php echo $rowToEdit['r4']; ?></textarea>
        <span class="errorInput" id="errorR4"></span>
    </div>

    <div>
        <label>Changer Theme: </label><br>
        <select name="themeNameEdit" size="1">
            <?php if (isset($ligneTheme)) {
                foreach ($ligneTheme as $ligneDeTheme) : ?>
                    <option value="<?php echo $ligneDeTheme['theme']; ?>" <?php if ($ligneDeTheme['theme'] == $rowToEdit['theme']) echo "selected=\"selected\"" ?>><?php echo $ligneDeTheme['nom'] ?>
                <?php endforeach;
            } ?>
        </select>
    </div>

    <div>
        <label>Reponse correcte: </label><br>
        <input type="number" name="rCorrecte" id="rCorrecte" min="1" max="4" value="<?php echo $rowToEdit['reponse']; ?>" rows="5" cols="33" required>
        <span class="errorInput" id="errorRCorrecte"><?php if (isset($msgErrorRepCorrecte)) echo $msgErrorRepCorrecte;  ?></span>
    </div>

    <br>
    <input class="buttonInscrireConnection" name="save_question" type="submit" value="Save">
    <?php if (isset($msgErrorReponse)) echo  $msgErrorReponse; ?>
</form>
<?php
$form = ob_get_clean();

require 'template\templateQuestion.php';
?>