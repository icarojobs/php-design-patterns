<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class CondicoesDeDesconto
{
    private static Orcamento $orcamento;

    public static function from(Orcamento $orcamento)
    {
        self::$orcamento = $orcamento;

        return new static();
    }

    public function calcularCondicao(array $descontos): float
    {
        foreach ($descontos as $desconto)
        {
            $value = $desconto->calculaDesconto(self::$orcamento);

            if($value !== $desconto->defaultValue()) {
                return $value;
            }
        }

        return 0.0;
    }
}