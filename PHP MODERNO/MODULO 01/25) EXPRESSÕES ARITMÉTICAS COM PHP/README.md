# EXPRESSÕES ARITMÉTICAS COM PHP
Em PHP, você pode realizar várias operações aritméticas para manipular números. Aqui estão algumas das operações aritméticas básicas e como você pode usá-las em PHP:

## Adição:
```php
$numero1 = 10;
$numero2 = 5;

$soma = $numero1 + $numero2;
echo "A soma é: $soma";  // Saída: A soma é: 15
```

## Subtração:
```php
$numero1 = 10;
$numero2 = 5;

$subtracao = $numero1 - $numero2;
echo "A subtração é: $subtracao";  // Saída: A subtração é: 5
```

## Multiplicação:
```php
$numero1 = 10;
$numero2 = 5;

$multiplicacao = $numero1 * $numero2;
echo "A multiplicação é: $multiplicacao";  // Saída: A multiplicação é: 50
```

## Divisão:
```php
$numero1 = 10;
$numero2 = 5;

$divisao = $numero1 / $numero2;
echo "A divisão é: $divisao";  // Saída: A divisão é: 2
```

## Módulo (Resto da divisão):
```php
$numero1 = 10;
$numero2 = 3;

$resto = $numero1 % $numero2;
echo "O resto da divisão é: $resto";  // Saída: O resto da divisão é: 1
```

## Incremento:
```php
$numero = 5;

$numero++;  // Incremento de 1
echo "O novo valor é: $numero";  // Saída: O novo valor é: 6
```

## Decremento:
```php
$numero = 5;

$numero--;  // Decremento de 1
echo "O novo valor é: $numero";  // Saída: O novo valor é: 4
```

Estas são operações aritméticas básicas. Lembre-se de que a precedência dos operadores segue as regras usuais da matemática. Se necessário, você pode usar parênteses para controlar a ordem de execução das operações. Por exemplo:

```php
$resultado = (2 + 3) * 4;  // Resultado é 20, não 14
```

Essas operações são fundamentais ao lidar com dados numéricos em PHP. Certifique-se de compreender bem esses conceitos ao realizar cálculos em seus scripts.