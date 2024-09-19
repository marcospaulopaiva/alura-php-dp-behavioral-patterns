<?php

namespace Alura\DesignPattern;

class CalculadoraDeDescontos
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if($orcamento->quantidadeItens > 5)
        {
            return $orcamento->valor * 0.1;
        }

        return 0;
    }
}