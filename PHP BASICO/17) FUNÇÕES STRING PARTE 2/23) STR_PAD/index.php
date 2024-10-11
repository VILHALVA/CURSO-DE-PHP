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
        $nome1 = "Guanabara";
        $nome2 = str_pad($nome1,30," ",STR_PAD_RIGHT);
        echo ("O PROFESSOR $nome2 É INTELIGENTE!");
    ?>
</div>
</body>
</html>
