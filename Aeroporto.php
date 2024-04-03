<?php

require_once 'Voo.php';

class Aeroporto {
    
    private string $nome;
    private string $cep;
    private string $endereco;
    private int $numPistas;
    private int $numPistasDisponiveis;
    private array $voo;

    public function __construct(string $nome, string $cep, string $endereco, int $numPistas) {

        $this->nome = $nome;
        $this->cep = $cep;
        $this->endereco = $endereco;
        $this->numPistas = $numPistas;
        $this->numPistasDisponiveis = $numPistas;
        $this->voo = [];

    }

    public function setNomeAeroporto(string $nome): void {

        $this->nome = $nome;

    }

    public function getNomeAeroporto() : string {

        return $this->nome;

    }

    public function setCepAeroporto(string $cep): void {

        $this->cep = $cep;

    }

    public function getCepAeroporto() : string {

        return $this->cep;

    }

    public function setEnderecoAeroporto(string $endereco): void {

        $this->endereco = $endereco;

    }

    public function getEnderecoAeroporto() : string {

        return $this->endereco;

    }

    public function setNumPistasAeroporto(int $numPistas): void {

        if($numPistas > $this->numPistas - $this->numPistasDisponiveis) {

            $this->numPistasDisponiveis = $numPistas - ($this->numPistas - $this->numPistasDisponiveis);
            $this->numPistas = $numPistas;

       }

    }

    public function getNumPistasAeroporto() : int {

        return $this->numPistas;

    }

    public function setNumPistasDisponiveisAeroporto(int $numPistasDisponiveis): void {

        $this->numPistasDisponiveis = $numPistasDisponiveis;

    }

    public function getNumPistasDisponiveisAeroporto() : int {

        return $this->numPistasDisponiveis;

    }

    public function adicionarVoo(Voo $voo):void {

        if($this->numPistasDisponiveis > 0) {

            array_push($this->voo, $voo);
            $this->numPistasDisponiveis--;

        }

    }

    public function removerVoo(Voo $voo):void {

        $index = array_search($voo, $this->voo, true);

        if ($index !== false) {

            unset($this->voo[$index]);
            $this->numPistasDisponiveis++;

        }

    }

    public function getVoos() {

        return $this->voo;

    }
}
