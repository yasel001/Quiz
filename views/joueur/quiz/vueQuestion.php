<!DOCTYPE html>

<html>

<head>
    <title>Quiz</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="divers\css\styles.css">
    <script src="divers\js\Chronometre.js" async></script>
</head>

<body>
    <div>
        <form method="POST" action="" id="myform" name="myform">
            <fieldset>
                <legend>Question n° <b><?php echo $_SESSION["numero_question"]; ?></b> - Votre score actuel : <b><?php echo $_SESSION["score"] . " / " . ($_SESSION["numero_question"] - 1) ?></b></legend>
                <table>
                    <tr>
                        <th><?php echo $infoQuestion['question'] ?></th>
                    <tr>
                        <td><input type="radio" name="rep" value="1" checked="checked"> <?php echo $infoQuestion['r1'] ?></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="rep" value="2"> <?php echo $infoQuestion['r2'] ?></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="rep" value="3"><?php echo $infoQuestion['r3'] ?></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="rep" value="4"><?php echo $infoQuestion['r4'] ?></td>
                    </tr>

                    <tr>
                        <td><input type="submit" name="btnSuiv" value="GO"></td>
                    </tr>
            </fieldset>
        </form>
    </div>

    <div>
        <p id='chrono' class='chrono'></p>
    </div>

    <?php
    $_SESSION["ok"] = $infoQuestion['reponse'];
    ?>
</body>

</html>