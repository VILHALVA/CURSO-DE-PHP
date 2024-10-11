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
        function soma($a, $b) {
            $soma = $a + $b;
            echo "<br>SOMANDO $a + $b = $soma";
        }

        soma(4,9);
        soma(5,22);
        soma(34,56);

        $x = 9;
        $y = 22;
        soma($x, $y);
    ?>
</div>
</body>
</html>
