<?php

namespace Alura\DesignPattern;

class GerarPedido implements Command{

    private string $nomeCliente;
    private float $valorOrcamento;
    private int $numeroDeItens;

    public function __construct(string $nomeCliente, float $valorOrcamento, int $numeroDeItens){
        $this->nomeCliente = $nomeCliente;
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroDeItens = $numeroDeItens;
    }

    public function execute(){
        $orcamento = new Orcamento();

        $orcamento->valor = $this->valorOrcamento;
        $orcamento->numeroDeItens = $this->numeroDeItens;

        $pedido = new Pedido();

        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->orcamento = $orcamento;
    }
}