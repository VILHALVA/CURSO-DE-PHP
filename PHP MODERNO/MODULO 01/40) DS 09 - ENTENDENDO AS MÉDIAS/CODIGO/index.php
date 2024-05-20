<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = isset($_GET['valor1']) ? $_GET['valor1'] : null;
        $valor2 = isset($_GET['valor2']) ? $_GET['valor2'] : null;
        $peso1 = isset($_GET['peso1']) ? $_GET['peso1'] : null;
        $peso2 = isset($_GET['peso2']) ? $_GET['peso2'] : null;

        $mediaAS = null;
        $mediaAP = null;

        if ($valor1 !== null && $valor2 !== null && $peso1 !== null && $peso2 !== null) {
            $mediaAS = ($valor1 + $valor2) / 2;
            $valores = ($valor1 * $peso1) + ($valor2 * $peso2);
            $pesos = $peso1 + $peso2;
            if ($pesos != 0) {
                $mediaAP = $valores / $pesos;
            } 
            else {
                $mediaAP = "Erro: divisão por zero";
            }
        }
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1º Valor: </label>
            <input type="number" name="valor1" id="ivalor1" required value="<?= htmlspecialchars($valor1) ?>">
            <label for="peso1">1º Peso: </label>
            <input type="number" name="peso1" id="ipeso1" required value="<?= htmlspecialchars($peso1) ?>">
            <label for="valor2">2º Valor: </label>
            <input type="number" name="valor2" id="ivalor2" required value="<?= htmlspecialchars($valor2) ?>">
            <label for="peso2">2º Peso: </label>
            <input type="number" name="peso2" id="ipeso2" required value="<?= htmlspecialchars($peso2) ?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php if ($mediaAS !== null && $mediaAP !== null): ?>
            <p>Analisando os valores <?= htmlspecialchars($valor1) ?> e <?= htmlspecialchars($valor2) ?>:</p>
            <ul>
                <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?= number_format($mediaAS, 2, ",", ".") ?>.</li>
                <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?= htmlspecialchars($peso1) ?> e <?= htmlspecialchars($peso2) ?> é igual a <?= is_numeric($mediaAP) ? number_format($mediaAP, 2, ",", ".") : $mediaAP ?>.</li>
            </ul>
        <?php endif; ?>
    </section>
</body>
</html>
