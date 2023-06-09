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
       /* $c1 = new Caneta();
        $c1->setCor("AZUL");
        $c1->setModelo("BIC");
        $c1->setCarga(80); // É POSSIVEL ACESSAR UM ATRIBUTO PROTEGIDO (OU PRIVADO) ATRAVÉS DO ENCAPSULAMENTO (GSC).
        $c1->tampar();
        $c1->rabiscar();
        print_r($c1);
        print("EU TENHO UMA CANETA {$c1->getModelo()} DE COR {$c1->getCor()}!<br/>"); */

        $c2 = new CLASSCANETA("BIC", "AZUL", 0.5, 80);
        print_r($c2);

        $c3 = new CLASSCANETA("ROOT", "VERDE", 1.0, 20);
        print_r($c3);
    ?>
    </pre>
</div>
</body>
</html>
