<?php
require_once('./sumatoria.php');
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <h1>Ejercicio 5</h1>
        <?php
            $nums = $_POST["nums"]; //???
            $array = str_split($nums);
        ?>
        <h3>Resultado: <?= sumatoria_a($array) ?></h3>
        <h3>Resultado: <?= sumatoria_b($array) ?></h3>
        <h3>Resultado: <?= sumatoria_c($array) ?></h3>
    </body>
</html>