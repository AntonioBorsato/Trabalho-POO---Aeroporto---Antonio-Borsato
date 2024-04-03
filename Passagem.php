<?php

require_once 'Voo.php';
require_once 'Usuario.php';

class Passagem {

    private string $bilhete;
    private float $valor;
    private Voo $voo;
    private Usuario $usuario;

    public function __construct(string $bilhete, float $valor, Voo $voo, Usuario $usuario) {

        $this->bilhete = $bilhete;
        $this->valor = $valor;
        $this->voo = $voo;
        $this->usuario = $usuario;
        
    }

    public function getBilhete(): string {

        return $this->bilhete;

    }

    public function setCodBilhete(string $bilhete): void {

        $this->bilhete = $bilhete;

    }

    public function getValor(): float
    {

        return $this->valor;

    }

    public function setValor(float $valor): void {

        $this->valor = $valor;

    }

    public function getVoo(): Voo {

        return $this->voo;

    }

    public function setVoo(Voo $voo): void {

        $this->voo = $voo;

    }

    public function getUsuario(): Usuario {

        return $this->usuario;

    }


}