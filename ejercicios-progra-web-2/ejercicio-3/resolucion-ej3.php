<?php
    require_once("./contacatenacion.php");
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <h1>Ejercicio 3</h1>
        <?php
            $texto1 = !isset($_POST['texto1']) ? null : $_POST['texto1'];
            $texto2 = !isset($_POST['texto2']) ? null : $_POST['texto2'];
        ?>
        <h3>Resultado: <?= $texto1 && $texto2 ? concatenar($texto1, $texto2) : "No hay input" ?></h3>
    </body>
</html>
