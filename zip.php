<?php
use Alura\DesignPattern\Http\CurlHttpAdapter;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\RegistraOrcamento;
use Alura\DesignPattern\Relatorio\OrcamentoZip;

require 'vendor/autoload.php';

$orcamentoZip = new OrcamentoZip();
$orcamento = new Orcamento();

$orcamentoZip->exportar($orcamento);