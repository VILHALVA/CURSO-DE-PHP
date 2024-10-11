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
        $produto = "LEITE";
        $preco = 4.50;
        echo "O $produto CUSTA R$ ".number_format($preco,2);
        printf("<br>O %s CUSTA R$ %.2f", $produto, $preco);
    ?>
</div>
</body>
</html>
