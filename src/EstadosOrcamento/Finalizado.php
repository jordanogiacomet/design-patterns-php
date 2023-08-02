<?php

namespace Alura\DesignPattern\EstadosOrcamento;
use Alura\DesignPattern\Orcamento;

class Finalizado extends EstadoOrcamento{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException("Não é possivel aplicar desconto a um orçamento finalizado!");
    }
}