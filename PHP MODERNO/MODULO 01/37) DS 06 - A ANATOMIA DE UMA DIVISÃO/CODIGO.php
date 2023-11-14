<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando a Anatomia da Divisão</title>
    <link rel="stylesheet" href="CODIGO.css">
</head>
<body>

<main>
<form method="post" action="">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Analisar Divisão</button>
</form>

</main>

<footer>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura o número do formulário
    $numero = $_POST["numero"];

    // Verifica se o número é zero
    if ($numero == 0) {
        echo "<p>O número é zero. Não é possível realizar a divisão.</p>";
    } else {
        // Calcula e exibe a anatomia da divisão
        $resultado = 10 / $numero;
        $quociente = (int) ($resultado);
        $resto = 10 % $numero;

        echo "<p>Anatomia da Divisão:</p>";
        echo "<p>Dividendo: 10</p>";
        echo "<p>Divisor: $numero</p>";
        echo "<p>Quociente: $quociente</p>";
        echo "<p>Resto: $resto</p>";

        if ($numero > 5) {
            echo "<p>O número digitado é maior que 5.</p>";
        } else {
            echo "<p>O número digitado é menor ou igual a 5.</p>";
        }
    }
}
?>
</footer>
</body>
</html>
