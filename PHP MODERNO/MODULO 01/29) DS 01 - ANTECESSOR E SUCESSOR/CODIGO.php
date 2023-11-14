<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="CODIGO.css">
</head>
<body>
<main>
<form method="post" action="">
    <label for="numero">Digite um número:</label>
    <input type="text" name="numero" id="numero" required>
    <button type="submit">Calcular</button>
</form>
</main>

<footer>
<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o número digitado pelo usuário
    $numero = $_POST["numero"];

    // Verifica se o valor é numérico
    if (is_numeric($numero)) {
        // Calcula e exibe o antecessor e o sucessor
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;

        echo "<p>O antecessor de $numero é: $antecessor</p>";
        echo "<p>O sucessor de $numero é: $sucessor</p>";
    } else {
        // Se o valor não for numérico, exibe uma mensagem de erro
        echo "<p>Por favor, digite um número válido.</p>";
    }
}
?>
</footer>
</body>
</html>
