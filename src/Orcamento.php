<?php

namespace Alura\DesignPattern;
use Alura\DesignPattern\EstadosOrcamento\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Orcamento{
    public int $numeroDeItens;
    public float $valor;
    public EstadoOrcamento $estado;

    public function __construct() {
        $this->estado = new EmAprovacao();
    }


    public function aplicaDescontoExtra(){
        $this->valor -= $this->estado->calculaDescontoExtra($this);
    }

}