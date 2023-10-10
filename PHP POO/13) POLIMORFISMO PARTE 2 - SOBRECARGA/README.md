# POLIMORFISMO PARTE 2 - SOBRECARGA
A sobrecarga de métodos é um conceito que envolve a criação de vários métodos com o mesmo nome em uma classe, mas com diferentes parâmetros. No entanto, em PHP, a linguagem não suporta sobrecarga de métodos como é comum em outras linguagens orientadas a objetos, como Java ou C#. No PHP, apenas o último método com um determinado nome e parâmetros permanecerá na classe. Isso significa que os métodos com o mesmo nome e parâmetros anteriores serão substituídos.

No entanto, é importante observar que o PHP permite que você crie métodos com parâmetros padrão. Isso pode criar uma funcionalidade semelhante à sobrecarga de métodos, pois você pode chamar um método com um número variável de argumentos, dependendo da implementação. Vamos explorar isso com um exemplo:

```php
class Calculadora {
    public function somar($a, $b = 0) {
        return $a + $b;
    }
}

$calculadora = new Calculadora();

$resultado1 = $calculadora->somar(5, 3); // Chama o método somar com dois argumentos
$resultado2 = $calculadora->somar(5);    // Chama o método somar com um argumento

echo $resultado1; // Output: 8
echo $resultado2; // Output: 5
```

Neste exemplo, a classe `Calculadora` possui um método `somar` que aceita dois argumentos, mas o segundo argumento tem um valor padrão de 0. Isso significa que você pode chamar o método com apenas um argumento, e ele ainda funcionará. Se você fornecer dois argumentos, a soma será realizada normalmente.

Embora isso não seja exatamente o mesmo que sobrecarga de métodos, é uma técnica comum em PHP para lidar com diferentes combinações de argumentos em um único método, tornando-o mais flexível.

É importante lembrar que a sobrecarga de métodos com base em diferentes tipos de argumentos não é uma característica nativa do PHP como em algumas outras linguagens de programação, mas a técnica de usar parâmetros padrão é frequentemente suficiente para atender às necessidades de flexibilidade nos métodos.