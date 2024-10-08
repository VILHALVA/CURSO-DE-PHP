# HERANÇA PARTE 2

<img src="./IMAGENS/HERANÇA 01.png" align="center" width="400"> <br>
<img src="./IMAGENS/HERANÇA 02.png" align="center" width="400"> <br>
<img src="./IMAGENS/ARVORE GENEALOGICA.png" align="center" width="400"> <br>
<img src="./IMAGENS/ANCESTRAIS.png" align="center" width="400"> <br>
<img src="./IMAGENS/ABSTRACAO.png" align="center" width="400"> <br>

Na parte 2 da herança em programação orientada a objetos (POO) em PHP, abordaremos tópicos mais avançados, incluindo:

1. Uso de métodos `parent`.
2. Visibilidade de membros na herança.
3. Anulação (override) de métodos.

Vamos aprofundar esses conceitos.

## Uso de Métodos `parent`

Quando uma classe derivada herda um método de uma classe base, é possível sobrescrever esse método para personalizá-lo de acordo com as necessidades da classe derivada. No entanto, às vezes, você pode querer manter o comportamento original do método da classe base e, ao mesmo tempo, adicionar funcionalidades à classe derivada. Para fazer isso, você pode usar a palavra-chave `parent` para acessar o método da classe base.

Aqui está um exemplo:

```php
class Animal {
    public function fazerSom() {
        echo "Animal faz um som.";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        parent::fazerSom(); // Chama o método da classe base
        echo " Além disso, faz um latido.";
    }
}

$cachorro = new Cachorro();
$cachorro->fazerSom(); // Output: Animal faz um som. Além disso, faz um latido.
```

Neste exemplo, a classe `Cachorro` herda o método `fazerSom` da classe `Animal`, mas também acrescenta sua própria funcionalidade ao método. A palavra-chave `parent::fazerSom()` é usada para chamar o método da classe base e, em seguida, a classe derivada adiciona sua parte ao som do cachorro.

## Visibilidade de Membros na Herança

Ao usar herança, a visibilidade dos membros (atributos e métodos) em uma classe base afeta como esses membros podem ser acessados na classe derivada. Aqui estão algumas regras importantes:

- Atributos ou métodos marcados como `public` em uma classe base são herdados com a mesma visibilidade e podem ser acessados diretamente na classe derivada.

- Atributos ou métodos marcados como `protected` em uma classe base são herdados com a mesma visibilidade e podem ser acessados diretamente na classe derivada, mas não de fora da classe ou de outras classes que não sejam subclasses.

- Atributos ou métodos marcados como `private` em uma classe base não são herdados pela classe derivada.

Vamos ilustrar esses pontos:

```php
class Animal {
    public $atributoPublico = "Atributo público";
    protected $atributoProtegido = "Atributo protegido";
    private $atributoPrivado = "Atributo privado";

    public function metodoPublico() {
        echo "Método público.";
    }

    protected function metodoProtegido() {
        echo "Método protegido.";
    }

    private function metodoPrivado() {
        echo "Método privado.";
    }
}

class Cachorro extends Animal {
    public function mostrarAtributos() {
        echo $this->atributoPublico; // Acesso permitido (public)
        echo $this->atributoProtegido; // Acesso permitido (protected)
        // echo $this->atributoPrivado; // Erro: Acesso não permitido (private)
    }

    public function chamarMetodos() {
        $this->metodoPublico(); // Acesso permitido (public)
        $this->metodoProtegido(); // Acesso permitido (protected)
        // $this->metodoPrivado(); // Erro: Acesso não permitido (private)
    }
}
```

Lembre-se de que a escolha de visibilidade deve ser feita com base na necessidade de controle sobre a acessibilidade dos membros em suas classes. O encapsulamento e a visibilidade são importantes para garantir a integridade dos objetos e a manutenção do código.

## Anulação (Override) de Métodos

Na herança, a anulação de métodos é um conceito importante. Isso permite que uma classe derivada substitua (override) um método da classe base com sua própria implementação. Para anular um método, basta criar um método com o mesmo nome na classe derivada. A anulação ocorre quando o método da classe derivada é chamado.

```php
class Animal {
    public function fazerSom() {
        echo "Animal faz um som.";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "Cachorro faz um latido.";
    }
}

$cachorro = new Cachorro();
$cachorro->fazerSom(); // Output: Cachorro faz um latido.
```

Neste exemplo, a classe `Cachorro` anula o método `fazerSom` da classe base `Animal`. Quando chamamos `$cachorro->fazerSom()`, a implementação da classe derivada é executada.

Essas são as noções fundamentais da herança em PHP e a parte 2 do tópico. A herança é uma técnica importante para a reutilização de código e a criação de hierarquias de classes. Ela é amplamente utilizada na programação orientada a objetos para modelar relacionamentos entre entidades do sistema.