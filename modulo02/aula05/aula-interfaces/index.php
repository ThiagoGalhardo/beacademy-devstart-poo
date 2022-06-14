<?php

ini_set('display_errors', 1);


include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';


$cpf = '12345678901';
$docx = '12345678912345';


$br = new ValidarBR();
$br->validarDocumento($cpf);


$us = new ValidarUS();
$us->validarDocumento($docx);

echo 'Funcionou';