<?php
use Alura\DesignPattern\Http\CurlHttpAdapter;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\RegistraOrcamento;

require 'vendor/autoload.php';

$registroOrcamento = new RegistraOrcamento(new CurlHttpAdapter());
$registroOrcamento->registrar(new Orcamento());