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
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "O VALOR ENVIADO FOI $valor";
        echo "<br>A RAIZ QUADRADA É ".number_format($rq,2);
    ?>
</div>
</body>
</html>
