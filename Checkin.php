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

    public function validarCheckin(string $donoBagagem, string $nomeUsuario, float $pesoBagagem): bool {

        if ($this->validarBagagem($pesoBagagem) === false) {

            return false; 
        }
    
        if ($donoBagagem === $nomeUsuario) {

            return true; 

        } else {

            return false; 

        }
    }

    public function validarBagagem(float $peso): bool {

        if ($peso > LIMITE_PESO) {

            echo "A bagagem excede o limite de peso permitido de 15 Kg. Sua bagagem tem: " . $peso . " Kg";

            return false; 

        } else {

            echo "A bagagem está dentro do limite de peso permitido de 15 Kg. Sua bagagem tem: " . $peso . " Kg";

            return true;
        }
    }

    public function printaCheckin (string $donoBagagem, string $usuario, float $pesoBagagem) {

        if ($this->validarCheckin($donoBagagem, $usuario, $pesoBagagem)) {
            
            echo " --- Passageiro autorizado para o voo.";

        } else {

            echo " --- Passageiro não autorizado para o voo.";
            
        }

    }

}
