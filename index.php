<?php
    include_once('./ejercicios-progra-web-2/utils/elementos-html.php');
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Index - Ejercicios</title>
    </head>
    <body>
        <header class="w3-container w3-blue"><?= header_mio() ?></header>
        <main>
            <section class="w3-container">
                <!-- EJERCICIO 1 -->
                <article class="w3-panel w3-border w3-border-blue">
                    <h1 class="w3-container w3-blue">Ejercicio 1: Semáforo</h1>
                    <div class="w3-section">
                        <form method="POST" action="./ejercicios-progra-web-2/ejercicio-1/resolucion-ej1.php" id="ejercicio1">
                            <input class="w3-input w3-border w3-section w3-block" type="text" name="color" placeholder="Ingrese color del semáforo">
                            <button class="w3-button w3-blue w3-block" type="submit" form="ejercicio1">Enviar</button>
                        </form>
                    </div>
                </article>
                <!-- EJERCICIO 2 -->
                <article class="w3-panel w3-border w3-border-blue">
                    <h1 class="w3-container w3-blue">Ejercicio 2: Binomio cuadrado perfecto</h1>
                    <p>
                        <form method="POST" action="./ejercicios-progra-web-2/ejercicio-2/resolucion-ej2.php" id="ejercicio2">
                            <input class="w3-input w3-border w3-section w3-block" type="number" placeholder="Ingrese primer termino del binomio" name="a" step="any">
                            <input class="w3-input w3-border w3-section w3-block" type="number" placeholder="Ingrese segundo termino del binomio" name="b" step="any">
                            <button class="w3-button w3-blue w3-block" type="submit" form="ejercicio2">Enviar</button>
                        </form>
                    </p>
                </article>
                <!-- EJERCICIO 3 -->
                <article class="w3-panel w3-border w3-border-blue">
                    <h1 class="w3-container w3-blue">Ejercicio 3: Concatenación de strings</h1>
                    <p>
                        <form method="POST" action="./ejercicios-progra-web-2/ejercicio-3/resolucion-ej3.php" id="ejercicio3">
                            <input class="w3-input w3-border w3-section w3-block" type="text" placeholder="Ingrese primer string" name="texto1">
                            <input class="w3-input w3-border w3-section w3-block" type="text" placeholder="Ingrese segundo string" name="texto2">
                            <button class="w3-button w3-blue w3-block" type="submit" form="ejercicio3">Concatenar</button>
                        </form>
                    </p>
                </article>
                <!-- EJERCICIO 4 -->
                <article class="w3-panel w3-border w3-border-blue">
                    <h1 class="w3-container w3-blue">Ejercicio 4: Incrementar</h1>
                    <p>
                        <form method="POST" action="./ejercicios-progra-web-2/ejercicio-4/resolucion-ej4.php" id="ejercicio4">
                            <input class="w3-input w3-border w3-section w3-block" type="number" placeholder="Ingrese num" name="num" step="any">
                            <button class="w3-button w3-blue w3-block" type="submit" form="ejercicio4">Incrementar</button>
                        </form>
                    </p>
                </article>
                <!-- EJERCICIO 5 -->
                <article class="w3-panel w3-border w3-border-blue">
                    <h1 class="w3-container w3-blue">Ejercicio 5: Sumatoria</h1>
                    <p>
                        <form method="POST" action="./ejercicios-progra-web-2/ejercicio-5/resolucion-ej5.php" id="ejercicio5">
                            <input class="w3-input w3-border w3-section w3-block" type="text" placeholder="Ingrese numeros" name="nums">
                            <button class="w3-button w3-blue w3-block" type="submit" form="ejercicio5">Sumar</button>
                        </form>
                    </p>
                </article>
            </section>
        </main>
        <footer class="w3-container w3-blue"><?= footer_mio() ?></footer>
    </body>
</html>