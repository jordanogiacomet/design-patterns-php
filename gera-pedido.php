<?php

use Alura\DesignPattern\{Orcamento, Pedido, GerarPedido};

require 'vendor/autoload.php';

$valorOrcamento = (float)$argv[1];
$numeroDeItens = (int)$argv[2];
$nomeCliente = $argv[3];

$pedido = new GerarPedido($nomeCliente, $valorOrcamento, $numeroDeItens);

echo "Pedido gerado com sucesso!" . PHP_EOL;
