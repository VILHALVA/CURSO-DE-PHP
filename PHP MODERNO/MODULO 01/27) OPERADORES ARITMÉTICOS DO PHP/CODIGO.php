<?php
// Exemplo de Operadores Aritméticos em PHP

// Operações Matemáticas Básicas
$soma = 2 + 2;
$subtracao = 5 - 3;
$multiplicacao = 4 * 3;
$divisao = 8 / 2;

echo "Soma: $soma, Subtração: $subtracao, Multiplicação: $multiplicacao, Divisão: $divisao<br>";

// Quanto é "2" + "2" em PHP?
$resultado_concatenacao = "2" + "2";
echo "O resultado de \"2\" + \"2\" em PHP é: $resultado_concatenacao<br>";

// Fazendo Testes com JavaScript
// Vamos comparar o comportamento do PHP com JavaScript
// Em JavaScript, a concatenação ocorre
?>
<script>
  var resultadoJS = "2" + "2";
  console.log("O resultado de \"2\" + \"2\" em JavaScript é: " + resultadoJS);
</script>
<?php

// Fazendo Testes com PHP
// Testando a concatenação em PHP
$concatenacao_php = "2" . "2";
echo "A concatenação de \"2\" . \"2\" em PHP é: $concatenacao_php<br>";

// Resposta para a Questão do Início
// Em PHP, "2" + "2" resulta em 4, pois as strings são automaticamente convertidas para números

// Cuidado com Versões Antigas do PHP
// Em versões mais antigas do PHP, a concatenação era feita com o ponto (.)
// Certifique-se de estar usando uma versão recente

// Operadores Aritméticos Básicos do PHP
$a = 7;
$b = 3;

$soma_exemplo = $a + $b;
$subtracao_exemplo = $a - $b;
$multiplicacao_exemplo = $a * $b;
$divisao_exemplo = $a / $b;

echo "Exemplo: Soma: $soma_exemplo, Subtração: $subtracao_exemplo, Multiplicação: $multiplicacao_exemplo, Divisão: $divisao_exemplo<br>";

// Operadores Aritméticos Adicionais
// Módulo (resto da divisão inteira)
$numero_modulo = 10;
$resto_divisao = $numero_modulo % 3;
echo "O resto da divisão de $numero_modulo por 3 é: $resto_divisao<br>";

// Potência (exponenciação)
$base_potencia = 2;
$expoente_potencia = 3;
$potencia_resultado = $base_potencia ** $expoente_potencia;
echo "$base_potencia elevado à potência de $expoente_potencia é: $potencia_resultado<br>";

// Montando Expressões Aritméticas com PHP
$resultado_final_expressao = (2 + 3) * 4 / 2;
echo "O resultado da expressão é: $resultado_final_expressao<br>";
?>
