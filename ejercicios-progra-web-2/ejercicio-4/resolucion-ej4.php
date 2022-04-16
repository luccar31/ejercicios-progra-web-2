<?php
    require_once('./incrementar.php');
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <h1>Ejercicio 4</h1>
        <?php
            $num = $_POST['num'];
            $hayNum = $num == 0 || !empty($num);
            if ($hayNum) incrementar($num);
        ?>
        <h3>Resultado: <?= $hayNum ? $num : 'No hay input' ?></h3>
    </body>
</html>