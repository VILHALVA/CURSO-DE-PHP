<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Raízes</title>
    <link rel="stylesheet" href="CODIGO.css">
</head>
<body>
<main>
<form method="post" action="">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Calcular Raízes</button>
</form>
</main>

<footer>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura o número do formulário
    $numero = $_POST["numero"];

    // Calcula as raízes quadradas e cúbicas
    $raiz_quadrada = sqrt($numero);
    $raiz_cubica = pow($numero, 1/3);

    // Exibe o resultado
    echo "<p>O número digitado é: $numero</p>";
    echo "<p>A raiz quadrada é: " . number_format($raiz_quadrada, 2, ',', '.') . "</p>";
    echo "<p>A raiz cúbica é: " . number_format($raiz_cubica, 2, ',', '.') . "</p>";
}
?>
</footer>

</body>
</html>


