<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 1500;
$orcamento->quantidadeItens = 5;

echo "Valor do Desconto: {$calculadora->calculaDescontos($orcamento)}";