# FUNÇÕES ARITMÉTICAS DO PHP
## 1. **Função `abs()`:**
A função `abs()` retorna o valor absoluto de um número.

```php
$numero = -5;
$resultado = abs($numero);
echo "O valor absoluto de $numero é: $resultado<br>";
```

## 2. **Função `base_convert()`:**
A função `base_convert()` converte um número entre bases numéricas.

```php
$numero_binario = '1010';
$numero_decimal = base_convert($numero_binario, 2, 10);
echo "O número binário $numero_binario em decimal é: $numero_decimal<br>";
```

## 3. **Funções de Arredondamento (`ceil()`, `floor()`, `round()`):**
- `ceil()`: Arredonda para cima.
- `floor()`: Arredonda para baixo.
- `round()`: Arredonda para o inteiro mais próximo.

```php
$numero_decimal = 7.8;

$arredonda_cima = ceil($numero_decimal);
$arredonda_baixo = floor($numero_decimal);
$arredonda_proximo = round($numero_decimal);

echo "Arredondando para cima: $arredonda_cima<br>";
echo "Arredondando para baixo: $arredonda_baixo<br>";
echo "Arredondando para o mais próximo: $arredonda_proximo<br>";
```

## 4. **Função `intdiv()`:**
A função `intdiv()` realiza a divisão inteira de dois números.

```php
$divisao_inteira = intdiv(10, 3);
echo "O resultado da divisão inteira é: $divisao_inteira<br>";
```

## 5. **Funções `min()` e `max()`:**
- `min()`: Retorna o menor valor de uma lista de argumentos.
- `max()`: Retorna o maior valor de uma lista de argumentos.

```php
$menor_valor = min(5, 3, 8, 2);
$maior_valor = max(5, 3, 8, 2);

echo "O menor valor é: $menor_valor<br>";
echo "O maior valor é: $maior_valor<br>";
```

## 6. **Obtendo o Valor de PI por Função e Constante:**
```php
$pi_funcao = pi();
$pi_constante = M_PI;

echo "O valor de PI obtido pela função é: $pi_funcao<br>";
echo "O valor de PI obtido pela constante é: $pi_constante<br>";
```

## 7. **Função `pow()`:**
A função `pow()` calcula a potência de um número.

```php
$base = 2;
$expoente = 3;
$resultado_potencia = pow($base, $expoente);

echo "2 elevado à potência de 3 é: $resultado_potencia<br>";
```

## 8. **Seno, Cosseno e Tangente com PHP:**
```php
$angulo = 45; // Ângulo em graus

$seno = sin(deg2rad($angulo));
$cosseno = cos(deg2rad($angulo));
$tangente = tan(deg2rad($angulo));

echo "Seno de $angulo graus: $seno<br>";
echo "Cosseno de $angulo graus: $cosseno<br>";
echo "Tangente de $angulo graus: $tangente<br>";
```

## 9. **Calculando Raiz Quadrada de Duas Formas:**
```php
$numero = 25;

$raiz_quadrada_funcao = sqrt($numero);
$raiz_quadrada_potencia = pow($numero, 0.5);

echo "A raiz quadrada de $numero usando a função é: $raiz_quadrada_funcao<br>";
echo "A raiz quadrada de $numero usando potência é: $raiz_quadrada_potencia<br>";
```

Essas são algumas das funções aritméticas úteis em PHP. Experimente cada exemplo para compreender melhor como elas funcionam.