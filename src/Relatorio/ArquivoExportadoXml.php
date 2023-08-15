<?php

namespace Alura\DesignPattern\Relatorio;

class ArquivoExportadoXml implements ArquivoExportado{

    private string $nome;

    public function __construct(string $nome){
        $this->nome = $nome;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
         $elementoXml = new \SimpleXMLElement("<{{$this->nome}}/>");
         foreach ($conteudoExportado->conteudo() as $item => $valor) {
            $elementoXml->addChild($item, $valor);
         }   

         $caminhoArquivo = tempnam(sys_get_temp_dir(), 'xml');
         $elementoXml->asXML($caminhoArquivo);

         return $caminhoArquivo;
    }
}