<?php

namespace Alura\DesignPattern;
use Alura\DesignPattern\EstadosOrcamento\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Orcamento implements Orcavel{
    
    private array $itens; 

    public EstadoOrcamento $estado;

    public function __construct() {
        $this->estado = new EmAprovacao();
        $this->itens = [];
    }

    public function valor(): float
    {
        return array_reduce(
            $this->itens,
            fn ($valorAcumulado, $item) => $item->valor() + $valorAcumulado, 
        );
    }

    public function addItem(ItemOrcamento $item){
        $this->itens[] = $item;
    }

    public function aplicaDescontoExtra(){
        $this->valor -= $this->estado->calculaDescontoExtra($this);
    }

}