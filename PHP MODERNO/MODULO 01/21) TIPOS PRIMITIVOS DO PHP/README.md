# TIPOS PRIMITIVOS DO PHP
O PHP possui vários tipos primitivos que são usados para representar diferentes tipos de dados. Aqui estão os tipos primitivos mais comuns em PHP:

1. **Inteiro (Integer):**
   - Representa números inteiros, positivos ou negativos, sem parte decimal.
   ```php
   $idade = 25;
   ```

2. **Ponto Flutuante (Float):**
   - Representa números decimais.
   ```php
   $preco = 10.99;
   ```

3. **String:**
   - Representa sequências de caracteres.
   ```php
   $nome = "Alice";
   ```

4. **Booleano:**
   - Representa valores verdadeiro (`true`) ou falso (`false`).
   ```php
   $ativo = true;
   ```

5. **Array:**
   - Representa uma coleção ordenada de elementos.
   ```php
   $cores = array("vermelho", "azul", "verde");
   ```

6. **Objeto:**
   - Representa instâncias de classes definidas pelo usuário.
   ```php
   class Pessoa {
       public $nome;
       public $idade;
   }

   $pessoa = new Pessoa();
   ```

7. **Nulo (Null):**
   - Representa a ausência de valor.
   ```php
   $variavelNula = null;
   ```

8. **Recursos (Resource):**
   - Representa um recurso externo, como uma conexão de banco de dados.
   ```php
   $conexao = mysqli_connect("localhost", "usuario", "senha", "banco");
   ```

9. **Callable:**
   - Representa algo que pode ser chamado, como uma função ou um método de um objeto.
   ```php
   $funcao = "minhaFuncao";
   $funcao();  // Chama a função
   ```

Esses são os tipos primitivos básicos em PHP. Vale ressaltar que o PHP é uma linguagem de tipagem dinâmica, o que significa que o tipo de uma variável é determinado dinamicamente em tempo de execução. Isso proporciona flexibilidade, mas requer atenção ao lidar com diferentes tipos de dados.