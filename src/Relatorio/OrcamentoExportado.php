<?php

namespace Alura\DesignPattern\Relatorio;
use Alura\DesignPattern\Orcamento;

class OrcamentoExportado implements ConteudoExportado{

    private $orcamento = new Orcamento();

    public function __construct(Orcamento $orcamento){
        $this->orcamento = $orcamento;
    }


    public function conteudo(Orcamento $orcamento){
        return [
            'valor' => $this->orcamento->valor,
            'numero_itens' => $this->orcamento->numeroDeItens
        ];
    }
}