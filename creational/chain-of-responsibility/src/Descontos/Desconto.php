<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

abstract class Desconto
{
    abstract public function calculaDesconto(Orcamento $orcamento): float;

    public function defaultValue()
    {
        return 0.0;
    }
}
