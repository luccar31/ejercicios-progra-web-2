<?php
    require_once("./binomio-cuadrado-perfecto.php");
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <h1>Ejercicio 2</h1>
        <?php
            $a = $_POST['a'];
            $b = $_POST['b'];

            $hayA = $a == 0 || !empty($a);
            $hayB = $b == 0 || !empty($b);
        ?>
        <h3>Resultado 1: <?= $hayA && $hayB ? binomioCuadradoPerfecto_a($a, $b) : "No hay input" ?></h3>
        <h3>Resultado 2: <?= $hayA && $hayB ? binomioCuadradoPerfecto_b($a, $b) : "No hay input" ?></h3>
    </body>
</html>


