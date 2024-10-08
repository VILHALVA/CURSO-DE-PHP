# VARIÁVEIS E CONSTANTES EM PHP
Em PHP, você pode trabalhar com variáveis e constantes para armazenar e manipular dados. Aqui estão as diferenças entre variáveis e constantes em PHP:

## VARIÁVEIS:
1. **Declaração de Variáveis:**
   - As variáveis em PHP são declaradas com o prefixo `$`, seguido pelo nome da variável. Por exemplo: `$nome`, `$idade`.

   ```php
   $nome = "João";
   $idade = 25;
   ```

2. **Tipos de Dados Dinâmicos:**
   - PHP é uma linguagem de tipagem dinâmica, o que significa que você não precisa declarar explicitamente o tipo de dado que uma variável vai armazenar. O tipo é atribuído dinamicamente.

   ```php
   $variavel = "Isso é uma string";
   $variavel = 42; // Agora é um número inteiro
   ```

3. **Escopo de Variáveis:**
   - O escopo de uma variável determina onde ela pode ser acessada. Variáveis podem ser locais (dentro de uma função ou bloco) ou globais (fora de funções).

## CONSTANTES:
1. **Declaração de Constantes:**
   - As constantes em PHP são definidas usando a função `define()`. Ao contrário das variáveis, as constantes são globais e não podem ser redefinidas após a definição.

   ```php
   define("PI", 3.14);
   define("NOME", "Maria");
   ```

2. **Sem Uso de `$`:**
   - Diferentemente das variáveis, as constantes não usam o prefixo `$` ao serem referenciadas.

   ```php
   echo PI; // Exibe o valor da constante PI
   ```

3. **Escopo Global:**
   - As constantes são globais por padrão e podem ser usadas em qualquer lugar do script.

4. **Convenção de Nomenclatura:**
   - É uma prática comum nomear constantes em letras maiúsculas e separar palavras com sublinhado.

## EXEMPLO DE USO:
```php
// Variáveis
$nome = "Ana";
$idade = 30;

// Constantes
define("PI", 3.14);
define("SITE_NOME", "Meu Site");

// Exemplos de uso
echo "Bem-vindo(a), $nome!"; // Usando variável
echo "O valor de PI é: " . PI; // Usando constante
```

Lembre-se de que variáveis são mutáveis, enquanto constantes são imutáveis durante a execução do script PHP. Escolha entre variáveis e constantes com base na necessidade de reatribuição ou imutabilidade do valor.