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
    require_once 'LIVRO.php';
    require_once 'PESSOA.php';

    $p = array();
    $l = array();

    $p[0] = new Pessoa("Pedro", 22, "M");
    $p[1] = new Pessoa("Maria", 25, "F");

    $l[0] = new Livro("Apredendo Java", "José da Silva", 300, $p[0]);
    $l[1] = new Livro("POO para Iniciantes", "Pedro Paulo", 500, $p[1]);
    $l[2] = new Livro("Java avancado", "Maria Candido", 800, $p[0]);

    $l[0]->abrir();
    $l[0]->folhear(200);
    $l[0]->avancarPag();
    echo $l[0]->detalhes() . "\n";
    echo $l[1]->detalhes() . "\n";
    echo $l[2]->detalhes() . "\n";
    ?>
</div>
</body>
</html>
