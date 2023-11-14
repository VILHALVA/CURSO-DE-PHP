<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando um Número Real</title>
    <link rel="stylesheet" href="CODIGO.css">
</head>
<body>
<main>
<form method="post" action="">
    <label for="numero">Digite um número real (com vírgula):</label>
    <input type="text" name="numero" id="numero" required>
    <button type="submit">Analisar</button>
</form>
</main>

<footer>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_digitado = $_POST["numero"];

    // Verifica se o número digitado é válido
    if (is_numeric(str_replace(",", ".", $numero_digitado))) {
        // Converte a vírgula para ponto e analisa as partes inteira e fracionária
        $numero_formatado = str_replace(",", ".", $numero_digitado);
        $parte_inteira = floor($numero_formatado);
        $parte_fracionaria = $numero_formatado - $parte_inteira;

        // Exibe os resultados
        echo "<p>Número Digitado: $numero_digitado</p>";
        echo "<p>Parte Inteira: $parte_inteira</p>";
        echo "<p>Parte Fracionária: $parte_fracionaria</p>";
    } else {
        // Se o número digitado não for válido, exibe uma mensagem de erro
        echo "<p>Por favor, digite um número real válido.</p>";
    }
}
?>
</footer>
</body>
</html>
