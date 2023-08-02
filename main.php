<?php


use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->numeroDeItens = 6;
$orcamento-> valor = 100;

echo $calculadora->calculaDescontos($orcamento);