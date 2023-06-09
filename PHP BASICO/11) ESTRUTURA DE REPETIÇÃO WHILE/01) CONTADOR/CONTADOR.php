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
        $c = 1;
        while ($c < 11) {
            echo "$c <br>";
            $c++;
        }

        $m = 10;
        while ($m > 0) {
            echo "$m <br>";
            $m--;
        }
    ?>
</div>
</body>
</html>
