<?php

    require_once('./ejercicios-progra-web-2/ejercicio-1/semaforo.php');

?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Index - Ejercicios</title>
    </head>
    <body>
        <header></header>
        <main>
            <h1>Ejercicio 1</h1>
            <form method="POST">
                <input type="text" name="color">
                <button type="submit">Enviar</button>
            </form>
            <?php
                $color = !isset($_POST['color']) ? false : $_POST['color'];
            ?>
            <h3>Resultado 1: <?= $color ? semaforo_1($color) : "Esperando input..." ?></h3>
            <h3>Resultado 2: <?= $color ? semaforo_2($color) : "Esperando input..." ?></h3>
            <h3>Resultado 3: <?= $color ? semaforo_3($color) : "Esperando input..." ?></h3>
        </main>
        <footer></footer>
    </body>
</html>