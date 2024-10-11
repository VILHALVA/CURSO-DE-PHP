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
        $frase = "GOSTO DE ESTUDAR PROGRAMAÇÃO";
        $subs = str_replace("PROGRAMAÇÃO","PHP",$frase);
        echo ("$frase<br/>");
        echo ($subs);
    ?>
</div>
</body>
</html>
