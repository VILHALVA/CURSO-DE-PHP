# OPERADORES RELACIONAIS EM PHP

<img src="./IMAGENS/OPERADORES RELACIONAIS.png" align="center" width="400"> <br>
<img src="./IMAGENS/OPERADORES LOGICOS.png" align="center" width="400"> <br>
<img src="./IMAGENS/OPERADOR UNARIO.png" align="center" width="400"> <br>

Os operadores relacionais, também conhecidos como operadores de comparação, são fundamentais em PHP, permitindo comparar valores e tomar decisões com base nas relações entre eles. Neste artigo, exploraremos os conceitos por trás dos operadores relacionais em PHP, forneceremos exemplos de código e explicaremos como usá-los de maneira eficaz.

## O QUE SÃO OPERADORES RELACIONAIS?
Os operadores relacionais em PHP são usados para comparar dois valores e determinar a relação entre eles. Eles retornam um valor booleano, que pode ser verdadeiro (true) ou falso (false), com base no resultado da comparação. Os operadores relacionais mais comuns em PHP incluem:

- **Igual a (`==`):** Verifica se dois valores são iguais.
- **Diferente de (`!=` ou `<>`):** Verifica se dois valores são diferentes.
- **Maior que (`>`):** Verifica se o valor à esquerda é maior que o valor à direita.
- **Menor que (`<`):** Verifica se o valor à esquerda é menor que o valor à direita.
- **Maior ou igual a (`>=`):** Verifica se o valor à esquerda é maior ou igual ao valor à direita.
- **Menor ou igual a (`<=`):** Verifica se o valor à esquerda é menor ou igual ao valor à direita.

## EXEMPLOS DE USO DE OPERADORES RELACIONAIS:
Aqui estão exemplos de como usar operadores relacionais em PHP:

### IGUAL A (`==`):
```php
$numero1 = 10;
$numero2 = 5;

if ($numero1 == $numero2) {
    echo "Os números são iguais.";
} else {
    echo "Os números são diferentes.";
}
```

### MAIOR QUE (`>`):
```php
$idade = 25;

if ($idade > 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
```

### DIFERENTE DE (`!=`):
```php
$valor = 0;

if ($valor != 0) {
    echo "O valor é diferente de zero.";
} else {
    echo "O valor é igual a zero.";
}
```

### MENOR OU IGUAL A (`<=`):
```php
$nota = 8;

if ($nota <= 7) {
    echo "Você foi reprovado.";
} else {
    echo "Você foi aprovado.";
}
```

## CONCLUSÃO
Os operadores relacionais desempenham um papel fundamental na programação em PHP, permitindo que você tome decisões com base em comparações de valores. Compreender como esses operadores funcionam e como aplicá-los é essencial para criar scripts que respondam de maneira apropriada a diferentes cenários.

Lembre-se de que os operadores relacionais retornam valores booleanos (true ou false), que podem ser usados em estruturas condicionais, como `if`, `else`, `elseif`, e também em loops para controlar o fluxo de execução do seu programa. À medida que você avança em seus estudos de PHP, você pode usar esses operadores em combinação com estruturas de controle mais complexas para criar lógica de programação avançada em seus aplicativos. Praticar regularmente é a melhor maneira de aprimorar suas habilidades em programação em PHP.