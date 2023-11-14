<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Médias</title>
    <link rel="stylesheet" href="CODIGO.css">
</head>
<body>
<main>
<form method="post" action="">
    <label for="nota1">Digite a primeira nota:</label>
    <input type="number" name="nota1" id="nota1" required>

    <label for="nota2">Digite a segunda nota:</label>
    <input type="number" name="nota2" id="nota2" required>

    <label for="nota3">Digite a terceira nota:</label>
    <input type="number" name="nota3" id="nota3" required>

    <button type="submit">Calcular Médias</button>
</form>
</main>

<footer>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura as notas do formulário
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    // Calcula a média aritmética simples
    $media_simples = ($nota1 + $nota2 + $nota3) / 3;

    // Calcula a média aritmética ponderada
    $media_ponderada = ($nota1 * 2 + $nota2 * 3 + $nota3 * 5) / (2 + 3 + 5);

    // Exibe o resultado
    echo "<p>Notas digitadas: $nota1, $nota2, $nota3</p>";
    echo "<p>Média Aritmética Simples: " . number_format($media_simples, 2, ',', '.') . "</p>";
    echo "<p>Média Aritmética Ponderada: " . number_format($media_ponderada, 2, ',', '.') . "</p>";
}
?>
</footer>

</body>
</html>
