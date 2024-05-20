# OBTENDO DADOS DE FORMULÁRIOS COM PHP
Ao trabalhar com formulários em PHP, você precisa ser capaz de obter e processar os dados enviados pelo usuário. Vou fornecer um exemplo básico de como fazer isso. Suponhamos que você tenha um formulário HTML simples como este:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
</head>
<body>
    <form action="processa_formulario.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
```

Agora, crie um arquivo PHP chamado `processa_formulario.php` para processar os dados do formulário:

```php
<?php
// Verifica se os dados foram enviados pelo método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Realiza o processamento dos dados (por exemplo, salvar no banco de dados)
    
    // Exibe os dados processados
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
} else {
    // Se não foi enviado via POST, redireciona para a página do formulário
    header("Location: formulario.php");
    exit();
}
?>
```

Aqui está uma explicação do código PHP:

- Verificamos se o formulário foi enviado usando o método POST (`$_SERVER["REQUEST_METHOD"] == "POST"`).
- Se sim, obtemos os valores do formulário usando `$_POST["nome"]` e `$_POST["email"]`.
- Realizamos o processamento dos dados, como salvá-los em um banco de dados (esta parte pode variar dependendo das necessidades do seu projeto).
- Exibimos os dados processados usando `echo`.
- Se o formulário não foi enviado via POST, redirecionamos o usuário de volta para a página do formulário.

Lembre-se de adaptar o código de acordo com os requisitos específicos do seu projeto. Além disso, sempre valide e sanitize os dados do usuário para evitar vulnerabilidades de segurança, como injeção de SQL ou XSS.