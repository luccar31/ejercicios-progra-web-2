<?php

function sumatoria_a ($array) {
    $sum = 0;

    for ($i = 0; $i < sizeof($array) ; $i++){
        $sum += $array[$i];
    }

    return $sum;
}

function sumatoria_b ($array) {
    $sum = 0;

    foreach ($array as $elem) {
        $sum += $elem;
    }

    return $sum;
}

function sumatoria_c ($array) {
    $sum = 0;
    $i = 0;

    while ($i < sizeof($array)) {
        $sum += $array[$i];
        $i++;
    }

    return $sum;
}