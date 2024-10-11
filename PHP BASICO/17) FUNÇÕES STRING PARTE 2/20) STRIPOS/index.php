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
        $frase1 = "Eu Estou Aprendendo PHP";
        $frase2 = stripos($frase1,"php");
        echo ("A PALAVRA PHP DE $frase1 ESTÁ NA POSIÇÃO $frase2");
    ?>
</div>
</body>
</html>
