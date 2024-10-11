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
        $vetor[0] = "CURSO";
        $vetor[1] = "EM";
        $vetor[2] = "VIDEO";
        $frase = implode("#",$vetor);
        echo ($frase);
    ?>
</div>
</body>
</html>
