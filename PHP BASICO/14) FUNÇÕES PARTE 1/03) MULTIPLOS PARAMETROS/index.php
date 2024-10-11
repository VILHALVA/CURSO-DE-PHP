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
        function soma() {
            $p = func_get_args(); //<-JOGA OS VALORES EM UMA LISTA (VARIAVEL COMPOSTA/VETOR).
            $tot = func_num_args(); //<- CONTA A QUANTIDADE DE INDICES DO VETOR.
            $s = 0;
            for ($i=0; $i < $tot; $i++) {
                $s = $s + $p[$i];
            }
            return $s;
        }

        $res1 = soma(45,57,78,4,3);
        echo "<br>A SOMA DOS VALORES É $res1";

        $res2 = soma(45,57,78,4,3,22,56,78,45,57,78,21,23);
        echo "<br>A SOMA DOS VALORES É $res2";
    ?>
</div>
</body>
</html>
