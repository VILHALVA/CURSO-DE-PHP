<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="ESTILO.css">
</head>
<body>
<div>
    <?php
        $num = $_GET["valor"];
        $c = 0;
        echo "<h1>MULTIPRICANDO $num</h1>";
        do {
            $mult = $num * $c;
            echo "<h2>$num X $c = $mult</h2>";
            $c++;
        } while($c <= 10);
    ?>
</div>
</body>
</html>
