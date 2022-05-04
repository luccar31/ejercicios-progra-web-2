<?php

include_once "./clases/Papel.php";
include_once "./clases/Piedra.php";
include_once "./clases/Tijera.php";
include_once "./clases/Empate.php";

$jugador2 = new Papel("Lucas");
$jugador1 = new Piedra("Agustina");

$resultado = $jugador1->competirContra($jugador2);

echo $resultado->ganador();