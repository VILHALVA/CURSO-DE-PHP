<?php
// Exemplo de código PHP com diferentes tipos de dados

// Tipos Primitivos
$idade = 25;                  // Inteiro
$preco = 10.99;               // Ponto Flutuante
$nome = "Alice";              // String
$ativo = true;                 // Booleano

// Array
$cores = array("vermelho", "azul", "verde");

// Objeto
class Pessoa {
    public $nome;
    public $idade;
}

$pessoa = new Pessoa();
$pessoa->nome = "Carlos";
$pessoa->idade = 30;

// Nulo
$variavelNula = null;

// Estruturas de Controle
if ($idade >= 18) {
    echo "Você é maior de idade.<br>";
} else {
    echo "Você é menor de idade.<br>";
}

foreach ($cores as $cor) {
    echo "Cor: $cor<br>";
}

// Função com retorno
function calcularSoma($a, $b) {
    return $a + $b;
}

$resultado = calcularSoma(5, 3);
echo "A soma de 5 e 3 é: $resultado<br>";

// Fim do exemplo
?>
