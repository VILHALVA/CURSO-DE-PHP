<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas Avançado</title>
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
        // Substitua 'SUA_CHAVE_API' pela sua chave de API válida do ExchangeRate-API
        $api_key = 'SUA_CHAVE_API';

        // Monta a URL da API com os parâmetros
        $url = "https://open.er-api.com/v6/latest?base=$moeda_origem";

        // Inicializa a sessão cURL
        $ch = curl_init();

        // Configura as opções da requisição cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Faz a requisição à API
        $response = curl_exec($ch);

        // Fecha a sessão cURL
        curl_close($ch);

        // Decodifica a resposta JSON
        $data = json_decode($response, true);

        // Verifica se a resposta foi bem-sucedida
        if ($data['result'] == 'success') {
            // Obtém a taxa de câmbio
            $taxa_cambio = $data['rates'][$moeda_destino];

            // Calcula o valor convertido
            $valor_convertido = $valor * $taxa_cambio;

            // Exibe o resultado
            echo "<p>$valor $moeda_origem equivale a $valor_convertido $moeda_destino</p>";
        } else {
            // Se a resposta não foi bem-sucedida, exibe uma mensagem de erro
            echo "<p>Erro ao obter as taxas de câmbio. Por favor, tente novamente mais tarde.</p>";
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
