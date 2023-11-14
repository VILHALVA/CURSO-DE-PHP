# FORMULÁRIOS RETROALIMENTADOS
Onde os dados inseridos em um formulário são processados e o resultado é exibido na mesma página. Vamos criar um exemplo prático passo a passo:

1. **Criando os arquivos do novo exercício:**

   Crie dois arquivos: `formulario.php` e `processar_formulario.php`.

2. **PHP Short Tags:**

   Utilizaremos a tag curta do PHP (`<?php`) para escrever nosso código PHP.

3. **Criando o formulário para ler os números (`formulario.php`):**

   ```php
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Formulário Retroalimentado</title>
   </head>
   <body>

   <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       <label for="numero1">Digite o primeiro número:</label>
       <input type="text" name="numero1" id="numero1" value="<?php echo isset($_POST['numero1']) ? $_POST['numero1'] : ''; ?>" required>

       <label for="numero2">Digite o segundo número:</label>
       <input type="text" name="numero2" id="numero2" value="<?php echo isset($_POST['numero2']) ? $_POST['numero2'] : ''; ?>" required>

       <button type="submit">Calcular Soma</button>
   </form>

   </body>
   </html>
   ```

   Este formulário contém dois campos de entrada para os números que o usuário deseja somar. Estamos usando `<?php echo isset($_POST['...']) ? $_POST['...'] : ''; ?>` para manter os dados preenchidos no formulário mesmo após o envio.

4. **Capturando os dados do formulário (`processar_formulario.php`):**

   ```php
   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Captura os dados do formulário
       $numero1 = $_POST["numero1"];
       $numero2 = $_POST["numero2"];

       // Calcula a soma
       $soma = $numero1 + $numero2;
   }
   ?>
   ```

5. **Criando a área para receber o resultado (`formulario.php`):**

   Adicione a seguinte parte ao arquivo `formulario.php`:

   ```php
   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Exibe a área para receber o resultado
       echo "<div>";
       echo "<h2>Resultado:</h2>";
       echo "<p>A soma de $numero1 e $numero2 é: $soma</p>";
       echo "</div>";
   }
   ?>
   ```

6. **Verificando o PHP_SELF funcionando (`formulario.php`):**

   Adicione esta linha ao final do arquivo `formulario.php`:

   ```php
   <p>(Apenas para verificar que PHP_SELF está funcionando) O arquivo atual é: <?php echo $_SERVER['PHP_SELF']; ?></p>
   ```

   Isso exibirá o nome do arquivo PHP que está sendo executado.

7. **Formulários funcionam no OnlinePHP?**

   Sim, formulários funcionam no ambiente online, desde que o provedor de hospedagem permita a execução de scripts PHP.

8. **Fazendo tudo sem formulário:**

   Se você deseja fazer tudo sem um formulário, pode criar um script PHP que aceita parâmetros via URL (método GET). No entanto, isso não é a prática recomendada para interações sensíveis, pois os parâmetros podem ser visíveis na barra de endereços.

Esse exemplo é bastante básico e serve para ilustrar como criar um formulário retroalimentado em PHP, mantendo os dados preenchidos após o envio e exibindo o resultado na mesma página.