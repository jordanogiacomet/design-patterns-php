<?php

namespace Alura\DesignPattern;
use Alura\DesignPattern\AcoesAoGerarPedidos\AcaoAposGerarPedido;

class GerarPedidoHandler
{

    private $acoesAposGerarPedido = [];

    public function __construct()
    {
        
    }

    public function adicionaAcaoAoGerarPedido(AcaoAposGerarPedido $acao){
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->numeroDeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

       foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
       }
    }
}
