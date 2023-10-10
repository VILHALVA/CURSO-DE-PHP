# POLIMORFISMO PARTE 1 - SOBREPOSIÇÃO
O polimorfismo é um dos conceitos centrais da programação orientada a objetos (POO) e se refere à capacidade de objetos de classes diferentes responderem de maneira diferente a um mesmo método. O polimorfismo permite que você trate objetos de diferentes classes de maneira uniforme, desde que eles compartilhem uma interface comum, como um método com o mesmo nome.

Nesta parte 1, vamos nos concentrar na sobreposição de métodos, que é uma forma comum de polimorfismo. A sobreposição envolve a redefinição de métodos em uma classe derivada que já existem em uma classe base.

## Sobreposição de Métodos

A sobreposição de métodos ocorre quando uma classe derivada (subclasse) fornece sua própria implementação de um método que já existe na classe base (superclasse). A subclasse substitui o comportamento do método da superclasse com sua própria implementação. Isso é usado para criar comportamentos específicos da subclasse que são adequados para sua funcionalidade.

Aqui está um exemplo:

```php
class Animal {
    public function fazerSom() {
        echo "Animal faz um som genérico.";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "Cachorro faz um latido.";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        echo "Gato faz um miado.";
    }
}
```

Neste exemplo, a classe `Animal` tem um método `fazerSom`. As classes `Cachorro` e `Gato` são subclasses de `Animal` e substituem (sobrepõem) o método `fazerSom` com suas próprias implementações.

Agora, podemos criar objetos dessas classes e chamar o método `fazerSom`:

```php
$animal = new Animal();
$animal->fazerSom(); // Output: Animal faz um som genérico.

$cachorro = new Cachorro();
$cachorro->fazerSom(); // Output: Cachorro faz um latido.

$gato = new Gato();
$gato->fazerSom(); // Output: Gato faz um miado.
```

Observe como o mesmo método `fazerSom` é chamado em objetos de classes diferentes, mas a implementação específica de cada classe é executada. Isso é um exemplo de polimorfismo por meio da sobreposição.

## Utilização do Polimorfismo

O polimorfismo torna o código mais flexível e extensível, uma vez que você pode criar classes especializadas que compartilham uma interface comum. Isso permite que você escreva código que não precisa saber exatamente qual objeto está sendo manipulado, desde que ele esteja usando a interface comum.

O polimorfismo é particularmente útil ao trabalhar com coleções de objetos de diferentes tipos. Por exemplo, você pode ter uma coleção de animais (que podem ser cachorros, gatos, pássaros, etc.) e chamar o método `fazerSom` em cada um deles, sem se preocupar com a classe específica de cada objeto.

Nesta parte 1, você aprendeu sobre a sobreposição de métodos como uma forma de polimorfismo. Na parte 2, exploraremos outra forma de polimorfismo, que envolve o uso de interfaces e classes abstratas para definir contratos comuns que as classes devem seguir. Isso permite um polimorfismo mais amplo e flexível.