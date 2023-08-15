<?php

namespace Alura\DesignPattern\Impostos;
use Alura\DesignPattern\Orcamento;

abstract class ImpostoCom2Aliquotas extends Imposto{
    public function realizaCalculoEspecifico(Orcamento $orcamento){
        if($this->deveAplicarTaxaMaxima($orcamento)){
            return $this->calculaTaxaMaxima($orcamento);
        }

        return $this->calculaTaxaMinima($orcamento);
    }

    abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento);
    abstract protected function calculaTaxaMaxima(Orcamento $orcamento);
    abstract protected function calculaTaxaMinima(Orcamento $orcamento);

}