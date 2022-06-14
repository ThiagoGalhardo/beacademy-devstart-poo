<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';
include 'ClienteVip.php';

$c1 = new Cliente('calosm@gmail.com', '123456');
$c1->setNome('Carlos');
$c1->setDataCadastro('01/01/2022');

$g1 =  new Gestor('jose_silva@gmail.com', '123456', 4000);
$g1->setNome('José');

$gg1 = new GestorGeral('bruna@gmail.com', 'bru123', 7000);

// $usu = new Usuario('hacker@mail.com', '111111');

$clienteVip = new ClienteVip('cvip@mail.com', '123456');

var_dump($c1);
var_dump($g1);
var_dump($gg1);
var_dump($usu);
var_dump($clienteVip);