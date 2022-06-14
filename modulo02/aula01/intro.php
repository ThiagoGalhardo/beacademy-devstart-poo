<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';


$a1 = new Aluno(); 
$a1-> nome = 'Thiago'; 
$a1-> cpf = '123.456.789-10';

echo "Nome: {$a1->nome}" .PHP_EOL ;
echo "CPF: {$a1->cpf}" .PHP_EOL;

$cursoPHP = new Curso();
$cursoPHP->nome = "Introdução ao PHP";
$cursoPHP->descricao = "Aprender o básico e intermediário do PHP";
$cursoPHP->cargaHoraria = 90;

echo "Nome: {$cursoPHP->nome}" .PHP_EOL;
echo "Descrição: {$cursoPHP->descricao}" .PHP_EOL;
echo "Carga horária: {$cursoPHP->cargaHoraria}";