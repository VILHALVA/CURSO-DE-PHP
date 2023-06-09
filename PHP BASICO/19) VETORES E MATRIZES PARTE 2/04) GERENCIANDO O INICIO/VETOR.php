<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="ESTILO.css">
</head>
<body>
<div>
    <pre>
        <?php
        $v = array("A", "J", "L", "M", "O");

        $t = count($v);
        echo "O VETOR TEM $t ELEMENTOS<br/>";
        print_r($v);

        array_unshift($v,"Z");
        $t = count($v);
        echo "O VETOR TEM $t ELEMENTOS<br/>";
        print_r($v);

        array_shift($v);
        $t = count($v);
        echo "O VETOR TEM $t ELEMENTOS<br/>";
        print_r($v);
        ?>
    </pre>
</div>
</body>
</html>
