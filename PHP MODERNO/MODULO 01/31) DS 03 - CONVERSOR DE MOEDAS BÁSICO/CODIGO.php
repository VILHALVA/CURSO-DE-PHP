<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas Fixo</title>
    <link rel="stylesheet" href="CODIGO.css">
</head>
<body>
<main>
<form method="post" action="">
    <label for="valor">Valor a ser convertido:</label>
    <input type="number" name="valor" id="valor" step="any" required>

    <label for="moeda_origem">Moeda de Origem:</label>
    <select name="moeda_origem" id="moeda_origem" required>
        <option value="USD">Dólar Americano (USD)</option>
        <option value="EUR">Euro (EUR)</option>
        <option value="GBP">Libra Esterlina (GBP)</option>
    </select>

    <label for="moeda_destino">Moeda de Destino:</label>
    <select name="moeda_destino" id="moeda_destino" required>
        <option value="USD">Dólar Americano (USD)</option>
        <option value="EUR">Euro (EUR)</option>
        <option value="GBP">Libra Esterlina (GBP)</option>
    </select>

    <button type="submit">Converter</button>
</form>
</main>

<footer>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST["valor"];
    $moeda_origem = $_POST["moeda_origem"];
    $moeda_destino = $_POST["moeda_destino"];

    if (is_numeric($valor)) {
        // Defina as taxas de câmbio fixas
        $taxa_usd_eur = 0.85;
        $taxa_usd_gbp = 0.75;
        $taxa_eur_usd = 1.18;
        $taxa_eur_gbp = 0.88;
        $taxa_gbp_usd = 1.33;
        $taxa_gbp_eur = 1.14;

        // Calcula o valor convertido
        $valor_convertido = 0;

        switch ("$moeda_origem-$moeda_destino") {
            case "USD-EUR":
                $valor_convertido = $valor * $taxa_usd_eur;
                break;
            case "USD-GBP":
                $valor_convertido = $valor * $taxa_usd_gbp;
                break;
            case "EUR-USD":
                $valor_convertido = $valor * $taxa_eur_usd;
                break;
            case "EUR-GBP":
                $valor_convertido = $valor * $taxa_eur_gbp;
                break;
            case "GBP-USD":
                $valor_convertido = $valor * $taxa_gbp_usd;
                break;
            case "GBP-EUR":
                $valor_convertido = $valor * $taxa_gbp_eur;
                break;
            default:
                // Caso não seja suportada a conversão entre as moedas escolhidas
                echo "<p>Conversão entre $moeda_origem e $moeda_destino não suportada.</p>";
                break;
        }

        // Exibe o resultado
        if ($valor_convertido > 0) {
            echo "<p>$valor $moeda_origem equivale a $valor_convertido $moeda_destino</p>";
        }
    } else {
        // Se o valor não for numérico, exibe uma mensagem de erro
        echo "<p>Por favor, digite um valor numérico válido.</p>";
    }
}
?>
</footer>
</body>
</html>
