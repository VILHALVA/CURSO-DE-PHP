<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="ESTILO.css">
</head>
<body>
<div>
    <pre>
    <?php
        require "CLASSCANETA.php";
        $c1 = new CLASSCANETA();
        $c1->cor = "AZUL";
        $c1->modelo = "BIC CRISTAL";
        // $c1->carga = 80;
        $c1->tampar(); // É POSSIVEL ACESSAR UM ATRIBUTO PROTEGIDO (OU PRIVADO) ATRAVÉS DO METODO PUBLICO.
        $c1->rabiscar();
        print_r($c1);
    ?>
    </pre>
</div>
</body>
</html>
