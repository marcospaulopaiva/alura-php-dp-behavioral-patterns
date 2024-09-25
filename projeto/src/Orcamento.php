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

        if($this->estadoAtual == 'APROVADO'){
            return $this->valor * 0.02;
        }

        throw new \DomainException('Orçamento reprovado e finalizados não podem receber desconto');
    }    
}
