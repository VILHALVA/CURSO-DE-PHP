<?php
// Strings em PHP

// Tipos de strings do PHP
$string1 = 'Isso é uma string usando aspas simples.';
$string2 = "Isso é uma string usando aspas duplas.";

// Strings double quoted em PHP
$nome = "Maria";
$mensagem = "Olá, $nome! Bem-vindo(a) ao PHP.";

// Concatenação de strings
$fruta1 = "maçã";
$fruta2 = "banana";
$frutas = $fruta1 . " e " . $fruta2;

// Interpolação de conteúdo com aspas duplas
$idade = 30;
$info = "A idade é $idade.";

// Um exemplo prático com strings
$titulo = "Curso de PHP";
$resumo = "Este é um curso prático que aborda conceitos de PHP.";

// Colocando em prática no OnlinePHP
echo "Título: $titulo<br>";
echo "Resumo: $resumo<br>";

// Strings com constantes em PHP
define("VERSÃO", "7.4");
$mensagemVersao = "Você está usando PHP versão " . VERSÃO;

// Testando tudo no OnlinePHP
echo $mensagemVersao . "<br>";

// Resultados de funções funcionam dentro de strings?
$numero = 42;
$mensagemFuncao = "O dobro de $numero é " . ($numero * 2);

// Misturando aspas duplas e simples na mesma string
$fruta = 'maçã';
$mensagemMista = "Uma $fruta e uma 'laranja'.";

// Não recebi erro nenhum, meu programa está sempre certo?
$variavelNula = null;
$mensagemErro = "Este é um valor nulo: $variavelNula";

// Usando sequências de escape dentro de strings
$textoComAspas = "Ela disse: \"Olá!\"";
$novaLinha = "Linha 1\nLinha 2";

// Exemplos de sequência de escape em PHP
echo $textoComAspas . "<br>";
echo $novaLinha . "<br>";

// Strings Heredoc
$mensagemHeredoc = <<<MENSAGEM
Este é um exemplo de Heredoc.
Pode ser utilizado para strings mais longas
ou quando misturamos HTML e PHP.
MENSAGEM;

// Strings Nowdoc
$mensagemNowdoc = <<<'MENSAGEM'
Este é um exemplo de Nowdoc.
Funciona de maneira similar ao Heredoc,
mas não interpreta variáveis ou caracteres de escape.
MENSAGEM;

echo $mensagemHeredoc . "<br>";
echo $mensagemNowdoc . "<br>";
?>
