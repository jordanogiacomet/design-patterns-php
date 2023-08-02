<?php

namespace Alura\DesignPattern\AcoesAoGerarPedidos;
use Alura\DesignPattern\Pedido;

class CriarLogDoPedido implements AcaoAposGerarPedido{
    public function executaAcao(Pedido $pedido): void 
    {
        echo "Log do pedido gerado!" . PHP_EOL;
    }
}