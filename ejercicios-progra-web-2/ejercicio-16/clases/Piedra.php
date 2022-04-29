<?php

class Piedra{

    private $nombreJugador;

    public function __construct($nombreJugador){
        $this->nombreJugador = $nombreJugador;
    }

    public function competirContra($otroJugador){
        return $otroJugador->teCompitePiedra($this);
    }

    public function teCompiteTijera($otroJugador){
        return $otroJugador;
    }

    public function teCompitePiedra($otroJugador){
        return new Empate();
    }

    public function teCompitePapel($otroJugador){
        return $otroJugador;
    }

    public function ganador(){
        return $this->nombreJugador;
    }
}