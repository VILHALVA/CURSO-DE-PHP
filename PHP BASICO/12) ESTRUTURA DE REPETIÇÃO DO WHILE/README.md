# ESTRUTURA DE REPETIÇÃO DO-WHILE
A estrutura de repetição `do-while` é semelhante à estrutura `while`, mas com uma diferença importante: o código é executado pelo menos uma vez, mesmo que a condição seja falsa desde o início. Após a primeira execução, o código continuará a ser executado repetidamente enquanto a condição permanecer verdadeira. Vamos explorar os conceitos por trás da estrutura de repetição `do-while` em PHP, fornecer exemplos de código e explicar como usá-la eficazmente.

## SINTAXE DA ESTRUTURA DE REPETIÇÃO `DO-WHILE`
A sintaxe básica da estrutura de repetição `do-while` em PHP é a seguinte:

```php
do {
    // Código a ser executado
} while (condição);
```

- O bloco de código dentro do `do` é executado pelo menos uma vez.
- Após a primeira execução, o código continuará a ser executado repetidamente enquanto a condição for verdadeira.

## EXEMPLO DE ESTRUTURA DE REPETIÇÃO `DO-WHILE`
Vamos ver um exemplo prático de como usar a estrutura de repetição `do-while` em PHP para exibir os números de 1 a 5.

```php
$contador = 1;

do {
    echo "Número: $contador<br>";
    $contador++;
} while ($contador <= 5);
```

Neste exemplo, o código dentro do `do` é executado uma vez, independentemente da condição. Em seguida, a condição é verificada, e o código continuará a ser executado enquanto a condição for verdadeira.

## QUANDO USAR O `DO-WHILE`?
A estrutura de repetição `do-while` é útil quando você deseja que um bloco de código seja executado pelo menos uma vez, independentemente da condição. Por exemplo, você pode usá-la para solicitar entradas do usuário e garantir que pelo menos uma iteração ocorra, mesmo que o usuário não forneça uma entrada válida na primeira tentativa.

## CONCLUSÃO
A estrutura de repetição `do-while` é uma ferramenta útil quando você precisa que um bloco de código seja executado pelo menos uma vez e depois repetidamente enquanto uma condição for verdadeira. É especialmente útil em situações em que você deseja garantir que algum código seja executado antes de verificar a condição.

À medida que você aprofunda seus estudos em PHP, você pode usar a estrutura de repetição `do-while` em combinação com outras estruturas de controle para criar lógica de programação mais complexa em seus aplicativos. Praticar regularmente é a melhor maneira de aprimorar suas habilidades em programação em PHP.