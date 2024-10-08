# FUNÇÕES EM PHP (PARTE 2)

Na Parte 2 deste guia sobre funções em PHP, continuaremos a explorar esse conceito fundamental da programação. Dessa vez, vamos aprofundar um pouco mais, abordando parâmetros, valores de retorno, escopo de variáveis e fornecendo exemplos práticos para ilustrar esses conceitos.

## PARÂMETROS EM FUNÇÕES
Os parâmetros são valores que você pode passar para uma função para que ela os utilize em sua lógica. Em PHP, você pode definir funções com ou sem parâmetros. Aqui está a sintaxe para definir uma função com parâmetros:

```php
function nome_da_funcao($parametro1, $parametro2) {
    // Código da função que utiliza $parametro1 e $parametro2
}
```

Quando você chama a função, você passa valores que correspondem aos parâmetros:

```php
nome_da_funcao($valor1, $valor2);
```

## EXEMPLO DE FUNÇÃO COM PARÂMETROS
Vamos criar uma função que calcula a soma de dois números passados como parâmetros e retorna o resultado:

```php
function soma($a, $b) {
    $resultado = $a + $b;
    return $resultado;
}
```

Você pode chamar a função e passar valores para os parâmetros:

```php
$total = soma(5, 3); // $total agora é igual a 8
```

## VALORES DE RETORNO EM FUNÇÕES
As funções em PHP podem retornar valores usando a palavra-chave `return`. O valor retornado pode ser usado em outros lugares no código.

```php
function obter_mensagem() {
    return "Olá, Mundo!";
}
```

Para usar o valor retornado, você atribui a chamada da função a uma variável:

```php
$mensagem = obter_mensagem(); // $mensagem agora contém "Olá, Mundo!"
```

## ESCOPO DE VARIÁVEIS
O escopo de uma variável refere-se à parte do código onde a variável é acessível. Em PHP, existem variáveis locais (com escopo dentro da função) e variáveis globais (com escopo em todo o script).

Variáveis locais são definidas dentro de funções e não podem ser acessadas fora delas. Variáveis globais são definidas fora de funções e podem ser acessadas em todo o script.

## EXEMPLO DE ESCOPO DE VARIÁVEIS
```php
$variavel_global = "Isso é global";

function exemplo_escopo() {
    $variavel_local = "Isso é local";
    echo $variavel_global; // Acesso a uma variável global é possível
    echo $variavel_local;  // Acesso à variável local é possível
}

exemplo_escopo();

echo $variavel_global; // Acesso a uma variável global é possível
echo $variavel_local;  // Isso resultará em um erro, pois $variavel_local é uma variável local
```

## CONCLUSÃO
Compreender parâmetros, valores de retorno e o escopo de variáveis é essencial ao trabalhar com funções em PHP. Funções são fundamentais para organizar e reutilizar o código, tornando-o mais legível e manutenível. À medida que você avança em seus estudos de PHP, você aprenderá a criar funções mais complexas e a usá-las em combinação com outras estruturas de controle e condicionais para criar aplicativos mais poderosos. Praticar regularmente é a melhor maneira de aprimorar suas habilidades em programação em PHP.