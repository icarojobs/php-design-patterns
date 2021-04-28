<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\CondicoesDeDesconto;
use Alura\DesignPattern\Descontos\DescontoMaisDe1000Reais;
use Alura\DesignPattern\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPattern\Descontos\DescontoMaisDe5Itens;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        return CondicoesDeDesconto::from($orcamento)->calcularCondicao([
            new DescontoMaisDe5Itens(),
            new DescontoMaisDe500Reais(),
            new DescontoMaisDe1000Reais(),
        ]);
    }
}
