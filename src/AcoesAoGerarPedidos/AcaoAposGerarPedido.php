<?php

namespace Alura\DesignPattern\AcoesAoGerarPedidos;
use Alura\DesignPattern\Pedido;

interface AcaoAposGerarPedido{
    public function executaAcao(Pedido $pedido): void;
}