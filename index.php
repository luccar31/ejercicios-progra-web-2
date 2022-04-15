<?php

    require_once('./ejercicios-progra-web-2/ejercicio-1/semaforo.php');
    require_once('./ejercicios-progra-web-2/ejercicio-2/binomio-cuadrado-perfecto.php');
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
            <section>
                <article>
                    <h1>Ejercicio 1: Semáforo</h1>
                    <form method="POST" id="ejercicio1">
                        <input type="text" name="color" placeholder="Ingrese color del semáforo">
                        <button type="submit" form="ejercicio1">Enviar</button>
                    </form>
                    <?php
                        $color = !isset($_POST['color']) ? false : $_POST['color'];
                    ?>
                    <h3>Resultado 1: <?= $color ? semaforo_1($color) : "Esperando input..." ?></h3>
                    <h3>Resultado 2: <?= $color ? semaforo_2($color) : "Esperando input..." ?></h3>
                    <h3>Resultado 3: <?= $color ? semaforo_3($color) : "Esperando input..." ?></h3>
                </article>
                <article>
                    <h1>Ejercicio 2: Binomio cuadrado perfecto</h1>
                    <form method="POST" id="ejercicio2">
                        <input type="number" placeholder="Ingrese primer termino del binomio" name="a">
                        <input type="number" placeholder="Ingrese segundo termino del binomio" name="b">
                        <button type="submit" form="ejercicio2">Calcular</button>
                    </form>
                    <?php
                        $a = !isset($_POST['$a']) ? false : $_POST['$a'];
                        $b = !isset($_POST['$b']) ? false : $_POST['$b'];
                    ?>
                    <h3>Resultado 1: <?= $a && $b ? binomioCuadradoPerfecto_a($a, $b) : "Esperando input..." ?></h3>
                    <h3>Resultado 2: <?= $a && $b ? binomioCuadradoPerfecto_b($a, $b) : "Esperando input..." ?></h3>
                </article>
            </section>
        </main>
        <footer></footer>
    </body>
</html>