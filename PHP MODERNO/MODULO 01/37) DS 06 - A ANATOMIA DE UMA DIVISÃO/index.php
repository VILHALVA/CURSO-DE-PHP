<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = isset($_GET['dividendo']) ? $_GET['dividendo'] : null;
        $divisor = isset($_GET['divisor']) ? $_GET['divisor'] : null;

        if ($dividendo !== null && $divisor !== null) {
            if ($divisor != 0) {
                $quociente = intdiv($dividendo, $divisor);
                $resto = $dividendo % $divisor;
            } 
            else {
                $quociente = $resto = null;
                echo "<p>Erro: Divisão por zero não é permitida.</p>";
            }
        }
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo: </label>
            <input type="number" name="dividendo" id="idividendo" value="<?=htmlspecialchars($dividendo)?>" required>
            <label for="divisor">Divisor: </label>
            <input type="number" name="divisor" id="idivisor" value="<?=htmlspecialchars($divisor)?>" required>
            <input type="submit" value="Analisar">
        </form>
    </main>
    <?php if ($dividendo !== null && $divisor !== null && $divisor != 0): ?>
    <section>
        <h2>Estrutura da Divisão</h2>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
    <?php endif; ?>
</body>
</html>
