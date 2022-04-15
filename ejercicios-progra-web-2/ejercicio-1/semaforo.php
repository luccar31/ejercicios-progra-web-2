<?php

function semaforo_1($color) {
    $color = strtolower($color);

    if ($color == "rojo") {
        return "Frene";
    }
    else if ($color == "amarillo") {
        return "Precuación";
    }
    else if ($color == "verde") {
        return "Avance";
    }
    else {
        return "Estado desconocido";
    }
}

function semaforo_2($color){
    $color = strtolower($color);

    return $color == "rojo" ? "Frene" :
          ($color == "amarrillo" ? "Precaución" :
          ($color == "verde" ? "Avance" : "Estado desconocido"));
}

function semaforo_3($color){
    $color = strtolower($color);

    switch ($color) {
        case "rojo":
            return "Frene";
        case "amarillo":
            return "Precuación";
        case "verde":
            return "Avance";
        default:
            return "Estado desconocido";
    }
}