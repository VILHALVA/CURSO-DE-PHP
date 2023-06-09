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
        require "CLASSCANETA.php";
        $c1 = new CLASSCANETA();
        $c1->cor = "AZUL";
        $c1->modelo = "BIC";
        $c1->carga = 80;
        $c1->ponta = 0.5;
        $c1->tampada = true;
        $c1->destampar();
        $c1->rabiscar();
        var_dump($c1);

        $c2 = new CLASSCANETA();
        $c2->cor = "verde";
        $c2->ponta = 0.75;
        $c2->carga = 25;
        $c2->tampada = true;
        $c2->destampar();
        $c2->rabiscar();
        print_r($c2);
    ?>
</div>
</body>
</html>
