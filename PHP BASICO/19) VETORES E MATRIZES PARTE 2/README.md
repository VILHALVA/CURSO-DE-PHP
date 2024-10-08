# VETORES E MATRIZES EM PHP (PARTE 2)

Na Parte 2 deste guia sobre vetores e matrizes em PHP, exploraremos funções avançadas para manipulação de vetores, iteração em matrizes multidimensionais e exemplos práticos para ilustrar esses conceitos.

## FUNÇÕES AVANÇADAS PARA MANIPULAÇÃO DE VETORES
Vamos dar uma olhada em algumas funções avançadas para trabalhar com vetores em PHP.

### `array_merge()`
A função `array_merge()` mescla dois ou mais vetores em um único vetor. Ela combina os valores dos vetores em uma ordem específica.

```php
$vetor1 = [1, 2, 3];
$vetor2 = [4, 5, 6];
$vetor_combinado = array_merge($vetor1, $vetor2);
```

### `array_slice()`
A função `array_slice()` extrai uma parte de um vetor e a retorna em um novo vetor. Você pode especificar o início e o comprimento da parte que deseja extrair.

```php
$frutas = ["maçã", "banana", "laranja", "uva"];
$parte = array_slice($frutas, 1, 2); // Extrai a partir do segundo elemento e pega 2 elementos
```

### `array_unique()`
A função `array_unique()` remove valores duplicados de um vetor, retornando um novo vetor com valores exclusivos.

```php
$nums = [1, 2, 2, 3, 3, 4];
$valores_unicos = array_unique($nums); // Isso resultará em [1, 2, 3, 4]
```

## MATRIZES MULTIDIMENSIONAIS
Matrizes multidimensionais são matrizes que contêm outras matrizes como elementos. Elas são frequentemente usadas para representar estruturas de dados complexas, como tabelas ou planilhas.

```php
$planilha = [
    ["Nome", "Idade", "Cidade"],
    ["João", 30, "São Paulo"],
    ["Maria", 28, "Rio de Janeiro"],
    ["Carlos", 35, "Belo Horizonte"]
];
```

Você pode acessar elementos de matrizes multidimensionais usando múltiplos índices:

```php
echo $planilha[1][0]; // Isso imprimirá "João"
echo $planilha[2][2]; // Isso imprimirá "Belo Horizonte"
```

## ITERAÇÃO EM MATRIZES MULTIDIMENSIONAIS
Para percorrer matrizes multidimensionais, você pode usar loops aninhados. Aqui está um exemplo que percorre a planilha e exibe os dados:

```php
foreach ($planilha as $linha) {
    foreach ($linha as $valor) {
        echo $valor . " ";
    }
    echo "<br>";
}
```

## CONCLUSÃO
As funções avançadas de manipulação de vetores em PHP são úteis para realizar tarefas específicas, como mesclar vetores, extrair partes de vetores e remover valores duplicados. Além disso, matrizes multidimensionais permitem que você represente estruturas de dados complexas de forma organizada.

À medida que você avança em seus estudos de PHP, você aprenderá a usar esses conceitos para manipular e processar dados de forma mais complexa. A prática constante é fundamental para se tornar um programador eficiente na manipulação de vetores e matrizes em PHP.