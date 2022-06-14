<?php

ini_set('display_errors', 1);

include 'Produto.php';

$p2 = new Produto();

$p1 = new Produto();
$p1-> setNome('Tênis para corrida');
$p1-> setValor(499);

$p2 = new Produto();
$p2-> setNome('Calça Jeans');
$p2-> setValor(240);

 var_dump($p1);
 var_dump($p2);