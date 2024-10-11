<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <pre>
    <?php
        require "classe_banco.php";
        $p1 = new classe_banco(); // JUBILEU
        $p1->AbrirConta("CC");
        $p1->setDono("JUBILEU");
        $p1->setNumConta(1111);
        $p1->Depositar(300);
        $p1->Sacar(100);
        $p1->PagarMensal();
        $p1->Sacar(1000);
        $p1->FecharConta();
        print_r($p1);

        $p2 = new classe_banco(); // CREUZA
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
