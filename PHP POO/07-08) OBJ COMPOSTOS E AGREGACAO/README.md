# OBJETOS COMPOSTOS E AGREGACAO
Objetos compostos e agregação são conceitos que envolvem a relação entre objetos em programação orientada a objetos (POO). Eles descrevem como objetos podem ser combinados para formar estruturas mais complexas.

## Objetos Compostos

Objetos compostos referem-se à criação de objetos que contêm outros objetos como atributos. Essa relação é muitas vezes chamada de "composição". Objetos compostos são usados para modelar relacionamentos mais complexos entre entidades em um sistema.

Por exemplo, imagine um sistema de gerenciamento de escola. Você pode ter uma classe `Turma` que contém uma coleção de objetos `Aluno`:

```php
class Aluno {
    public $nome;
    public $matricula;
}

class Turma {
    public $nome;
    public $alunos = []; // Uma coleção de objetos Aluno
}
```

Aqui, a classe `Turma` é um objeto composto que contém uma coleção de objetos `Aluno`. Você pode adicionar, remover ou realizar operações nos alunos diretamente na classe `Turma`.

## Agregação

Agregação é um tipo de relação entre objetos em que um objeto "tem" ou "contém" outros objetos, mas os objetos contidos podem existir independentemente do objeto que os contém. Em termos de código, isso é frequentemente implementado como uma referência a outro objeto, geralmente passada como um parâmetro ou mantida como um atributo.

Por exemplo, em um sistema de gerenciamento de biblioteca, você pode ter uma classe `Biblioteca` que contém uma referência a uma coleção de objetos `Livro`:

```php
class Livro {
    public $titulo;
    public $autor;
}

class Biblioteca {
    public $nome;
    public $livros = []; // Uma coleção de objetos Livro
}
```

Neste caso, a classe `Biblioteca` "agrega" objetos `Livro`, mas os livros podem existir de forma independente, mesmo que sejam parte de uma biblioteca.

## Diferenças entre Composição e Agregação

A principal diferença entre composição e agregação está na duração do relacionamento:

- **Composição**: Em uma composição, os objetos contidos geralmente são criados e gerenciados dentro do objeto contenedor. Eles têm uma relação mais forte e, muitas vezes, não faz sentido que existam independentemente do objeto contenedor.

- **Agregação**: Na agregação, os objetos contidos geralmente existem independentemente e podem ser compartilhados por vários objetos contenedores. A relação é mais fraca, e os objetos contidos podem existir fora do objeto contenedor.

Ambos os conceitos são úteis em diferentes cenários de modelagem de sistemas. A escolha entre composição e agregação depende das necessidades específicas de design do seu sistema e de como os objetos se relacionam entre si.