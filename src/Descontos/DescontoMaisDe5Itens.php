<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class DescontoMaisDe5Itens extends DescontoTemplate{
   
    protected function deveAplicarDesconto(Orcamento $orcamento){
        return $orcamento->numeroDeItens > 5;
    }

    protected function calculaDescontos(Orcamento $orcamento){
        return $orcamento->valor * 0.1;
    }

    protected function proximoDesconto(Orcamento $orcamento){
        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}