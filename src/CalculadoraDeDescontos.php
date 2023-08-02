<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\Desconto;
use Alura\DesignPattern\Descontos\SemDesconto;
use Alura\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\Descontos\DescontoMaisDe500Reais;


class CalculadoraDeDescontos {
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(new DescontoMaisDe500Reais(new SemDesconto()));
      
        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}