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
        require_once "CLASSLUTA.php";
        require_once "LUTA.php";
        $l = array();

        $l[0] = new CLASSLUTA("Pretty Boy", "França", 31,68.9, 1.75, 11, 3, 1);
        $l[0]->apresentar();
        $l[0]->status();

        $l[1] = new CLASSLUTA("Putscript", "Brasil", 29, 57.8, 1.60, 14, 2, 3);
        $l[1]->apresentar();
        $l[1]->status();

        $l[2] = new CLASSLUTA("Snapshadow", "EUA", 35, 80.9, 1.65, 12, 2, 1);
        $l[2]->apresentar();
        $l[2]->status();

        $l[3] = new CLASSLUTA("Dead Code", "Australia", 28, 83.4, 1.80, 13, 0, 2);
        $l[3]->apresentar();
        $l[3]->status();

        $l[4] = new CLASSLUTA("Futher", "Canadá", 22, 93.4, 1.92, 15, 1, 4);
        $l[4]->apresentar();
        $l[4]->status();

        $l[5] = new CLASSLUTA("Dracula", "Russia", 45, 67.6, 1.89, 20, 0, 0);
        $l[5]->apresentar();
        $l[5]->status();

        $UEC01 = new LUTA();
        $UEC01->marcarLuta($l[0],$l[1]);
        $UEC01->lutar();
        $l[0]->status();
        $l[1]->status();

        $UEC02 = new LUTA();
        $UEC02->marcarLuta($l[5],$l[2]);
        $UEC02->lutar();
        $l[5]->status();
        $l[2]->status();
    ?>
    </pre>
</div>
</body>
</html>
