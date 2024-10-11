<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <h2>CONTANDO DE UM EM UM:</h2>
    <?php
        $c = 0;
        do {
            echo "<br>$c";
            $c++;
        } while($c < 11);
    ?>

    <h2>CONTANDO DE DOIS EM DOIS:</h2>
    <?php
    $c = 0;
    do {
        echo "<br>$c";
        $c+=2;
    } while($c < 11);
    ?>

    <h2>CONTAGEM REGRESSIVA:</h2>
    <?php
    $c = 10;
    do {
        echo "<br>$c";
        $c--;
    } while($c > 0);
    ?>
</div>
</body>
</html>
