<?php

class Tijera{
    private $nombreJugador;

    public function __construct($nombreJugador){
        $this->nombreJugador = $nombreJugador;
    }

    public function competirContra($otroJugador){
        return $otroJugador->teCompiteTijera($this);
    }

    public function teCompiteTijera($otroJugador){
        return new Empate();
    }

    public function teCompitePiedra($otroJugador){
        return $otroJugador;
    }

    public function teCompitePapel($otroJugador){
        return $this;
    }

    public function ganador(){
        return $this->nombreJugador;
    }
}