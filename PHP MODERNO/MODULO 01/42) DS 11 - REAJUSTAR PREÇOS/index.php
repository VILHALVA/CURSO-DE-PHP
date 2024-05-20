<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $preco = isset($_GET['preco']) ? $_GET['preco'] : null;
    $reajuste = isset($_GET['reaj']) ? $_GET['reaj'] : null;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="ipreco" min="0.10" step="0.01" required value="<?= htmlspecialchars($preco) ?>">

            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p"><?= $reajuste !== null ? htmlspecialchars($reajuste) : '?' ?></span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" required value="<?= htmlspecialchars($reajuste) ?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
        if ($preco !== null && $reajuste !== null) {
            $aumento = ($preco * $reajuste) / 100;
            $novo = $preco + $aumento;

            echo "<p>O produto que custava R\$" . number_format($preco, 2, ",", ".") . ", com <strong>R\$" . number_format($aumento, 2, ",", ".") . " de aumento</strong> vai passar a custar <strong>R\$" . number_format($novo, 2, ",", ".") . "</strong> a partir de agora.</p>";
        }
        ?>
    </section>

    <script>
        function mudaValor() {
            document.getElementById('p').innerText = document.getElementById('reaj').value;
        }
        // Chamada inicial para atualizar o valor na página carregada
        mudaValor();
    </script>
</body>
</html>
