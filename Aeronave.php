<?php

require_once "Aeroporto.php";

class Aeronave  {

    private string $codigoAeronave;
    private string $modelo;
    private int $capacidade;
    private Status $status;

    public function __construct(string $modelo, int $capacidade, Status $status, string $codigoAeronave) {

        $this->modelo = $modelo;
        $this->capacidade = $capacidade;
        $this->status = $status;
        $this->codigoAeronave = $codigoAeronave;

    }

    public function getCodigoAeronave(): string{

        return $this->codigoAeronave;

    }

    public function setCodigoAeronave(string $codigoAeronave): void {

        $this->codigoAeronave = $codigoAeronave;

    }

    public function setModelo(string $modelo): void {

        $this->modelo = $modelo;

    }

    public function getModelo(): string {

        return $this->modelo;

    }

    public function setCapacidade(int $capacidade) : void {

        $this->capacidade = $capacidade;  

    }

    public function getCapacidade() : int {

        return $this->capacidade;  

    }

    public function getStatus() : Status {   

        return $this->status ?? 'Inválido'; 
          
    }
    
}