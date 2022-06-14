<?php

ini_set('display_errors', 1);

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas Unissex');
$c2 = new Categoria('Roupas de Banho', 'Toalhas, toalhas para o rosto, etc');
$c3 = new Categoria('Calçados', 'Calçados em geral');

$p1 = new Produto('Tênis', 499, $c3); // forma de instanciar com construtor
$p1->setDescricao('Tênis para corrida profissional'); // descrição é opcional pois não está no construtor
// $p1-> setNome('Tênis para corrida');
// $p1-> setValor(499);

$p2 = new Produto('Calça Jeans', 149, $c1);
// $p2-> setNome('Saia Jeans');
// $p2-> setValor(149);

$p3 = new Produto('Toalha de banho', 49, $c2);
// $p3->setNome('Pijama');
// $p3->setValor(49);



 var_dump($p1);
 var_dump($p2);
 var_dump($p3);
 var_dump($c1);