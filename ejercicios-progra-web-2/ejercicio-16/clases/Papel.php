<?php

class Papel
{
    private $nombreJugador;

    public function __construct($nombreJugador)
    {
        $this->nombreJugador = $nombreJugador;
    }

    public function competirContra($otroJugador)
    {
        return $otroJugador->teCompitePapel($this);
    }

    public function teCompiteTijera($otroJugador)
    {
        return $otroJugador;
    }

    public function teCompitePiedra($otroJugador)
    {
        return $this;
    }

    public function teCompitePapel($otroJugador)
    {
        return new Empate();
    }

    public function ganador(){
        return $this->nombreJugador;
    }
}