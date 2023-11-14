<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de Formulário</title>
</head>
<body>

<form method="post" action="">
    <label for="nome">Digite seu nome:</label>
    <input type="text" name="nome" id="nome" required>
    <button type="submit">Enviar</button>
</form>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera o nome do formulário usando a superglobal $_POST
    $nome = $_POST["nome"];

    // Exibe uma mensagem de boas-vindas
    echo "<p>Bem-vindo, $nome!</p>";
}
?>

</body>
</html>
