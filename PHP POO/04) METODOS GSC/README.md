# METODOS GETTERS SETTERS E CONSTRUTORES
Métodos getters, setters e construtores são componentes essenciais da programação orientada a objetos (POO) em PHP e em muitas outras linguagens. Eles são usados para controlar o acesso e a manipulação dos atributos de uma classe. Vou explicar cada um deles:

## Construtores

O construtor é um método especial de uma classe que é chamado quando um objeto da classe é criado. Ele é usado para inicializar os atributos da classe e configurar o objeto. Em PHP, o construtor é definido usando o método `__construct()`.

```php
class Pessoa {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

$joao = new Pessoa("João"); // Cria um objeto com o construtor
echo $joao->nome; // Acesso ao atributo inicializado pelo construtor
```

Neste exemplo, o construtor recebe um argumento `$nome` e inicializa o atributo `nome` do objeto.

## Getters

Os métodos getters são usados para obter o valor de um atributo privado ou protegido de uma classe. Eles geralmente têm um nome no formato `getNomeDoAtributo()` e retornam o valor do atributo.

```php
class Pessoa {
    private $idade;

    public function __construct($idade) {
        $this->idade = $idade;
    }

    public function getIdade() {
        return $this->idade;
    }
}

$joao = new Pessoa(30);
echo $joao->getIdade(); // Obtém a idade usando o método getter
```

Os getters são úteis para permitir o acesso controlado aos atributos privados ou protegidos.

## Setters

Os métodos setters são usados para definir o valor de um atributo privado ou protegido de uma classe. Eles geralmente têm um nome no formato `setNomeDoAtributo($valor)` e definem o valor do atributo.

```php
class Pessoa {
    private $idade;

    public function __construct($idade) {
        $this->idade = $idade;
    }

    public function setIdade($idade) {
        if ($idade >= 0) {
            $this->idade = $idade;
        }
    }
}

$joao = new Pessoa(30);
$joao->setIdade(35); // Define a idade usando o método setter
echo $joao->getIdade(); // Obtém a idade atualizada
```

Os setters são úteis para impor regras de validação ou realizar ações adicionais ao definir o valor de um atributo.

Em resumo, os construtores são usados para inicializar objetos, os getters para obter valores de atributos e os setters para definir valores de atributos com validações e lógica específicas, tornando a classe mais segura e flexível.