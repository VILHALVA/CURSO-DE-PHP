# CRIANDO CLASSES
Criar classes em PHP é uma parte fundamental da programação orientada a objetos (POO). As classes servem como modelos para a criação de objetos, permitindo que você defina atributos e métodos que representam entidades e funcionalidades em seu programa. Aqui está um exemplo de como criar uma classe em PHP:

```php
class Pessoa {
    // Atributos da classe
    public $nome;
    public $idade;

    // Método da classe
    public function falar() {
        echo "Olá, meu nome é $this->nome e tenho $this->idade anos.";
    }
}
```

Neste exemplo, criamos uma classe chamada `Pessoa` com dois atributos (`nome` e `idade`) e um método (`falar`). Vou explicar cada parte:

- `class Pessoa`: Aqui, estamos definindo a classe `Pessoa`. A palavra-chave `class` é usada para criar uma nova classe.

- Atributos: Os atributos representam os dados que pertencem a um objeto da classe. Neste caso, temos dois atributos públicos, `$nome` e `$idade`. Eles são precedidos pela palavra-chave `public`, o que significa que podem ser acessados de fora da classe.

- Método: O método `falar` é uma função definida dentro da classe. Ele pode ser chamado em objetos dessa classe para realizar uma ação específica. Neste caso, o método imprime uma mensagem com o nome e a idade da pessoa.

Agora, vamos criar um objeto da classe `Pessoa` e interagir com ele:

```php
$joao = new Pessoa(); // Criando um objeto da classe Pessoa
$joao->nome = "João"; // Definindo o atributo nome
$joao->idade = 30; // Definindo o atributo idade

$joao->falar(); // Chamando o método falar para exibir a mensagem
```

Neste exemplo, criamos um objeto `$joao` da classe `Pessoa`, definimos seus atributos e chamamos o método `falar` para imprimir a mensagem. Isso ilustra como as classes são usadas para criar objetos que podem conter dados e comportamento.

Lembre-se de que a criação de classes e objetos é uma parte essencial da POO em PHP. À medida que você avança em seus estudos, pode criar classes mais complexas, com mais atributos e métodos, para representar entidades e funcionalidades mais sofisticadas em seus aplicativos.