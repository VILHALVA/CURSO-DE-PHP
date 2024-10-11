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
        $frase = "Eu Estou Aprendendo PHP No Curso Em Video de PHP";
        $count = substr_count($frase,"PHP");
        echo ($frase);
        echo ("<br>A PALAVRA PHP APARECE $count VEZES NESTA FRASE!");
    ?>
</div>
</body>
</html>
