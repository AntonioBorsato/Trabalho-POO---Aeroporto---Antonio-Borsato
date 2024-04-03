<?php

class Checkin {

    private Usuario $usuario;
    private Passagem $passagem;
    private Bagagem $bagagem;

    public function __construct (Usuario $usuario, Passagem $passagem, Bagagem $bagagem) {

        $this->usuario = $usuario;
        $this->passagem = $passagem;
        $this->bagagem = $bagagem;
        
    }

    public function getUsuario(): Usuario {

        return $this->usuario;

    }

    public function getPassagem(): Passagem {

        return $this->passagem;

    }

    public function getBagagem(): Bagagem {

        return $this->bagagem;

    }

    

}
