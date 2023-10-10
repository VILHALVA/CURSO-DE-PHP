# HERANÇA PARTE 1
A herança é um dos conceitos fundamentais da programação orientada a objetos (POO) e é usada para criar uma nova classe que herda as características de uma classe existente. Isso permite a reutilização de código e a definição de hierarquias de classes. Nesta parte 1, vou explicar o conceito de herança e como criar uma classe derivada em PHP.

## Conceito de Herança

Na herança, uma classe base (ou classe pai) fornece os atributos e métodos que podem ser herdados por uma classe derivada (ou classe filha). A classe derivada pode estender a funcionalidade da classe base, adicionando novos métodos e atributos ou substituindo os métodos existentes.

A herança é frequentemente usada para criar classes mais especializadas, que compartilham características comuns com uma classe mais geral. Isso ajuda a evitar a duplicação de código e a criar uma estrutura de classes hierárquica.

## Criando uma Classe Derivada

Em PHP, você pode criar uma classe derivada estendendo uma classe base. A palavra-chave `extends` é usada para estabelecer a relação de herança.

```php
class Animal {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function fazerSom() {
        echo "Animal faz um som.";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "$this->nome faz um latido.";
    }

    public function cavarBuraco() {
        echo "$this->nome está cavando um buraco.";
    }
}
```

Neste exemplo, temos uma classe base `Animal` com um atributo `nome` e um método `fazerSom`. Em seguida, criamos uma classe derivada `Cachorro` que estende a classe `Animal`. A classe `Cachorro` herda o atributo `nome` da classe base e substitui o método `fazerSom`. Além disso, a classe `Cachorro` adiciona um novo método `cavarBuraco`.

## Utilizando a Herança

Agora, podemos criar objetos das classes base e derivadas:

```php
$animal = new Animal("Animal Genérico");
$cachorro = new Cachorro("Rex");

$animal->fazerSom(); // Output: Animal faz um som.
$cachorro->fazerSom(); // Output: Rex faz um latido.

$cachorro->cavarBuraco(); // Output: Rex está cavando um buraco.
```

Observe que, mesmo que a classe `Cachorro` tenha seu próprio método `fazerSom`, a relação de herança permite que um objeto da classe `Cachorro` acesse e chame o método `fazerSom` da classe `Animal`.

Isso é a parte 1 da herança em POO. A parte 2 vai cobrir tópicos avançados, como o uso de métodos parentes, a visibilidade de membros na herança e a prevenção de anulação (override).