<?php
    require_once("./semaforo.php");
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
        <?php
            $color = !isset($_POST['color']) ? null : $_POST['color'];
        ?>
        <h3>Resultado 1: <?= $color ? semaforo_1($color) : "No hay input" ?></h3>
        <h3>Resultado 2: <?= $color ? semaforo_2($color) : "No hay input" ?></h3>
        <h3>Resultado 3: <?= $color ? semaforo_3($color) : "No hay input" ?></h3>
    </body>
</html>

