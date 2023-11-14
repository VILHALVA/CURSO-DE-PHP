<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade</title>
    <link rel="stylesheet" href="CODIGO.css">
</head>
<body>

<main>
    <form method="post" action="">
        <label for="ano_nascimento">Digite o ano que você nasceu:</label>
        <input type="number" name="ano_nascimento" id="ano_nascimento" required>

        <label for="ano_desejado">Quer saber a sua idade para qual ano?</label>
        <input type="number" name="ano_desejado" id="ano_desejado" required>

        <button type="submit">Calcular Idade</button>
    </form>
</main>

<footer>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Captura os anos do formulário
        $ano_nascimento = $_POST["ano_nascimento"];
        $ano_desejado = $_POST["ano_desejado"];

        // Obtém o ano atual
        $ano_atual = date("Y");

        // Calcula a idade
        $idade = $ano_desejado - $ano_nascimento;

        // Exibe o resultado
        echo "<p>Quem nasceu no $ano_nascimento vai ter $idade em $ano_desejado.</p>";
    }
    ?>
</footer>

</body>
</html>
