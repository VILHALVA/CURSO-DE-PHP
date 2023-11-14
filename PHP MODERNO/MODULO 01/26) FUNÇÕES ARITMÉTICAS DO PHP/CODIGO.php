<?php
// Exemplo de Funções Aritméticas em PHP

// Função abs()
$numero = -5;
$resultado_abs = abs($numero);
echo "O valor absoluto de $numero é: $resultado_abs<br>";

// Função base_convert()
$numero_binario = '1010';
$numero_decimal = base_convert($numero_binario, 2, 10);
echo "O número binário $numero_binario em decimal é: $numero_decimal<br>";

// Funções de Arredondamento (ceil(), floor(), round())
$numero_decimal = 7.8;

$arredonda_cima = ceil($numero_decimal);
$arredonda_baixo = floor($numero_decimal);
$arredonda_proximo = round($numero_decimal);

echo "Arredondando para cima: $arredonda_cima<br>";
echo "Arredondando para baixo: $arredonda_baixo<br>";
echo "Arredondando para o mais próximo: $arredonda_proximo<br>";

// Função intdiv()
$divisao_inteira = intdiv(10, 3);
echo "O resultado da divisão inteira é: $divisao_inteira<br>";

// Funções min() e max()
$menor_valor = min(5, 3, 8, 2);
$maior_valor = max(5, 3, 8, 2);

echo "O menor valor é: $menor_valor<br>";
echo "O maior valor é: $maior_valor<br>";

// Obtendo o Valor de PI por Função e Constante
$pi_funcao = pi();
$pi_constante = M_PI;

echo "O valor de PI obtido pela função é: $pi_funcao<br>";
echo "O valor de PI obtido pela constante é: $pi_constante<br>";

// Função pow()
$base = 2;
$expoente = 3;
$resultado_potencia = pow($base, $expoente);

echo "2 elevado à potência de 3 é: $resultado_potencia<br>";

// Seno, Cosseno e Tangente com PHP
$angulo = 45; // Ângulo em graus

$seno = sin(deg2rad($angulo));
$cosseno = cos(deg2rad($angulo));
$tangente = tan(deg2rad($angulo));

echo "Seno de $angulo graus: $seno<br>";
echo "Cosseno de $angulo graus: $cosseno<br>";
echo "Tangente de $angulo graus: $tangente<br>";

// Calculando Raiz Quadrada de Duas Formas
$numero = 25;

$raiz_quadrada_funcao = sqrt($numero);
$raiz_quadrada_potencia = pow($numero, 0.5);

echo "A raiz quadrada de $numero usando a função é: $raiz_quadrada_funcao<br>";
echo "A raiz quadrada de $numero usando potência é: $raiz_quadrada_potencia<br>";
?>
