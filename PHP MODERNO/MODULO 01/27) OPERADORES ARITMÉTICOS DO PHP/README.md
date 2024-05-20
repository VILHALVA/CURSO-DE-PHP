# OPERADORES ARITMÉTICOS DO PHP
## Operações Matemáticas no PHP:
No PHP, você pode realizar operações matemáticas básicas, como adição, subtração, multiplicação e divisão.

```php
$soma = 2 + 2;        // Soma
$subtracao = 5 - 3;    // Subtração
$multiplicacao = 4 * 3; // Multiplicação
$divisao = 8 / 2;      // Divisão

echo "Soma: $soma, Subtração: $subtracao, Multiplicação: $multiplicacao, Divisão: $divisao<br>";
```

## Quanto é "2" + "2" em PHP?
Em PHP, as strings que parecem números são convertidas automaticamente para números em operações aritméticas.

```php
$resultado = "2" + "2";
echo "O resultado de \"2\" + \"2\" em PHP é: $resultado<br>";
```

## Fazendo Testes com JavaScript:
Vamos comparar o comportamento do PHP com JavaScript, onde a concatenação ocorre:

```html
<script>
  var resultadoJS = "2" + "2";
  console.log("O resultado de \"2\" + \"2\" em JavaScript é: " + resultadoJS);
</script>
```

## Fazendo Testes com PHP:
Testando a concatenação em PHP:

```php
$concatenacao = "2" . "2";
echo "A concatenação de \"2\" . \"2\" em PHP é: $concatenacao<br>";
```

## Resposta para a Questão do Início:
Em PHP, "2" + "2" resulta em 4, pois as strings são automaticamente convertidas para números.

## Cuidado com Versões Antigas do PHP:
Em versões mais antigas do PHP, a concatenação era feita com o ponto (`.`). Certifique-se de estar usando uma versão recente.

## Operadores Aritméticos Básicos do PHP:
- `+`: Adição
- `-`: Subtração
- `*`: Multiplicação
- `/`: Divisão

## Operadores Aritméticos Adicionais:
- `%`: Módulo (resto da divisão inteira)
- `**`: Potência (exponenciação)

## Exemplos de Uso dos Operadores Aritméticos:
```php
$a = 7;
$b = 3;

$soma = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;

echo "Soma: $soma, Subtração: $subtracao, Multiplicação: $multiplicacao, Divisão: $divisao<br>";
```

## Operador de Resto da Divisão Inteira (Módulo):
```php
$numero = 10;
$resto = $numero % 3;
echo "O resto da divisão de $numero por 3 é: $resto<br>";
```

## Operador de Potência (Exponenciação):
```php
$base = 2;
$expoente = 3;
$potencia = $base ** $expoente;
echo "$base elevado à potência de $expoente é: $potencia<br>";
```

## Montando Expressões Aritméticas com PHP:
Você pode combinar diferentes operadores para formar expressões mais complexas.

```php
$resultado_final = (2 + 3) * 4 / 2;
echo "O resultado da expressão é: $resultado_final<br>";
```

Estes são alguns exemplos que abordam operações aritméticas básicas em PHP. Lembre-se de sempre considerar a coerção de tipos ao trabalhar com operações envolvendo strings e números.