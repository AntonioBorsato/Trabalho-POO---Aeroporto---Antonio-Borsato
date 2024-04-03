<?php

require_once "enums/Cargo.php";
require_once "enums/Status.php";
require_once "Tripulante.php";
require_once "Aeronave.php";
require_once "Usuario.php";
require_once "Voo.php";
require_once "Passagem.php";
require_once "Aeroporto.php";
require_once "Bagagem.php";
require_once "Checkin.php";

//Voo
$voo = new voo();
$voo2 = new voo();
$voo3 = new voo();

//Aeroporto
$aeroporto = new Aeroporto("Aeroclube de Campo Mourão", "87302-970", "Aeroporto Coronel Geraldo Guia Aquino S/N, Campo Mourão, PR", 4);
$aeroporto->adicionarVoo($voo);
$aeroporto->adicionarVoo($voo2);
$aeroporto->adicionarVoo($voo3);

//Aeronave
$aeronave = new Aeronave("Scaled Composites Stratolaunch", "853", Status:: EMUSO);
$aeronave2 = new Aeronave("Boeing 747", "660", Status:: DISPONIVEL);
$aeronave3 = new Aeronave("Air France 247", "500", Status:: MANUTENCAO);

//Tripulantes
$tripulante = new Tripulante("Antonio Borsato", "antonioborsatinho123@gmail.com", "159.255.978-84", "Licença de Voo", Cargo:: PILOTO);
$tripulante2 = new Tripulante("Pedro Conrado", "pedroconradinho123@gmail.com", "005.389.678-08", "Licença de Voo", Cargo:: COPILOTO);
$tripulante3 = new Tripulante("Juscelino", "juscelininho123@gmail.com", "356.789.256-87", "Licença de Voo", Cargo:: AEROMOCA);

//Usuario
$usuario = new Usuario("Antonio Borsato Impostor", "antonioborsatinho123@gmail.com", "198.789.356-67", "Campo Mourão", "Candido Holtz Vieira Num. 90");
$usuario2 = new Usuario("Pedro Conrado Impostor", "pedroconradinho123@gmail.com", "128.459.786-89", "Campo Mourão", "Manuel Mendes de Camargo Num. 128");
$usuario3 = new Usuario("Juscelino Impostor", "juscelininho123@gmail.com", "238.679.634-08", "Campo Mourão", "Rua Belém Num. 60");

//Bagagem
$bagagem = new Bagagem(10, 1, $usuario);
$bagagem2 = new Bagagem(20, 2, $usuario2);
$bagagem3 = new Bagagem(14, 3, $usuario3);

//Passagem
$passagem = new Passagem("01", 800, $voo, $usuario);
$passagem2 = new Passagem("02", 800, $voo2, $usuario2);
$passagem3 = new Passagem("03", 800, $voo3, $usuario3);

?>

<html>
    <head>
        <title>Aeroporto</title>
    </head>
    <body>
        <h2>Aeroporto</h2>
        <strong>Nome: </strong> <?= $aeroporto->getNomeAeroporto() ?> <br /> 
        <strong>Cep: </strong> <?= $aeroporto->getCepAeroporto() ?> <br /> 
        <strong>Endereço: </strong> <?= $aeroporto->getEnderecoAeroporto() ?> <br /> 
        <strong>Numero de Pistas: </strong> <?= $aeroporto->getNumPistasAeroporto() ?> <br /> 
        <strong>Numero de Pistas Disponiveis: </strong> <?= $aeroporto->getNumPistasDisponiveisAeroporto() ?> <br /> 
        <h2>Aeronaves</h2>
        <strong>Modelo: </strong> <?= $aeronave->getModelo() ?> <br /> 
        <strong>Capacidade: </strong> <?= $aeronave->getCapacidade() ?> <br /> 
        <strong>Status: </strong> <?= $aeronave->getStatus()->value ?> <br /> 
        <br /> 
        <strong>Modelo: </strong> <?= $aeronave2->getModelo() ?> <br /> 
        <strong>Capacidade: </strong> <?= $aeronave2->getCapacidade() ?> <br /> 
        <strong>Status: </strong> <?= $aeronave2->getStatus()->value ?> <br /> 
        <br />
        <strong>Modelo: </strong> <?= $aeronave3->getModelo() ?> <br /> 
        <strong>Capacidade: </strong> <?= $aeronave3->getCapacidade() ?> <br /> 
        <strong>Status: </strong> <?= $aeronave3->getStatus()->value ?> <br /> 
        <h2>Tripulação</h2>
        <strong>Nome: </strong> <?= $tripulante->getNome() ?> <br /> 
        <strong>Email: </strong> <?= $tripulante->getEmail() ?> <br />
        <strong>Cpf: </strong> <?= $tripulante->getCpf() ?> <br />
        <strong>Licença: </strong> <?= $tripulante->getLicenca() ?> <br />
        <strong>Cargo: </strong> <?= $tripulante->getCargo()->value ?> <br />
        <br />
        <strong>Nome: </strong> <?= $tripulante2->getNome() ?> <br /> 
        <strong>Email: </strong> <?= $tripulante2->getEmail() ?> <br />
        <strong>Cpf: </strong> <?= $tripulante2->getCpf() ?> <br />
        <strong>Licença: </strong> <?= $tripulante2->getLicenca() ?> <br />
        <strong>Cargo: </strong> <?= $tripulante2->getCargo()->value ?> <br />
        <br />
        <strong>Nome: </strong> <?= $tripulante3->getNome() ?> <br /> 
        <strong>Email: </strong> <?= $tripulante3->getEmail() ?> <br />
        <strong>Cpf: </strong> <?= $tripulante3->getCpf() ?> <br />
        <strong>Licença: </strong> <?= $tripulante3->getLicenca() ?> <br />
        <strong>Cargo: </strong> <?= $tripulante3->getCargo()->value ?> <br />
        <h2>Passageiro 1</h2>
        <strong>Nome: </strong> <?= $usuario->getNome() ?> <br /> 
        <strong>Email: </strong> <?= $usuario->getEmail() ?> <br />
        <strong>Cpf: </strong> <?= $usuario->getCpf() ?> <br />
        <strong>Cidade: </strong> <?= $usuario->getCidade() ?> <br />
        <strong>Endereço: </strong> <?= $usuario->getEndereco() ?> <br />
        <strong>Peso da Bagagem (Kilos): </strong> <?= $bagagem->validarBagagem($bagagem->getPeso()) ?> <br />
        <strong>Numero de Identificação: </strong> <?= $bagagem->getNumBagagem() ?> <br />
        <strong>Preço da Passagem (Reais): </strong> <?= $passagem->getValor() ?> <br />
        <strong>Codigo da Passagem: </strong> <?= $passagem->getBilhete() ?> <br />
        <br />
        <h2>Passageiro 2</h2>
        <strong>Nome: </strong> <?= $usuario2->getNome() ?> <br /> 
        <strong>Email: </strong> <?= $usuario2->getEmail() ?> <br />
        <strong>Cpf: </strong> <?= $usuario2->getCpf() ?> <br />
        <strong>Cidade: </strong> <?= $usuario2->getCidade() ?> <br />
        <strong>Endereço: </strong> <?= $usuario2->getEndereco() ?> <br />
        <strong>Peso da Bagagem (Kilos): </strong> <?= $bagagem2->validarBagagem($bagagem2->getPeso()) ?> <br />
        <strong>Numero de Identificação: </strong> <?= $bagagem2->getNumBagagem() ?> <br />
        <strong>Preço da Passagem (Reais): </strong> <?= $passagem2->getValor() ?> <br />
        <strong>Codigo da Passagem: </strong> <?= $passagem2->getBilhete() ?> <br />
        <br />
        <h2>Passageiro 3</h2>
        <strong>Nome: </strong> <?= $usuario3->getNome() ?> <br /> 
        <strong>Email: </strong> <?= $usuario3->getEmail() ?> <br />
        <strong>Cpf: </strong> <?= $usuario3->getCpf() ?> <br />
        <strong>Cidade: </strong> <?= $usuario3->getCidade() ?> <br />
        <strong>Endereço: </strong> <?= $usuario3->getEndereco() ?> <br />
        <strong>Peso da Bagagem (Kilos): </strong> <?= $bagagem3->validarBagagem($bagagem3->getPeso()) ?> <br />
        <strong>Numero de Identificação: </strong> <?= $bagagem3->getNumBagagem() ?> <br />
        <strong>Preço da Passagem (Reais): </strong> <?= $passagem3->getValor() ?> <br />
        <strong>Codigo da Passagem: </strong> <?= $passagem3->getBilhete() ?> <br />
    </body>
</html>