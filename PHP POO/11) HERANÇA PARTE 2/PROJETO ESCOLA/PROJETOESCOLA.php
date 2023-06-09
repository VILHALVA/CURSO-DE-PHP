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
        require_once 'VISITANTE.php';
        require_once 'ALUNO.php';
        require_once 'BOLSISTA.php';

        $visitante = new VISITANTE();
        $visitante->setNome("JOVENAL");
        $visitante->setIdade(22);
        $visitante->setSexo("M");
        echo $visitante . "\n";

        $aluno = new ALUNO();
        $aluno->setNome("CLAUDIO");
        $aluno->setIdade(16);
        $aluno->setSexo("M");
        $aluno->setCurso("INFORMATICA");
        $aluno->setMatricula(1111);
        $aluno->pagarMensalidade();
        echo $aluno . "\n";

        $bolsista = new BOLSISTA();
        $bolsista->setNome("JUBILEU");
        $bolsista->setIdade(44);
        $bolsista->setSexo("M");
        $bolsista->setCurso("PROGRAMAÇÃO");
        $bolsista->setMatricula(1112);
        $bolsista->pagarMensalidade();
        echo $bolsista . "\n";

        print_r($aluno);
        print_r($bolsista);
        print_r($visitante);
        ?>
    </pre>
</div>
</body>
</html>
