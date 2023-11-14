<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números Randômicos</title>
    <link rel="stylesheet" href="CODIGO.css">
</head>
<body>

<main>
<form method="post" action="">
    <label for="minimo">Valor Mínimo:</label>
    <input type="number" name="minimo" id="minimo" required>

    <label for="maximo">Valor Máximo:</label>
    <input type="number" name="maximo" id="maximo" required>

    <label for="quantidade">Quantidade de Números:</label>
    <input type="number" name="quantidade" id="quantidade" required>

    <button type="submit">Sortear</button>
</form>
</main>

<footer>
<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $minimo = $_POST["minimo"];
    $maximo = $_POST["maximo"];
    $quantidade = $_POST["quantidade"];

    // Verifica se os valores são numéricos
    if (is_numeric($minimo) && is_numeric($maximo) && is_numeric($quantidade)) {
        // Realiza o sorteio dos números
        $numeros_sorteados = array();

        for ($i = 0; $i < $quantidade; $i++) {
            $numero = rand($minimo, $maximo);
            $numeros_sorteados[] = $numero;
        }

        // Exibe os números sorteados
        echo "<p>Números Sorteados: " . implode(", ", $numeros_sorteados) . "</p>";
    } else {
        // Se os valores não forem numéricos, exibe uma mensagem de erro
        echo "<p>Por favor, digite valores numéricos válidos.</p>";
    }
}
?>
</footer>
</body>
</html>
