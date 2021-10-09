<!DOCTYPE html>
<html>

<head>
    <title>ERROR 404</title>
    <meta charset="UTF-8">
</head>

<body>
    <div>
        <?php
            $date = date('d-m-y h:i:s');
            echo $date . " ==> Une erreur est survenue : " . $msgError;
        ?>
    </div>
</body>

</html>