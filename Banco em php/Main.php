<?php
//echo '123456789';

require __DIR__ .'/vendor/autoload.php';

use App\ContaBanco;
use App\Cliente;
use App\ContaBancoCp;
use App\ContaBancoCc;

// $Test = new Aula1\Test;
//$Test = new Apelido;
//$Test->imprimitest('funfa');

//criando cadastro cliente

$cliente = new Cliente;
$cliente->criacli ('diozan','diozan@gmail.com','rua das rosa');


//criando conta
$n1 = new ContaBanco;
$n1->ContaBancaria(45,85,98,'diozanconta');
$n1->mostraconta();


//empréstimo na conta corrente
$contacorrente = new ContaBancoCc;

$contacorrente->emprest(8);


//criando conta poupança
$contapoupa = new ContaBancoCp;

$contapoupa->poupar(950);
