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
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Exibe a área para receber o resultado
    echo "<div>";
    echo "<h2>Resultado:</h2>";
    echo "<p>A soma de $numero1 e $numero2 é: $soma</p>";
    echo "</div>";
}
?>
</body>
</html>
