# Padrões Comportamentais em PHP - Alura Design Patterns

Neste projeto, foram aplicados diversos padrões comportamentais em PHP para exemplificar o uso de cada um deles. Os padrões comportamentais são `design patterns` que lidam com a comunicação, a delegação de responsabilidades e a interação entre objetos.

## Padrões Utilizados

### Strategy

O padrão `Strategy` permite definir uma família de algoritmos, encapsular cada um deles e torná-los intercambiáveis. Dessa forma, é possível permitir que os clientes escolham o algoritmo que melhor se adapta a suas necessidades.

### Chain of Responsibility

O padrão `Chain of Responsibility` permite construir uma cadeia de objetos que podem tratar uma solicitação. Quando uma solicitação é feita, ela é passada pela cadeia até que seja tratada por um dos objetos. Cada objeto decide se processa a solicitação ou a passa adiante na cadeia.

### Template Method

O padrão `Template Method` define a estrutura de um algoritmo em uma classe, mas permite que suas subclasses possam redefinir algumas etapas do algoritmo sem alterar sua estrutura geral.

### State

O padrão `State` permite que um objeto altere seu comportamento quando seu estado interno muda. Isso é feito através da criação de classes que representam cada estado e são trocadas conforme o objeto muda de estado.

### Command

O padrão `Command` encapsula uma solicitação como um objeto, permitindo que os clientes parametrize solicitações com diferentes operações, enfileire ou registre solicitações e suporte operações que podem ser desfeitas.

### Observer

O padrão `Observer` permite que um objeto publique alterações para seus observadores, permitindo que os observadores se inscrevam e recebam notificações quando o objeto é alterado.

### Iterator

O padrão `Iterator` fornece uma maneira de acessar os elementos de uma coleção sem expor sua representação interna. Ele abstrai a iteração sobre elementos, permitindo que a coleção seja percorrida de várias formas sem que o código do cliente precise saber sobre a estrutura interna da coleção.

## Arquivos do Projeto

- `Pedido.php`: Classe que representa um pedido com nome do cliente, data de finalização e referência a um orçamento.
- `Orcamento.php`: Classe que representa um orçamento com número de itens, valor e estado. O estado inicial é "Em Aprovação".
- `GerarPedido.php`: Classe que representa o comando de gerar um pedido com valor do orçamento, número de itens e nome do cliente.
- `GerarPedidoHandler.php`: Classe que representa o manipulador do comando de gerar pedido, onde ações são executadas após a geração do pedido.
- `CalculadoraDeImpostos.php`: Classe que calcula o valor do imposto a ser aplicado em um orçamento, utilizando o padrão Strategy.
- `CalculadoraDeDescontos.php`: Classe que calcula o valor do desconto a ser aplicado em um orçamento, utilizando o padrão Chain of Responsibility.
- Pasta `Impostos`: Contém as classes relacionadas a diferentes tipos de impostos.
- Pasta `EstadosOrcamento`: Contém as classes que representam os diferentes estados de um orçamento, utilizadas pelo padrão State.
- Pasta `Descontos`: Contém as classes relacionadas aos diferentes tipos de descontos, utilizadas pelo padrão Chain of Responsibility.
- Pasta `AcoesAoGerarPedidos`: Contém as classes que representam as ações executadas após a geração de um pedido, utilizadas pelo padrão Observer.

## Contribuições

Se encontrar algum problema, tiver sugestões ou quiser contribuir com o projeto, fique à vontade para abrir uma issue ou enviar um pull request.

## Licença

Este projeto está licenciado sob a Licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
