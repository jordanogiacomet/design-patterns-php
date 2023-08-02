<?php

namespace Alura\DesignPattern\Impostos;
use Alura\DesignPattern\Orcamento;

class Icc extends ImpostoCom2Aliquotas{
   
 
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento){
            return $orcamento->valor > 100 && $orcamento->numeroDeItens > 3;
    }
    
    protected function calculaTaxaMaxima(Orcamento $orcamento){
        return $orcamento->valor * 0.4;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento){
        return $orcamento->valor * 0.2;
    }


}