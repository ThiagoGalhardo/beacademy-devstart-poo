<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';
include 'ClienteVip.php';

include 'Validar.php';

$c1 = new Cliente('calosm@gmail.com', '123456');
$c1->setNome('Carlos');
$c1->setDataCadastro('01/01/2022');

$cpf = "12345678911";

// $validador = new Validar();
// $validador->validarCpf($cpf);

// quando o método é estático, é assim que é chamado
// não é instanciado
Validar::validarCpf($cpf);


$c1->setCpf($cpf);


$g1 =  new Gestor('jose_silva@gmail.com', '123456', 4000);
$g1->setNome('José');

$gg1 = new GestorGeral('bruna@gmail.com', 'bru123', 7000);


var_dump($c1);
var_dump($g1);
var_dump($gg1);
var_dump($usu);