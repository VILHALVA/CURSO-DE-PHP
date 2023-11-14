<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Reajuste de Preço</title>
    <link rel="stylesheet" href="CODIGO.css">
</head>
<body>

<section>
    <form method="post" action="">
        <label for="preco">Digite o preço:</label>
        <input type="number" name="preco" id="preco" step="0.01" required>

        <label for="aumento">Selecione o aumento (%):</label>
        <input type="range" name="aumento" id="aumento" min="0" max="100" step="1" value="0">

        <output for="aumento" id="output_aumento">0%</output>

        <button type="submit">Calcular Reajuste</button>
    </form>
</section>

<footer>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Captura o preço e o aumento do formulário
        $preco = $_POST["preco"];
        $aumento_percentual = $_POST["aumento"];

        // Calcula o preço final com o reajuste
        $aumento_fator = 1 + ($aumento_percentual / 100);
        $preco_final = $preco * $aumento_fator;

        // Exibe o resultado
        echo "<p>O preço inicial é: R$ " . number_format($preco, 2, ',', '.') . "</p>";
        echo "<p>O aumento selecionado é: $aumento_percentual%</p>";
        echo "<p>O preço final com o reajuste é: R$ " . number_format($preco_final, 2, ',', '.') . "</p>";
    }
    ?>
</footer>

<script>
    // Atualiza dinamicamente o valor exibido com base no controle de intervalo
    document.getElementById("aumento").addEventListener("input", function() {
        document.getElementById("output_aumento").value = this.value + "%";
    });
</script>

</body>
</html>
