<?php

ini_set('display_errors', 1);

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';
include 'Disciplina.php';

$p1 = new Professor();
$p1-> nome = 'Alessandro';
$p1-> cpf = '987.654.321-00';
$p1-> salario = 2000;

var_dump($p1);