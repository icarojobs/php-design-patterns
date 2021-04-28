<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

abstract class Desconto
{
    const DEFAULT_VALUE = 0;

    abstract public function calculaDesconto(Orcamento $orcamento): int;

    public function defaultValue()
    {
        return self::DEFAULT_VALUE;
    }
}
