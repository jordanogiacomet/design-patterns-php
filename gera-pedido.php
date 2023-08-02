<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{GerarPedido, GerarPedidoHandler, Orcamento, Pedido};
use Alura\DesignPattern\AcoesAoGerarPedidos\CriarLogDoPedido;
use Alura\DesignPattern\AcoesAoGerarPedidos\CriarPedidoNoBanco;

$valorOrcamento = (float)$argv[1];
$numeroDeItens = (int)$argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionaAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionaAcaoAoGerarPedido(new CriarLogDoPedido());
$gerarPedidoHandler->execute($gerarPedido);
