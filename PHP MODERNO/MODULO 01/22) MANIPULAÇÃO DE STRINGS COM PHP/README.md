# MANIPULAÇÃO DE STRINGS COM PHP
## 1. **Tipos de Strings do PHP:**
Em PHP, você pode usar tanto aspas simples quanto aspas duplas para definir strings.

```php
$string1 = 'Isso é uma string usando aspas simples.';
$string2 = "Isso é uma string usando aspas duplas.";
```

## 2. **Strings Double Quoted em PHP:**
Strings double-quoted permitem interpolação de variáveis.

```php
$nome = "Maria";
$mensagem = "Olá, $nome! Bem-vindo(a) ao PHP.";
```

## 3. **Concatenação de Strings:**
Você pode unir strings usando o operador `.`.

```php
$fruta1 = "maçã";
$fruta2 = "banana";
$frutas = $fruta1 . " e " . $fruta2;
```

## 4. **Interpolação de Conteúdo com Aspas Duplas:**
Dentro de strings double-quoted, variáveis são interpolar.

```php
$idade = 30;
$info = "A idade é $idade.";
```

## 5. **Exemplo Prático com Strings:**
Um exemplo prático utilizando strings.

```php
$titulo = "Curso de PHP";
$resumo = "Este é um curso prático que aborda conceitos de PHP.";
```

## 6. **Strings com Constantes em PHP:**
Constantes podem ser utilizadas dentro de strings.

```php
define("VERSÃO", "7.4");
$mensagemVersao = "Você está usando PHP versão " . VERSÃO;
```

## 7. **Resultados de Funções Dentro de Strings:**
O resultado de uma expressão ou função pode ser incluído em uma string.

```php
$numero = 42;
$mensagemFuncao = "O dobro de $numero é " . ($numero * 2);
```

## 8. **Misturando Aspas Duplas e Simples na Mesma String:**
Você pode misturar aspas duplas e simples em uma string.

```php
$fruta = 'maçã';
$mensagemMista = "Uma $fruta e uma 'laranja'.";
```

## 9. **Usando Sequências de Escape Dentro de Strings:**
Sequências de escape são usadas para representar caracteres especiais.

```php
$textoComAspas = "Ela disse: \"Olá!\"";
$novaLinha = "Linha 1\nLinha 2";
```

## 10. **Exemplos de Sequência de Escape em PHP:**
Alguns exemplos comuns de sequências de escape.

```php
echo $textoComAspas . "<br>";
echo $novaLinha . "<br>";
```

## 11. **Strings Heredoc:**
Heredoc permite criar strings de múltiplas linhas sem a necessidade de escapar caracteres.

```php
$mensagemHeredoc = <<<MENSAGEM
Este é um exemplo de Heredoc.
Pode ser utilizado para strings mais longas
ou quando misturamos HTML e PHP.
MENSAGEM;
```

## 12. **Strings Nowdoc:**
Nowdoc é semelhante ao Heredoc, mas não interpreta variáveis ou caracteres de escape.

```php
$mensagemNowdoc = <<<'MENSAGEM'
Este é um exemplo de Nowdoc.
Funciona de maneira similar ao Heredoc,
mas não interpreta variáveis ou caracteres de escape.
MENSAGEM;
```

Esses conceitos são fundamentais para manipulação de strings em PHP. Experimente cada exemplo em um ambiente PHP para entender melhor como eles funcionam.