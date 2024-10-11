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
    require_once 'PESSOA.php';
    require_once 'ALUNO.php';
    require_once 'PROFESSOR.php';
    require_once 'FUNCIONARIO.php';

    $p1 = new PESSOA();
    $p2 = new ALUNO();
    $p3 = new PROFESSOR();
    $p4 = new FUNCIONARIO();

    $p1->setNome("PEDRO");
    $p1->setIdade(20);
    $p1->setSexo("M");

    $p2->setNome("MARIA");
    $p2->setIdade(25);
    $p2->setSexo("F");
    $p2->setCurso("INFORMATICA");
    $p2->cancelarMatr();

    $p3->setNome("CLÁUDIA");
    $p3->setIdade(20);
    $p3->setSexo("F");
    $p3->setSalario(2500.25);

    $p4->setNome("FABIANA");
    $p4->setIdade(19);
    $p4->setSexo("F");
    $p4->setSetor("ESTOQUE");

    echo $p1->__toString() . "\n";
    echo $p2->__toString() . "\n";
    echo $p3->__toString() . "\n";
    echo $p4->__toString() . "\n";

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
    ?>
    </pre>
</div>
</body>
</html>
