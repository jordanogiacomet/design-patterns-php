<?php 

namespace Alura\DesignPattern;
use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use Alura\DesignPattern\Http\HttpAdapter;

class RegistraOrcamento{


    private HttpAdapter $http;
    public function __construct(HttpAdapter $http){
        $this->http = $http;
    }

    public function registrar(Orcamento $orcamento){
        if(!$orcamento->estado instanceof Finalizado){
            throw new \DomainException("Apenas orçamentos finalizados podem ser registrados na API");
        }

        $this->http->post("http://api.registrar.orcamento", [
            'valor' => $orcamento->valor,
            'quantidadeItens' => $orcamento->numeroDeItens
        ]);
    }
}