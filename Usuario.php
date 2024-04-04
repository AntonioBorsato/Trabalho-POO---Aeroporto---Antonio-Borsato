<?php

require_once "Voo.php";
require_once "Pessoa.php";

class Usuario extends Pessoa {

    private string $cidade;
    private string $endereco;

    public function __construct(string $nome, string $email, string $cpf, string $cidade, string $endereco) {

        $this->cidade = $cidade;
        $this->endereco = $endereco;
        parent::__construct($nome, $email, $cpf);

    }

    public function setCidade(string $cidade): void {

        $this->cidade = $cidade;

    }

    public function setEndereco(string $endereco): void {

        $this->endereco = $endereco;

    }

    public function getCidade(): string {

        return $this->cidade;

    }

    public function getEndereco(): string {

        return $this->endereco;

    }

}