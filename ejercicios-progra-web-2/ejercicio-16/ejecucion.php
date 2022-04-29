<?php

include_once "./clases/Papel.php";
include_once "./clases/Piedra.php";
include_once "./clases/Tijera.php";

$jugador1 = new Papel("Lucas");
$jugador2 = new Tijera("Agustina");

$resultado = $jugador1->competirContra($jugador2);

echo $resultado->ganador();