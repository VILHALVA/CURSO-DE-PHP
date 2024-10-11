<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <h1>CONTAGEM PROGRESSIVA:</h1>
    <?php
        for ($i = 1; $i < 11; $i++) {
            echo "$i ";
        }
    ?>

    <h1>CONTAGEM REGRESSIVA:</h1>
    <?php
    for ($i = 10; $i > 0; $i--) {
        echo "$i ";
    }
    ?>

    <h1>CONTAGEM PROGRESSIVA DE 5 EM 5:</h1>
    <?php
    for ($i = 0; $i <= 100; $i+=5) {
        echo "$i ";
    }
    ?>

    <h1>CONTAGEM REGRESSIVA DE 2 EM 2:</h1>
    <?php
    for ($i = 20; $i >= 0; $i-=2) {
        echo "$i ";
    }
    ?>
</div>
</body>
</html>
