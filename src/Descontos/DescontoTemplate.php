<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

abstract class DescontoTemplate extends Desconto{
    public function calculaDesconto(Orcamento $orcamento): float 
    {
        if($this->deveAplicarDesconto($orcamento)){
            return $this->calculaDescontos($orcamento);
        }

        return $this->proximoDesconto($orcamento);
    }

    abstract protected function deveAplicarDesconto(Orcamento $orcamento);
    abstract protected function calculaDescontos(Orcamento $orcamento);
    abstract protected function proximoDesconto(Orcamento $orcamento);
}