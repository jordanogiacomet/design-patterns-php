<?php

namespace Alura\DesignPattern\AcoesAoGerarPedidos;
use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Pedido adicionado ao banco com sucesso!" . PHP_EOL;
    }
}