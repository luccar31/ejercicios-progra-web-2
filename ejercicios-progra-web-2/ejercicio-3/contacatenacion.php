<?php

function concatenar ($texto1, $texto2) {
    /*
     * La función concatenar no realiza conversiones de tipos, a diferencia
     * de la función de php utilizada para concatenar strings
     */
    if (!is_string($texto1) || !is_string($texto2)) return null;
    return $texto1 . $texto2;
}