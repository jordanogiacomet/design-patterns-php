<?php

namespace Alura\DesignPattern\EstadosOrcamento;
use Alura\DesignPattern\Orcamento;

class Reprovado extends EstadoOrcamento{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException("Não é possivel dar desconto a um orçamento reprovado!");
    }

    public function finaliza(Orcamento $orcamento){
        $orcamento->estado = new Finalizado();
    }
}