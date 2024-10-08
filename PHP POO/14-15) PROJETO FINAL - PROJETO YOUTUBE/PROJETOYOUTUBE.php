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
    // Criação e impressão dos objetos Video
    require_once 'VIDEOS.php';
    $v = array();
    $v[0] = new VIDEOS("AULA 1 DE POO");
    $v[1] = new VIDEOS("AULA 12 DE PHP");
    $v[2] = new VIDEOS("AULA 10 DE HTML");
    echo $v[0] . "\n";
    echo $v[1] . "\n";
    echo $v[2] . "\n";
    print_r($v);

    // Criação e impressão dos objetos Gafanhoto:
    require_once 'GAFANHOTO.php';
    $g = array();
    $g[0] = new GAFANHOTO("JUBILEU", 22, "M", "JUBA");
    $g[1] = new GAFANHOTO("CREUZA", 12, "F", "CREUZITA");
    echo $g[0] . "\n";
    echo $g[1] . "\n";
    print_r($g);

    // Criação e avaliação dos objetos Visualizacao:
    require_once 'VISUALIZACAO.php';
    $s = array();
    $s[0] = new VISUALIZACAO($g[0], $v[2]);
    $s[1] = new VISUALIZACAO($g[0], $v[1]);
    $s[0]->avaliar();
    $s[1]->avaliar(87);
    echo $s[0] . "\n";
    echo $s[1] . "\n";
    print_r($s);
    ?>
    </pre>
</div>
</body>
</html>
