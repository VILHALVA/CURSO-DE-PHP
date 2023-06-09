<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="ESTILO.css">
</head>
<body>
<div>
    <?php
    $nome = "   JOSÉ DA SILVA   ";
    $tamanho = strlen($nome);
    $caracter = rtrim($nome);

    echo ("O NOME $nome TEM $tamanho LETRAS COM ESPAÇO ");
    echo (strlen($caracter));
    ?>
</div>
</body>
</html>
