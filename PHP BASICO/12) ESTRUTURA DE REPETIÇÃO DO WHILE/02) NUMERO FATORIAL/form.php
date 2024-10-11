<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <?php
        $v = $_GET["val"];
        echo "<h1>CALCULANDO O FATORIAL DE $v</h1>";
        $c = $v;
        $fat = 1;
        do {
            $fat = $fat * $c;
            $c--;
        } while($c >= 1);
        echo "<h2>$v != $fat</h2>";
    ?>
    <br>
    <a href="index.html">VOLTAR</a>
</div>
</body>
</html>
