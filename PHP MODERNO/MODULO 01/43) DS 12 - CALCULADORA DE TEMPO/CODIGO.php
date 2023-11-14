<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Tempo</title>
    <link rel="stylesheet" href="CODIGO.css">
</head>
<body>

<section>
    <form method="post" action="">
        <label for="tempo_segundos">Digite o tempo em segundos:</label>
        <input type="number" name="tempo_segundos" id="tempo_segundos" required>

        <button type="submit">Converter Tempo</button>
    </form>
</section>

<footer>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Captura o tempo em segundos do formulário
        $tempo_segundos = $_POST["tempo_segundos"];

        // Calcula o equivalente em minutos, horas, dias, semanas, meses e anos
        $tempo_minutos = $tempo_segundos / 60;
        $tempo_horas = $tempo_minutos / 60;
        $tempo_dias = $tempo_horas / 24;
        $tempo_semanas = $tempo_dias / 7;
        $tempo_meses = $tempo_dias / 30; // Aproximação de meses com 30 dias
        $tempo_anos = $tempo_dias / 365; // Aproximação de anos com 365 dias

        // Exibe o resultado
        echo "<p>O tempo em minutos é: " . number_format($tempo_minutos, 2, ',', '.') . " minutos</p>";
        echo "<p>O tempo em horas é: " . number_format($tempo_horas, 2, ',', '.') . " horas</p>";
        echo "<p>O tempo em dias é: " . number_format($tempo_dias, 2, ',', '.') . " dias</p>";
        echo "<p>O tempo em semanas é: " . number_format($tempo_semanas, 2, ',', '.') . " semanas</p>";
        echo "<p>O tempo em meses é: " . number_format($tempo_meses, 2, ',', '.') . " meses</p>";
        echo "<p>O tempo em anos é: " . number_format($tempo_anos, 2, ',', '.') . " anos</p>";
    }
    ?>
</footer>

</body>
</html>
