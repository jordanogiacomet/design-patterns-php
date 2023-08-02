<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class DescontoMaisDe500Reais extends DescontoTemplate{

    protected function deveAplicarDesconto(Orcamento $orcamento){
        return $orcamento->valor > 500;
    }

    protected function calculaDescontos(Orcamento $orcamento){
        return $orcamento->valor * 0.05;
    }

    protected function proximoDesconto(Orcamento $orcamento){
        return $this->proximoDesconto->calculaDesconto($orcamento);
    }

}