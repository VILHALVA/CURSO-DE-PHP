# ESTRUTURA DE REPETIÇÃO FOR
A estrutura de repetição `for` é uma das ferramentas mais poderosas para criar loops em PHP. Essa estrutura permite que você execute um bloco de código repetidamente por um número específico de vezes ou com base em alguma condição. Vamos explorar os conceitos por trás da estrutura de repetição `for` em PHP, fornecer exemplos de código e explicar como usá-la de maneira eficaz.

## Sintaxe da Estrutura de Repetição `for`

A sintaxe básica da estrutura de repetição `for` em PHP é a seguinte:

```php
for (inicialização; condição; incremento) {
    // Código a ser executado repetidamente
}
```

- `inicialização` é onde você inicializa uma variável de controle.
- `condição` é a expressão que é avaliada a cada iteração para determinar se o loop deve continuar.
- `incremento` é usado para atualizar a variável de controle em cada iteração.

## Exemplo de Estrutura de Repetição `for`

Vamos ver um exemplo prático de como usar a estrutura de repetição `for` em PHP para exibir os números de 1 a 5.

```php
for ($contador = 1; $contador <= 5; $contador++) {
    echo "Número: $contador<br>";
}
```

Neste exemplo, o loop `for` é executado enquanto a variável `$contador` for menor ou igual a 5. O `$contador` é inicializado em 1 e incrementado em cada iteração. O código dentro do loop é executado repetidamente até que a condição seja falsa.

## Usos Comuns da Estrutura de Repetição `for`

A estrutura de repetição `for` é especialmente útil quando você sabe antecipadamente quantas vezes deseja que o loop seja executado, com base em um número fixo de iterações. Ela é frequentemente usada para:

- Percorrer arrays ou listas.
- Realizar cálculos em uma série de valores.
- Executar um bloco de código um número específico de vezes.

## Conclusão

A estrutura de repetição `for` é uma ferramenta valiosa para controlar loops em PHP. Ela é especialmente útil quando você precisa de um controle preciso sobre o número de iterações. À medida que você avança em seus estudos de PHP, você pode usar a estrutura de repetição `for` em combinação com outras estruturas de controle e condicionais para criar lógica de programação mais complexa em seus aplicativos. Praticar regularmente é a melhor maneira de aprimorar suas habilidades em programação em PHP.