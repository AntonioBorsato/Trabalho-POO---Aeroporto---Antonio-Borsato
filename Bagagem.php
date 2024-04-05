<?php

require_once 'Usuario.php';

const LIMITE_PESO = 15;

class Bagagem {

    private float $peso;
    private int $numBagagem;
    private Usuario $usuario;


    public function __construct(float $peso, int $numBagagem, Usuario $usuario) {

        $this->peso = $peso;
        $this->numBagagem = $numBagagem;
        $this->usuario = $usuario;

    }

    public function getPeso(): float {

        return $this->peso;

    }

    /*public function validarBagagem(float $peso): string {

        if ($peso > LIMITE_PESO) {
            
            return "A bagagem excede o limite de peso permitido de 15 Kg. Sua bagagem tem: " . $peso . " Kg";
            
        } else {
            
            return "A bagagem está dentro do limite de peso permitido de 15 Kg. Sua bagagem tem: " . $peso . " Kg";

        }
        
    }*/
    

    public function setPeso(float $peso): void {

        $this->peso = $peso;

    }
    
    public function getNumBagagem(): int {

        return $this->numBagagem;

    }

    public function setNumBagagem(int $numBagagem): void {

        $this->numBagagem = $numBagagem;

    }

    public function getUsuario(): Usuario
    {
        return $this->usuario;
    }

}
