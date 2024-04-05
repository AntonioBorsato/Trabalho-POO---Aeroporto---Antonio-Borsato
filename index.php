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
//TESTE DA BAGAGEM COM MAIS DE 15 KG $bagagem2 = new Bagagem(20, 2, $usuario2);
$bagagem3 = new Bagagem(14, 3, $usuario3);

//Aeronave
$aeronave = new Aeronave("Scaled Composites Stratolaunch", "853", Status:: EMUSO, "01");
$aeronave2 = new Aeronave("Boeing 747", "660", Status:: DISPONIVEL, "02");
$aeronave3 = new Aeronave("Air France 247", "500", Status:: MANUTENCAO, "03");

//Voo
$horarioSaidaVoo = new DateTime("2024-03-27 12:00:00");
$horarioChegadaVoo = new DateTime("2024-03-27 14:00:00");
$horarioSaidaVoo2 = new DateTime("2024-06-15 08:00:00");
$horarioChegadaVoo2 = new DateTime("2024-06-15 19:00:00");
$horarioSaidaVoo3 = new DateTime("2024-09-02 23:00:00");
$horarioChegadaVoo3 = new DateTime("2024-09-03 04:00:00");
$horarioSaidaVooString = $horarioSaidaVoo->format('Y-m-d H:i:s');
$voo = new voo("01","Campo Mourão", "São Paulo", $horarioSaidaVoo, $horarioChegadaVoo , $aeronave2, $usuario);
$voo2 = new voo("02","Campo Mourão", "São Paulo", $horarioSaidaVoo2, $horarioChegadaVoo2, $aeronave, $usuario);
$voo3 = new voo("03","Campo Mourão", "São Paulo", $horarioSaidaVoo3, $horarioChegadaVoo3, $aeronave, $usuario);
$voo->addTripulação($tripulante);
$voo->addTripulação($tripulante2);
$voo->addTripulação($tripulante3);
$voo->addPassageiros($usuario);
$voo->addPassageiros($usuario2);
$voo->addPassageiros($usuario3);

//Passagem
$passagem = new Passagem("01", 1200, $voo, $usuario);
$passagem2 = new Passagem("02", 600, $voo2, $usuario2);
$passagem3 = new Passagem("03", 10000, $voo3, $usuario3);

//Aeroporto
$aeroporto = new Aeroporto("Aeroclube de Campo Mourão", "87302-970", "Aeroporto Coronel Geraldo Guia Aquino S/N, Campo Mourão, PR", 4);
$aeroporto->adicionarVoo($voo);

$aeroporto2 = new Aeroporto("Aeroporto de Congonhas", "24547-751", "São Paulo", 9);
$aeroporto2->adicionarVoo($voo);

//Checkin
$Checkin = new Checkin($usuario, $passagem, $bagagem);
$Checkin2 = new Checkin($usuario2, $passagem2, $bagagem2);
$Checkin3 = new Checkin($usuario3, $passagem3, $bagagem3);

$lat1 = -24.046; 
$lon1 = -52.3838; 
$lat2 = -23.5489; 
$lon2 = -46.6388;

$distancia = $voo->calcularDistancia($lat1, $lon1, $lat2, $lon2);

?>

<html>
    <head>
        <title>Aeroporto</title>
    </head>
    <body>
        <h2>Aeroporto 1</h2>
        <strong>Nome: </strong> <?= $aeroporto->getNomeAeroporto() ?> <br /> 
        <strong>Cep: </strong> <?= $aeroporto->getCepAeroporto() ?> <br /> 
        <strong>Endereço: </strong> <?= $aeroporto->getEnderecoAeroporto() ?> <br /> 
        <strong>Numero de Pistas: </strong> <?= $aeroporto->getNumPistasAeroporto() ?> <br /> 
        <strong>Numero de Pistas Disponiveis: </strong> <?= $aeroporto->getNumPistasDisponiveisAeroporto() ?> <br /> 
        <h2>Aeroporto 2</h2>
        <strong>Nome: </strong> <?= $aeroporto2->getNomeAeroporto() ?> <br /> 
        <strong>Cep: </strong> <?= $aeroporto2->getCepAeroporto() ?> <br /> 
        <strong>Endereço: </strong> <?= $aeroporto2->getEnderecoAeroporto() ?> <br /> 
        <strong>Numero de Pistas: </strong> <?= $aeroporto2->getNumPistasAeroporto() ?> <br /> 
        <strong>Numero de Pistas Disponiveis: </strong> <?= $aeroporto2->getNumPistasDisponiveisAeroporto() ?> <br /> 
        <br /> 
        <h2>Aeronaves</h2>
        <strong>Modelo: </strong> <?= $aeronave->getModelo() ?> <br /> 
        <strong>Capacidade: </strong> <?= $aeronave->getCapacidade() ?> <br /> 
        <strong>Status: </strong> <?= $aeronave->printaAeronaveDisponivel($aeronave) ?> <br /> 
        <strong>Codigo Aeronave: </strong> <?= $aeronave->getCodigoAeronave() ?> <br /> 
        <br /> 
        <strong>Modelo: </strong> <?= $aeronave2->getModelo() ?> <br /> 
        <strong>Capacidade: </strong> <?= $aeronave2->getCapacidade() ?> <br /> 
        <strong>Status: </strong> <?= $aeronave2->printaAeronaveDisponivel($aeronave2) ?> <br /> 
        <strong>Codigo Aeronave: </strong> <?= $aeronave2->getCodigoAeronave() ?> <br /> 
        <br />
        <strong>Modelo: </strong> <?= $aeronave3->getModelo() ?> <br /> 
        <strong>Capacidade: </strong> <?= $aeronave3->getCapacidade() ?> <br /> 
        <strong>Status: </strong> <?= $aeronave3->printaAeronaveDisponivel($aeronave3) ?> <br /> 
        <strong>Codigo Aeronave: </strong> <?= $aeronave3->getCodigoAeronave() ?> <br /> 
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
        <strong>Peso da Bagagem (Kilos): </strong> <?= $bagagem3->getPeso() ?> <strong>Kg</strong> <br />
        <strong>Numero de Identificação: </strong> <?= $bagagem->getNumBagagem() ?> <br />
        <strong>Validar Checkin: </strong> <?= $Checkin->printaCheckin($bagagem->getUsuario()->getNome() ,$usuario->getNome(), $bagagem->getPeso())  ?> <br />
        <strong>Preço da Passagem (Reais): </strong> <?= $passagem->getValor() ?> <strong>R$</strong> <br />
        <strong>Codigo da Passagem: </strong> <?= $passagem->getBilhete() ?> <br />
        <br />
        <h2>Passageiro 2</h2>
        <strong>Nome: </strong> <?= $usuario2->getNome() ?> <br /> 
        <strong>Email: </strong> <?= $usuario2->getEmail() ?> <br />
        <strong>Cpf: </strong> <?= $usuario2->getCpf() ?> <br />
        <strong>Cidade: </strong> <?= $usuario2->getCidade() ?> <br />
        <strong>Endereço: </strong> <?= $usuario2->getEndereco() ?> <br />
        <strong>Peso da Bagagem (Kilos): </strong> <?= $bagagem2->getPeso() ?> <strong>Kg</strong> <br />
        <strong>Numero de Identificação: </strong> <?= $bagagem2->getNumBagagem() ?> <br />
        <strong>Validar Checkin: </strong> <?= $Checkin->printaCheckin($bagagem2->getUsuario()->getNome() ,$usuario2->getNome(), $bagagem2->getPeso())  ?> <br />
        <strong>Preço da Passagem (Reais): </strong> <?= $passagem2->getValor() ?>  <br />
        <strong>Codigo da Passagem: </strong> <?= $passagem2->getBilhete() ?> <br />
        <br />
        <h2>Passageiro 3</h2>
        <strong>Nome: </strong> <?= $usuario3->getNome() ?> <br /> 
        <strong>Email: </strong> <?= $usuario3->getEmail() ?> <br />
        <strong>Cpf: </strong> <?= $usuario3->getCpf() ?> <br />
        <strong>Cidade: </strong> <?= $usuario3->getCidade() ?> <br />
        <strong>Endereço: </strong> <?= $usuario3->getEndereco() ?> <br />
        <strong>Peso da Bagagem (Kilos): </strong> <?= $bagagem3->getPeso() ?> <strong>Kg</strong> <br />
        <strong>Numero de Identificação: </strong> <?= $bagagem3->getNumBagagem() ?> <br />
        <strong>Validar Checkin: </strong> <?= $Checkin3->printaCheckin($bagagem3->getUsuario()->getNome() ,$usuario3->getNome(), $bagagem3->getPeso()) ?> <br />
        <strong>Preço da Passagem (Reais): </strong> <?= $passagem3->getValor() ?> <strong>R$</strong> <br />
        <strong>Codigo da Passagem: </strong> <?= $passagem3->getBilhete() ?> <br />
        <h2>Voo</h2>
        <strong>Aeroporto: </strong> <?= $aeroporto->getNomeAeroporto() ?> <br /> 
        <strong>Codigo Voo: </strong> <?= $voo->getCodigoVoo() ?> <br /> 
        <strong>Origem: </strong> <?= $voo->getOrigem() ?> <br /> 
        <strong>Destino: </strong> <?= $voo->getDestino() ?> <br />
        <strong>Horario de Saida: </strong> <?= $voo->getHorarioSaida()->format('Y-m-d H:i:s') ?> <br />
        <strong>Horario de Chegada: </strong> <?= $voo->getHorarioChegada()->format('Y-m-d H:i:s') ?> <br />
        <strong>Duração do Voo: </strong> <?= $voo->CalculaTempoVoo() ?> <br />
        <strong>Cod Aeronave do Voo: </strong> <?= $voo->getAeronave()->getCodigoAeronave() ?> <br />
        <strong>Tripulação: </strong>
            <?php foreach ($voo->getTripulacao() as $value): ?>
            <li><?=$value->getNome()?></li> 
            <?php endforeach ?>
            <br />
        <strong>Passageiros: </strong> 
            <?php foreach ($voo->getPassageiros() as $value): ?>
            <li><?=$value->getNome()?></li> 
            <?php endforeach ?>
        <br />
        <strong>Distancia da viagem: </strong> <?= round($distancia, 2) ?> <strong> Km </strong> <br />
    </body>
</html>