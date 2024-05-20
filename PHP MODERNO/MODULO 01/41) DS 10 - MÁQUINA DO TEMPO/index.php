<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nasceu = isset($_GET['nasceu']) ? $_GET['nasceu'] : null;
        $ano = isset($_GET['ano']) ? $_GET['ano'] : null;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasceu">Em que ano você nasceu? </label>
            <input type="number" name="nasceu" id="inasceu" required value="<?= htmlspecialchars($nasceu) ?>">
            <label for="ano">Quer saber sua idade em que ano? (Atualmente estamos em <strong>2023</strong>)</label>
            <input type="number" name="ano" id="iano" required value="<?= htmlspecialchars($ano) ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            if ($nasceu !== null && $ano !== null) {
                $idade = $ano - $nasceu;
                echo "<p>Quem nasceu em " . htmlspecialchars($nasceu) . " vai ter <strong>" . htmlspecialchars($idade) . " anos</strong> em " . htmlspecialchars($ano) . "!</p>";
            }
        ?>
    </section>
</body>
</html>
