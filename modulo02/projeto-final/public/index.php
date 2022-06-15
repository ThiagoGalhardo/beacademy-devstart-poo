<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;


$c= new IndexController();
$c->indexAction();

$c->loginAction();

$product = new ProductController();
$product->listAction();
$product->addAction();
$product->editAction();