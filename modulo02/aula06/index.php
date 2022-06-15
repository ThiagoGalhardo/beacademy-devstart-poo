<?php

ini_set('display_errors', 1);

// include 'classes/Usuario.php';
// include 'classes/Cliente.php';
// include 'classes/Gestor.php';
// include 'classes/Categoria.php';
// include 'classes/Produto.php';
// include 'classes/Config/Usuario.php';

include 'vendor/autoload.php';

use Classes\Config\Usuario;

// $us1 = new Classes\Usuario();
$us2 = new Usuario();

// var_dump($us1);
var_dump($us2);