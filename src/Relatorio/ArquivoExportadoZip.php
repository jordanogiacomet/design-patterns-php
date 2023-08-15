<?php

namespace Alura\DesignPattern\Relatorio;

class ArquivoExportadoXml implements ArquivoExportado{

    private string $nome;

    public function __construct(string $nome){
        $this->nome = $nome;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
      $caminhoArquivo = tempnam(sys_get_temp_dir(), 'zip');
      $arquivoZip = new \ZipArchive();
      $arquivoZip->open($caminhoArquivo);
      $arquivoZip->addFromString($this->nome, serialize($conteudoExportado));
      $arquivoZip->close();

      return $caminhoArquivo;
      
    }
}