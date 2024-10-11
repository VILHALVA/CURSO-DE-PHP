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
        include "func.php";
        /*
         * INCLUDE -> MESMO QUE NÃO ENCONTRE O ARQUIVO DA FUNÇÃO, O CÓDIGO DO SCRIPT PODERÁ SER EXECUTADO NORMALMENTE.
         * REQUIRE -> CASO O ARQUIVO DA FUNÇÃO NÃO EXISTA, O CÓDIGO DO SCRIPT NÃO SERÁ EXECUTADO.
        */
        echo "TESTANDO NOVAS FUNÇÕES!";
        ola();
    ?>
</div>
</body>
</html>
