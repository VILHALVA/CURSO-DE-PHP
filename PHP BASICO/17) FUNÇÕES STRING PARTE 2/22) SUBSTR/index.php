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
        $frase = "Curso Em Video";
        $sub1 = substr($frase,0,5);
        $sub2 = substr($frase,6);
        $sub3 = substr($frase,-5);
        echo ("A FRASE $frase APENAS 5 LETRAS INICIAIS É $sub1");
        echo ("<br>A FRASE $frase APARTIR DA 6 LETRA É $sub2");
        echo ("<br>A FRASE $frase AS 5 ÚLTIMAS LETRAS SÃO $sub3");
    ?>
</div>
</body>
</html>
