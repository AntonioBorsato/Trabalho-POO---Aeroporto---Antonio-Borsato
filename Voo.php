<?php

require_once 'Aeroporto.php';
require_once 'Aeroporto.php';
require_once 'Tripulante.php';
require_once 'Passagem.php';

class Voo {

    private Aeroporto $origem;
    private Aeroporto $destino;
    private DateTime $horarioSaida; 
    private DateTime $horarioChegada;
    private Aeronave $aeronave;
    private $tripulacao = array();
    private $passageiros = array();


    public function __construct() {
        
    }

    public function calculaTempoVoo ($horarioSaida, $horarioChegada) {

    }

    public function adicionarPassageiro (Passagem $passageiro) {

    }

    public function removerPassageiro (Passagem $passageiro) {
        
    }

}