<?php

namespace Alura\DesignPattern;

class Orcamento
{
    public int $quantidadeItens;
    public float $valor;
    public string $estadoAtual;

    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->calculoDescontoExtra();
    }

    public function calculoDescontoExtra(): float
    {
        if($this->estadoAtual == 'EM_APROVACAO'){
            return $this->valor * 0.05;
        }
    }    
}
