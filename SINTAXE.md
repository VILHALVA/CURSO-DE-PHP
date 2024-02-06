# SINTAXE DA LINGUAGEM:
## 0) FUNDAMENTOS:
Aqui está um exemplo de código em PHP que utiliza os operadores aritméticos, relacionais e lógicos com diferentes tipos primitivos:
```php
<?php
// Operadores aritméticos
$numero1 = 10;
$numero2 = 5;

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;
$resto = $numero1 % $numero2;

// Operadores relacionais
$valor1 = 10;
$valor2 = 5;

$igual = $valor1 == $valor2;
$diferente = $valor1 != $valor2;
$maior = $valor1 > $valor2;
$menor = $valor1 < $valor2;
$maiorOuIgual = $valor1 >= $valor2;
$menorOuIgual = $valor1 <= $valor2;

// Operadores lógicos
$condicao1 = true;
$condicao2 = false;

$e = $condicao1 && $condicao2;
$ou = $condicao1 || $condicao2;
$nao = !$condicao1;

// Exibição dos resultados
echo "Operadores aritméticos:\n";
echo "Soma: " . $soma . "\n";
echo "Subtração: " . $subtracao . "\n";
echo "Multiplicação: " . $multiplicacao . "\n";
echo "Divisão: " . $divisao . "\n";
echo "Resto: " . $resto . "\n";

echo "\nOperadores relacionais:\n";
echo "Igual: " . ($igual ? "true" : "false") . "\n";
echo "Diferente: " . ($diferente ? "true" : "false") . "\n";
echo "Maior: " . ($maior ? "true" : "false") . "\n";
echo "Menor: " . ($menor ? "true" : "false") . "\n";
echo "Maior ou igual: " . ($maiorOuIgual ? "true" : "false") . "\n";
echo "Menor ou igual: " . ($menorOuIgual ? "true" : "false") . "\n";

echo "\nOperadores lógicos:\n";
echo "E: " . ($e ? "true" : "false") . "\n";
echo "OU: " . ($ou ? "true" : "false") . "\n";
echo "NÃO: " . ($nao ? "true" : "false") . "\n";
?>
```
Neste exemplo, temos variáveis com diferentes tipos primitivos, como inteiros (números), booleanos (valores lógicos) e strings. Utilizamos os operadores aritméticos (+, -, *, /, %) para realizar cálculos matemáticos, os operadores relacionais (==, !=, >, <, >=, <=) para fazer comparações entre os valores e os operadores lógicos (&&, ||, !) para combinar condições lógicas.

Após realizar as operações, exibimos os resultados na tela. Os operadores relacionais retornam valores booleanos (true ou false) dependendo da condição avaliada, enquanto os operadores aritméticos retornam o resultado do cálculo. Os operadores lógicos retornam valores booleanos com base nas condições combinadas.

Esses operadores são fundamentais para realizar operações e tomar decisões em programação, permitindo que você manipule variáveis, compare valores e controle o fluxo do seu código.
## 1) VARIAVEIS SIMPLES:
Em PHP, você pode declarar variáveis simples utilizando o símbolo de dólar ($), seguido pelo nome da variável. Aqui está um exemplo de declaração de variáveis simples em PHP:
````php
// Declaração de variáveis simples
$nome = "João";
$idade = 25;
$altura = 1.75;
$ativo = true;
````
Nesse exemplo, temos quatro variáveis simples declaradas:
* A variável $nome armazena uma string com o valor "João".
* A variável $idade armazena um número inteiro com o valor 25.
* A variável $altura armazena um número de ponto flutuante com o valor 1.75.
* A variável $ativo armazena um valor booleano com o valor verdadeiro (true).
As variáveis em PHP são dinamicamente tipadas, o que significa que não é necessário especificar o tipo de dados ao declará-las. O PHP deduz automaticamente o tipo de acordo com o valor atribuído. Você pode atribuir valores diferentes a uma variável ao longo do código, independentemente do tipo de dado inicial. É importante lembrar que as variáveis em PHP são sensíveis a maiúsculas e minúsculas. Ou seja, $nome e $Nome seriam tratadas como variáveis diferentes. Além disso, o símbolo de dólar ($) deve ser usado sempre que você quiser referenciar ou acessar o valor de uma variável em PHP.

Em PHP, podemos utilizar a função `fgets()` para realizar a entrada de dados pelo usuário através da linha de comando. Essa função lê uma linha de texto digitada pelo usuário e retorna uma string com o valor lido.

Aqui está um exemplo de como realizar a entrada de dados em PHP:
```php
<?php
// Entrada de um número inteiro
echo "Digite um número inteiro: ";
$numeroInteiro = fgets(STDIN);
$numeroInteiro = intval($numeroInteiro);
echo "Você digitou o número inteiro: " . $numeroInteiro . PHP_EOL;

// Entrada de um número decimal
echo "Digite um número decimal: ";
$numeroDecimal = fgets(STDIN);
$numeroDecimal = floatval($numeroDecimal);
echo "Você digitou o número decimal: " . $numeroDecimal . PHP_EOL;

// Entrada de uma string
echo "Digite seu nome: ";
$nome = fgets(STDIN);
echo "Olá, " . $nome;

// Entrada de um caractere
echo "Digite um caractere: ";
$caractere = fgets(STDIN);
$caractere = trim($caractere);
if (strlen($caractere) == 1) {
    echo "Você digitou o caractere: " . $caractere . PHP_EOL;
} 
else {
    echo "Entrada inválida. Certifique-se de digitar apenas um caractere." . PHP_EOL;
}
?>
```
Neste exemplo, utilizamos a função `fgets(STDIN)` para ler a entrada de dados do usuário. Em seguida, utilizamos as funções `intval()` e `floatval()` para converter a string lida para os tipos int e float, respectivamente.

É importante notar que a função `fgets()` lê toda a linha digitada pelo usuário, incluindo a quebra de linha ao final. Para remover a quebra de linha, utilizamos a função `trim()`.

Ao executar o código, ele irá solicitar ao usuário que digite os valores desejados e, em seguida, imprimirá os valores lidos na saída.

## 2) ESTRUTURA CONDICIONAL:
### ESTRUTURA IF-ELSE:
No PHP, existem algumas estruturas condicionais que você pode usar para controlar o fluxo de execução do seu código. As estruturas condicionais mais comuns são o if, else if e else. Aqui está um exemplo de como usar essas estruturas condicionais em PHP:
````php
$idade = 20;
if ($idade < 18) {
    echo "Menor de idade";
} 
elseif ($idade >= 18 && $idade < 60) {
    echo "Adulto";
} 
else {
    echo "Idoso";
}
````
Nesse exemplo, a variável $idade é avaliada em diferentes condições usando a estrutura condicional if, else if e else. O código verifica se a idade é menor que 18, se for, exibe a mensagem "Menor de idade". Se não for, verifica se a idade está entre 18 (inclusive) e 60 (exclusive), exibindo a mensagem "Adulto" nesse caso. Por fim, se nenhuma das condições anteriores for atendida, exibe a mensagem "Idoso".
Você também pode usar estruturas condicionais aninhadas, onde uma estrutura condicional está dentro de outra. Aqui está um exemplo de estrutura condicional aninhada em PHP:
````php
$idade = 25;
$sexo = "Feminino";
if ($idade >= 18) {
    if ($sexo == "Masculino") {
        echo "Adulto do sexo masculino";
    } 
    else {
        echo "Adulto do sexo feminino";
    }
} 
else {
    echo "Menor de idade";
}
````
Nesse exemplo, primeiro verifica-se se a idade é maior ou igual a 18. Se for, então verifica-se o sexo. Se o sexo for "Masculino", exibe a mensagem "Adulto do sexo masculino". Caso contrário, exibe a mensagem "Adulto do sexo feminino". Se a idade for menor que 18, exibe a mensagem "Menor de idade".

### ESTRUTURA SWITCH:
O switch é outra estrutura condicional disponível no PHP que permite verificar o valor de uma variável e executar diferentes ações com base em diferentes casos. Aqui está um exemplo de como usar o switch em PHP:
````php
$diaDaSemana = 3;
switch ($diaDaSemana) {
    case 1:
        echo "Hoje é domingo";
        break;
    case 2:
        echo "Hoje é segunda-feira";
        break;
    case 3:
        echo "Hoje é terça-feira";
        break;
    case 4:
        echo "Hoje é quarta-feira";
        break;
    case 5:
        echo "Hoje é quinta-feira";
        break;
    case 6:
        echo "Hoje é sexta-feira";
        break;
    case 7:
        echo "Hoje é sábado";
        break;
    default:
        echo "Dia inválido";
        break;
}
````
Nesse exemplo, a variável $diaDaSemana contém um número correspondente ao dia da semana, sendo 1 para domingo, 2 para segunda-feira, e assim por diante. Cada caso do switch corresponde a um valor numérico e imprime a mensagem adequada. É importante destacar que o switch em PHP não realiza automaticamente a conversão dos números para os nomes dos dias da semana. Portanto, é necessário utilizar os valores numéricos correspondentes aos dias da semana em seus respectivos casos no switch.

## 3) ESTRUTURA DE REPETIÇÃO:
Em PHP, existem algumas estruturas de repetição que permitem executar um bloco de código várias vezes. As estruturas de repetição mais comuns em PHP são for, while, do-while e foreach. Aqui está um exemplo de cada uma dessas estruturas de repetição:

### ESTRUTURA FOR:
````php
for ($i = 0; $i < 5; $i++) {
    echo $i . " ";
}
````
Nesse exemplo, o for é utilizado para imprimir os números de 0 a 4. A variável $i é iniciada com o valor 0, a condição $i < 5 verifica se $i é menor que 5, e a expressão $i++ é executada após cada iteração para incrementar o valor de $i em 1.

### ESTRUTURA WHILE:
````php
$i = 0;
while ($i < 5) {
    echo $i . " ";
    $i++;
}
````
Nesse exemplo, o while é utilizado para imprimir os números de 0 a 4. A condição $i < 5 é verificada antes de cada iteração, e o bloco de código é executado enquanto a condição for verdadeira. Após cada iteração, o valor de $i é incrementado em 1.

### ESTRUTURA DO-WHILE:
````php
$i = 0;
do {
    echo $i . " ";
    $i++;
} 
while ($i < 5);
````
Nesse exemplo, o do-while é utilizado para imprimir os números de 0 a 4. O bloco de código é executado pelo menos uma vez, e a condição $i < 5 é verificada após cada iteração. Enquanto a condição for verdadeira, o bloco de código continuará sendo executado.

### ESTRUTURA FOREACH:
Usado para iterar sobre arrays:
````php
$frutas = array("maçã", "banana", "laranja");
foreach ($frutas as $fruta) {
    echo $fruta . " ";
}
````
Nesse exemplo, o foreach é utilizado para percorrer o array $frutas e imprimir cada elemento. A cada iteração, o valor atual do elemento é armazenado na variável $fruta e pode ser usado dentro do bloco de código. Essas são algumas das estruturas de repetição disponíveis em PHP. Cada uma delas pode ser utilizada de acordo com a necessidade do seu código e o tipo de iteração desejado.

## 4) VARIAVEIS COMPOSTAS:
Em PHP, existem várias formas de trabalhar com variáveis compostas, como arrays e objetos. Vou explicar como utilizar cada uma delas:
### ARRAYS:
Os arrays são utilizados para armazenar múltiplos valores em uma única variável. Existem dois tipos principais de arrays em PHP: arrays indexados e arrays associativos.

#### ARAYS INDEXADOS:
````php
$nomes = array("João", "Maria", "Pedro");
````
Nesse exemplo, temos um array indexado chamado $nomes que armazena os nomes "João", "Maria" e "Pedro". Os elementos do array são acessados através de seus índices numéricos, que começam em 0. Por exemplo, para acessar o valor "Maria", podemos usar $nomes[1].

#### ARAYS ASSOCIATIVOS:
````php
$idade = array("João" => 25, "Maria" => 30, "Pedro" => 40);
````
Nesse exemplo, temos um array associativo chamado $idade que associa nomes a idades. Cada elemento do array é composto por uma chave (nome) e um valor (idade). Podemos acessar os valores utilizando as chaves. Por exemplo, para obter a idade de "Maria", usamos $idade["Maria"].

### OBJETOS:
Os objetos são estruturas de dados mais complexas que permitem agrupar propriedades e métodos relacionados. Para trabalhar com objetos em PHP, é necessário criar uma classe.
````php
class Pessoa {
    public $nome;
    public $idade;
    
    public function saudacao() {
        echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.";
    }
}

$joao = new Pessoa();
$joao->nome = "João";
$joao->idade = 25;
$joao->saudacao();
````
Nesse exemplo, criamos uma classe chamada Pessoa que possui duas propriedades: $nome e $idade, e um método chamado saudacao() que imprime uma saudação com o nome e idade da pessoa. Em seguida, criamos um objeto $joao da classe Pessoa, definimos seus valores de propriedades e chamamos o método saudacao(). Essas são algumas das formas de trabalhar com variáveis compostas em PHP. Os arrays permitem armazenar múltiplos valores em uma única variável, enquanto os objetos são usados para criar estruturas mais complexas com propriedades e métodos relacionados. Você pode escolher a abordagem mais adequada para o seu código, dependendo das suas necessidades.

## 5) FUNÇÕES:
Em PHP, as funções são blocos de código que podem ser reutilizados em várias partes do programa. Elas são definidas usando a palavra-chave function seguida pelo nome da função, parênteses para os parâmetros (opcional) e um bloco de código delimitado por chaves {} que contém as instruções da função. Aqui está um exemplo de como criar e usar funções em PHP:
````php
// Definindo uma função simples que imprime uma saudação
function saudacao() {
    echo "Olá, seja bem-vindo(a)!";
}

// Chamando a função
saudacao(); // Output: Olá, seja bem-vindo(a)!

// Definindo uma função com parâmetros
function soma($a, $b) {
    $resultado = $a + $b;
    echo "A soma de $a e $b é igual a $resultado";
}

// Chamando a função com argumentos
soma(5, 3); // Output: A soma de 5 e 3 é igual a 8
````
Neste exemplo, temos duas funções: saudacao() e soma(). A função saudacao() não possui parâmetros e apenas imprime uma saudação na tela quando chamada. A função soma() recebe dois parâmetros $a e $b, calcula a soma e imprime o resultado. As funções podem ter parâmetros opcionais, retornar valores e realizar uma variedade de tarefas, dependendo das necessidades do seu código. Além disso, é possível criar funções dentro de classes (métodos) para encapsular a lógica relacionada a um objeto específico. As funções em PHP permitem modularizar o código, facilitando a reutilização, a organização e a manutenção do programa.

## 6) CLASS POO:
Class com todos os 4 pilares da programação orientada a objetos: encapsulamento, herança, polimorfismo e abstração:
````php
// Classe Animal (Abstração)
class Animal {
    protected $nome;
    
    // Construtor
    public function __construct($nome) {
        $this->nome = $nome;
    }
    
    // Método para emitir som (Polimorfismo)
    public function emitirSom() {
        echo "O animal emite um som.";
    }
}

// Classe Mamifero (Herança)
class Mamifero extends Animal {
    private $corPelo;
    
    // Construtor
    public function __construct($nome, $corPelo) {
        parent::__construct($nome);
        $this->corPelo = $corPelo;
    }
    
    // Método para amamentar
    public function amamentar() {
        echo "O mamífero está amamentando.";
    }
    
    // Método para emitir som (Polimorfismo)
    public function emitirSom() {
        echo "O mamífero emite um som.";
    }
}

// Classe Cachorro (Herança)
class Cachorro extends Mamifero {
    // Método para correr
    public function correr() {
        echo "O cachorro está correndo.";
    }
    
    // Método para emitir som (Polimorfismo)
    public function emitirSom() {
        echo "O cachorro late.";
    }
}

// Utilização das classes
$cachorro = new Cachorro("Rex", "Marrom");
$cachorro->emitirSom(); // Output: O cachorro late.
$cachorro->correr(); // Output: O cachorro está correndo.
````
Neste exemplo, temos a classe Animal, que representa uma abstração genérica de um animal, e a classe Mamifero, que herda os atributos e métodos da classe Animal e adiciona um atributo $corPelo e um método amamentar. Em seguida, temos a classe Cachorro, que herda os atributos e métodos da classe Mamifero e adiciona um método correr. Essas classes demonstram a herança em PHP. Além disso, as classes Mamifero e Cachorro têm um método emitirSom que é uma forma de polimorfismo, pois cada classe implementa sua própria versão desse método. Essa classe em PHP incorpora os pilares da programação orientada a objetos, mostrando o uso de herança, encapsulamento, polimorfismo e abstração. Esses conceitos são fundamentais para organizar e estruturar o código de forma eficiente, reutilizável e orientada a objetos.

## 7) INTEGRAÇÃO COM HTML:
No PHP, é possível integrar o código PHP diretamente em um documento HTML, permitindo a criação de páginas dinâmicas. Para isso, basta utilizar as tags especiais do PHP `<?php` e `?>` para delimitar o código PHP dentro do documento HTML.

Aqui está um exemplo de como integrar o PHP ao HTML:
```html
<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de PHP integrado ao HTML</title>
</head>
<body>
    <h1>Bem-vindo ao meu site</h1>

    <?php
    // Código PHP
    $nome = "João";
    echo "<p>Olá, $nome! Seja bem-vindo!</p>";
    ?>

    <p>Este é um parágrafo HTML.</p>

    <?php
    // Mais código PHP
    $idade = 25;
    echo "<p>Você tem $idade anos.</p>";
    ?>

</body>
</html>
```
No exemplo acima, utilizamos a tag `<?php` para iniciar o código PHP e a tag `?>` para encerrá-lo. Entre essas tags, podemos escrever qualquer código PHP que desejamos. No exemplo, atribuímos um valor à variável `$nome` e exibimos uma mensagem de boas-vindas com o valor da variável usando a função `echo`. Em seguida, escrevemos um parágrafo HTML normalmente, e depois, novamente dentro das tags PHP, atribuímos um valor à variável `$idade` e a exibimos em outro parágrafo HTML.

Ao abrir o arquivo no navegador, o código PHP será executado no servidor antes de enviar a resposta para o navegador. Assim, as partes do código PHP serão processadas e os resultados serão exibidos no documento HTML gerado.

Dessa forma, é possível criar páginas dinâmicas, onde o conteúdo pode variar de acordo com a lógica definida no código PHP.

**FORMULÁRIOS:**

Aqui está um exemplo de um formulário em HTML que envia os dados para um script PHP no servidor:
```html
<!DOCTYPE html>
<html>
<head>
  <title>Formulário</title>
  <style>
    .form-container {
      max-width: 400px;
      margin: 0 auto;
    }
    .form-group {
      margin-bottom: 10px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    .form-group input {
      width: 100%;
      padding: 5px;
    }
    .form-group button {
      padding: 5px 10px;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Formulário de Contato</h2>
    <form action="processar-formulario.php" method="POST">
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Mensagem:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit">Enviar</button>
      </div>
    </form>
  </div>
</body>
</html>
```
Neste exemplo, temos um formulário de contato similar ao exemplo anterior. A diferença é que o atributo `action` do elemento `<form>` foi definido como `"processar-formulario.php"`, que é o nome do arquivo PHP onde iremos processar os dados do formulário.

Agora, vamos criar o script PHP `processar-formulario.php` para receber os dados do formulário e realizar o processamento necessário. Crie um arquivo chamado `processar-formulario.php` com o seguinte conteúdo:

```php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Aqui você pode realizar as ações necessárias com os dados do formulário
  // Por exemplo, enviar um e-mail, salvar em um banco de dados, etc.

  // Exemplo simples: exibir os dados na página
  echo "<h2>Dados do Formulário</h2>";
  echo "<p><strong>Nome:</strong> " . $name . "</p>";
  echo "<p><strong>Email:</strong> " . $email . "</p>";
  echo "<p><strong>Mensagem:</strong> " . $message . "</p>";
}
?>
```
Neste script PHP, verificamos se o método de requisição é POST, o que indica que o formulário foi enviado. Em seguida, obtemos os valores dos campos do formulário usando a variável global `$_POST` e atribuímos esses valores a variáveis individuais.

Depois, você pode realizar as ações necessárias com os dados do formulário. Neste exemplo simples, estamos apenas exibindo os dados na página, mas você pode personalizar esse código para realizar ações como enviar um e-mail, salvar em um banco de dados, etc.

Lembre-se de salvar o arquivo `processar-formulario.php` no mesmo diretório que o arquivo HTML do formulário.

Ao enviar o formulário, os dados serão enviados para o script PHP `processar-formulario.php`, onde você pode processá-los conforme necessário.