# CONFIGURANDO VISIBILIDADE
A visibilidade em PHP refere-se ao controle de acesso aos atributos e métodos de uma classe. Há três níveis de visibilidade que podem ser aplicados a membros de classe:

1. **Public**: Os membros públicos são acessíveis a partir de qualquer lugar, tanto de dentro quanto de fora da classe. É a visibilidade padrão se você não especificar outra visibilidade.

2. **Protected**: Os membros protegidos são acessíveis somente de dentro da classe em que são definidos e de suas subclasses. Eles não podem ser acessados de fora da classe.

3. **Private**: Os membros privados são acessíveis apenas de dentro da classe em que são definidos. Eles não podem ser acessados de fora da classe ou de suas subclasses.

Para configurar a visibilidade em PHP, você usa as palavras-chave `public`, `protected` e `private` antes dos atributos ou métodos de uma classe. Aqui está um exemplo de como configurar a visibilidade:

```php
class MinhaClasse {
    public $atributoPublico;     // Atributo público
    protected $atributoProtegido; // Atributo protegido
    private $atributoPrivado;     // Atributo privado

    public function metodoPublico() {
        // Método público
    }

    protected function metodoProtegido() {
        // Método protegido
    }

    private function metodoPrivado() {
        // Método privado
    }
}
```

Aqui estão algumas diretrizes para escolher a visibilidade adequada:

- Use `public` para atributos ou métodos que precisam ser acessíveis de fora da classe, por exemplo, para definir valores ou chamar métodos da classe.

- Use `protected` para atributos ou métodos que devem ser acessíveis apenas dentro da classe ou em suas subclasses. Isso é útil quando você deseja fornecer uma interface para subclasses, mas não deseja permitir o acesso direto de fora da classe.

- Use `private` para atributos ou métodos que devem ser acessíveis apenas dentro da classe em que são definidos. Isso é útil para ocultar detalhes de implementação e impedir o acesso direto de fora da classe.

Aqui está um exemplo de como os diferentes níveis de visibilidade funcionam:

```php
class MinhaClasse {
    public $atributoPublico;
    protected $atributoProtegido;
    private $atributoPrivado;

    public function __construct() {
        $this->atributoPublico = "Acesso público.";
        $this->atributoProtegido = "Acesso protegido.";
        $this->atributoPrivado = "Acesso privado.";
    }
}

$objeto = new MinhaClasse();
echo $objeto->atributoPublico;   // Acesso público.
echo $objeto->atributoProtegido; // Erro: Atributo protegido.
echo $objeto->atributoPrivado;   // Erro: Atributo privado.
```

Lembre-se de que, embora seja possível acessar atributos protegidos ou privados de dentro da classe onde são definidos, o acesso a esses atributos a partir de fora da classe deve ser feito por meio de métodos públicos que fornecem uma interface controlada. Isso é uma prática recomendada para manter a encapsulação e o controle sobre o acesso aos membros de classe.