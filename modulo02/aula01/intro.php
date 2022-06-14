<?php

include 'Aluno.php';

$a1 = new Aluno(); 
$a1-> nome = 'Thiago'; 
$a1-> cpf = '123.456.789-10';

echo "Nome: {$a1->nome}" .PHP_EOL ;
echo "CPF: {$a1->cpf}";