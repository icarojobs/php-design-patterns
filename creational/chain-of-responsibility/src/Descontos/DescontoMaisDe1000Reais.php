<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class DescontoMaisDe1000Reais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor >= 1000) {
            return $orcamento->valor * 0.6;
        }

        return $this->defaultValue();
    }
}
