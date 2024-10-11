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
            return $a + $b;
        }

        $x = 34;
        $y = 56;
        $r = soma($x, $y);
        echo "A SOMA ENTRE $x E $y É $r";
    ?>
</div>
</body>
</html>
