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
        function teste(&$x) {
            $x += 2;
            echo "<br>O VALOR DE X É $x";
        }

        $a = 3;
        teste($a);
        echo "<br>O VALOR DE A É $a";
    ?>
</div>
</body>
</html>
