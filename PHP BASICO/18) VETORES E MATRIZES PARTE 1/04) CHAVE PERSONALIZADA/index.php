<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <pre>
        <?php
        $v = array (7 => 5,
                    9 => 9,
                    1 => 7,
                    3 => 12);
        unset($v[1]); //-> APAGA O VALOR DO INDICE 1.
        print_r($v);
        ?>
    </pre>
</div>
</body>
</html>
