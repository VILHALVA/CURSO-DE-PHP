<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $second = isset($_REQUEST['second']) ? $_REQUEST['second'] : null;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="second">Qual é o total de segundos?</label>
            <input type="number" name="second" id="second" required value="<?= htmlspecialchars($second) ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
        if ($second !== null) {
            //Semana
            $sem = intdiv($second, 604800);
            $resto = $second % 604800;
            //Dia
            $dia = intdiv($resto, 86400);
            $resto = $resto % 86400;
            //Hora
            $hor = intdiv($resto, 3600);
            $resto = $resto % 3600;
            //Minuto
            $min = intdiv($resto, 60);
            $resto = $resto % 60;
            //Segundo
            $seg = $resto;

            echo "<h2>Totalizando tudo</h2>";
            echo "<p>Analisando o valor que você digitou, <strong>" . number_format($second, 0, ",", ".") . " segundos</strong> equivalem a um total de:</p>";
            echo "<ul>";
            echo "<li>$sem semanas;</li>";
            echo "<li>$dia dias;</li>";
            echo "<li>$hor horas;</li>";
            echo "<li>$min minutos;</li>";
            echo "<li>$seg segundos.</li>";
            echo "</ul>";
        }
        ?>
    </section>
</body>
</html>
