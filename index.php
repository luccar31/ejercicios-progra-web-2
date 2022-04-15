<html>

<body onload="document.getElementById('fechahora').value=Date.now()">

<h1>Equipo de deporte favorito</h1>

<form action="./procesar_formulario.php" method="get">

    <input type="text"
           id="nombre"
           name="nombre"
           placeholder="ingrese su nombre"> <br>

    <br>
    <br>

    <input type="radio" name="equipo" value="River">River <br>
    <input type="radio" name="equipo" value="Boca">Boca <br>
    <input type="radio" name="equipo" value="Racing">Racing <br>
    <input type="radio" name="equipo" value="Otro">Otro <br>

    <br>
    <br>

    <input type="checkbox" name="deporte[]" value="Futbol">Futbol <br>
    <input type="checkbox" name="deporte[]" value="Judo">Judo <br>
    <input type="checkbox" name="deporte[]" value="Rugby">Rugby <br>
    <input type="checkbox" name="deporte[]" value="Patin">Patin <br>
    <input type="checkbox" name="deporte[]" value="Tenis">Tenis <br>
    <input type="checkbox" name="deporte[]" value="Esgrima">Esgrima <br>

    <br>
    <br>

    <input type="password" name="password" placeholder="ingrese su password..."> <br>

    <br>
    <input type="hidden" name="fechahora" id="fechahora" > <br>

    <button type="submit" name="enviar">Enviar</button>
</form>

</body>
</html>