<?php

namespace Alura\DesignPattern\Impostos;
use Alura\DesignPattern\Orcamento;

abstract class Imposto {

    private ?Imposto $outroImposto;



    public function __construct(Imposto $outroImposto = null){
        $this->outroImposto = $outroImposto;
    }


    public abstract function realizaCalculoEspecifico(Orcamento $orcamento);


    public function calculaImposto(Orcamento $orcamento){
        return $this->realizaCalculoEspecifico($orcamento) + $this->realizaCalculoEspecifico($orcamento);


        
    }

    public function realizaCalculoDeOutroImposto(Orcamento $orcamento) {
        return $this->outroImposto === null ? 0 : $this->calculaImposto($orcamento);
    }



}