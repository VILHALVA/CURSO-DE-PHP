<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salário Mínimo</title>
    <link rel="stylesheet" href="CODIGO.css">
</head>
<body>

<main>
<form method="post" action="">
    <label for="horas_trabalhadas">Horas Trabalhadas por Semana:</label>
    <input type="number" name="horas_trabalhadas" id="horas_trabalhadas" required>

    <label for="valor_por_hora">Valor por Hora:</label>
    <input type="number" name="valor_por_hora" id="valor_por_hora" required>

    <button type="submit">Calcular Salário Mínimo</button>
</form>
</main>

<footer>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $horas_trabalhadas = $_POST["horas_trabalhadas"];
    $valor_por_hora = $_POST["valor_por_hora"];

    // Calcula o salário mínimo
    $salario_minimo = $horas_trabalhadas * $valor_por_hora * 4 * 5; // 4 semanas por mês, 5 dias por semana

    // Exibe o resultado
    echo "<p>O salário mínimo calculado é: R$ " . number_format($salario_minimo, 2, ',', '.') . "</p>";
}
?>
</footer>
</body>
</html>
