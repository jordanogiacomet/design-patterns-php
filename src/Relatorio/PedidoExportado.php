<?php

namespace Alura\DesignPattern\Relatorio;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

class PedidoExportado implements ConteudoExportado{
    private $pedido = new Pedido();

    public function __construct(Pedido $pedido){
        $this->pedido = $pedido;
    }

    public function conteudo(Pedido $pedido){
        return [
            'nome_cliente' => $this->pedido->nomeCliente,
            'data_finalizacao' => $this->pedido->dataFinalizacao,
            'orcamento_valor' => $this->pedido->orcamento
        ];
    }
}