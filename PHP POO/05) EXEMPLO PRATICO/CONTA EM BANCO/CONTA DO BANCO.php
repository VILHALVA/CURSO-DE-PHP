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
        require "CLASSBANCO.php";
        $p1 = new CLASSBANCO(); // JUBILEU
        $p1->AbrirConta("CC");
        $p1->setDono("JUBILEU");
        $p1->setNumConta(1111);
        $p1->Depositar(300);
        $p1->Sacar(100);
        $p1->PagarMensal();
        $p1->Sacar(1000);
        $p1->FecharConta();
        print_r($p1);

        $p2 = new CLASSBANCO(); // CREUZA
        $p2->AbrirConta("CP");
        $p2->setDono("CREUZA");
        $p2->setNumConta(2222);
        $p2->Depositar(500);
        $p2->PagarMensal();
        $p2->FecharConta();
        print_r($p2);
    ?>
    </pre>
</div>
</body>
</html>
