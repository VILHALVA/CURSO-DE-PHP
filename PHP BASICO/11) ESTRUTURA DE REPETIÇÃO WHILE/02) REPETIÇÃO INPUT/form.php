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
    $i = 1;
    while ($i <= 5) {
        $v = "num" . $i;
        $url = "v" . $i;
        $$v = isset($_GET[$url]) ? $_GET[$url]:0;
        $i++;
    }

    $i = 1;
    while ($i <= 5) {
        $v = "num" . $i;
        echo "Valor $i: " . $$v . "<br/>";
        $i++;
    }
    ?>
</div>
</body>
</html>
