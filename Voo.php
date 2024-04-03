<?php

require_once 'Aeroporto.php';
require_once 'Aeroporto.php';
require_once 'Tripulante.php';
require_once 'Passagem.php';

class Voo {

    private String $origem;
    private String $destino;
    private string $horarioSaida; 
    private string $horarioChegada;
    private Aeronave $aeronave;
    private $tripulacao = array();
    private $passageiros = array();


    public function __construct(String $origem, String $destino, string $horarioSaida, string $horarioChegada, Aeronave $aeronave) {
        
        $this->origem = $origem;
        $this->destino = $destino;
        $this->horarioSaida = $horarioSaida;
        $this->horarioChegada = $horarioChegada;
        $this->aeronave = $aeronave;
        $this->tripulacao = [];
        $this->passageiros = [];

    }

    /*public function calculaTempoDoVoo(): String {

        $diferenca = $this->horarioSaida->diff($this->horarioChegada);

        return ($diferenca->h * 60) + $diferenca->m . " minutos";

    }*/

    public function getOrigem(): string {
        
        return $this->origem;

    }

    public function setOrigem(string $origem): void{
        
        $this->origem = $origem;

    }

    public function getDestino(): string {

        return $this->destino;

    }

    public function setDestino(string $destino): void {

        $this->destino = $destino;

    }

    public function getHorarioSaida(): string {

        return $this->horarioSaida;

    }

    public function setHorarioSaida(string $horarioSaida): void {

        $this->horarioSaida = $horarioSaida;

    }

    public function getHorarioChegada(): string {

        return $this->horarioChegada;

    }

    public function setHorarioChegada(string $horarioChegada): void {
        
        $this->horarioChegada = $horarioChegada;
    
    }

    public function getAeronave(): Aeronave{

        return $this->aeronave;

    }

    public function setAeronave(Aeronave $aeronave): void {

        $this->aeronave = $aeronave;

    }

    public function getTripulacao(): array {

        return $this->tripulacao;

    }

    public function setTripulacao(array $tripulacao): void {

        $this->tripulacao = $tripulacao;

    }

    public function getPassageiros(): array {

        return $this->passageiros;

    }

    public function setPassageiros(array $passageiros): void {

        $this->passageiros = $passageiros;

    }



    
}