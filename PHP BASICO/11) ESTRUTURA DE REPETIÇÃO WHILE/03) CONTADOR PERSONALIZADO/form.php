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
        $inicio = $_GET["inicio"];
        $fim = $_GET["fim"];
        $passo = $_GET["passo"];

        $c = $inicio;
        while ($c <= $fim) {
            echo $c;
            $c+=$passo;
        }
    ?>
</div>
</body>
</html>
