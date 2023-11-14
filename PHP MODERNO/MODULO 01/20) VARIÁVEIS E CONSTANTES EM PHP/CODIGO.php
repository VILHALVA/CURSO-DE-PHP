<?php
// Exemplo de código PHP com variáveis, constantes e comentários

// Definindo constantes
define("PI", 3.14);
define("AUTOR", "João");

// Variáveis para as dimensões do retângulo
$comprimento = 10;
$largura = 5;

// Calculando a área do retângulo
$area = $comprimento * $largura;

// Exibindo os resultados
echo "Autor: " . AUTOR . "<br>";
echo "Comprimento do retângulo: $comprimento<br>";
echo "Largura do retângulo: $largura<br>";

// Utilizando a constante PI para calcular a circunferência
$circunferencia = 2 * PI * $comprimento;
echo "Circunferência do círculo com raio igual ao comprimento do retângulo: $circunferencia<br>";

// Exibindo a área do retângulo
echo "Área do retângulo: $area<br>";

// Usando uma estrutura condicional para verificar se a área é maior que 50
if ($area > 50) {
    echo "A área do retângulo é maior que 50.<br>";
} else {
    echo "A área do retângulo não é maior que 50.<br>";
}

// Fim do exemplo
?>
