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
        $num = isset($_GET["num"])?$_GET["num"]:1;
        echo "<h1>MULTIPRICANDO $num</h1>";
        for ($c=1; $c<=10; $c++) {
            $mult = $num * $c;
            echo "<h2>$num X $c = $mult</h2>";
        }
    ?>
    <br>
    <a href="javascript:history.go(-1)">VOLTAR</a>
</div>
</body>
</html>
