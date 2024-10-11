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
        $v = array("A", "J", "L", "M", "O");
        $v[] = "B";
        $v[] = "C";
        array_push($v,"Y");
        array_push($v,"Z");
        array_pop($v);

        $t = count($v);
        echo "O VETOR TEM $t ELEMENTOS<br/>";
        print_r($v);
        ?>
    </pre>
</div>
</body>
</html>
