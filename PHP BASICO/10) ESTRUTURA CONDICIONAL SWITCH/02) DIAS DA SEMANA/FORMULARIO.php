<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="ESTILO.css">
</head>
<body>
<div>
    <?php
        $dia = isset($_GET["num"])?$_GET["num"]:1;
        switch ($dia) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "HOJE TEM AULA!";
                break;
            case 0:
            case 1:
            case 7:
                echo "HOJE NÃO TEM AULA!";
                break;
            default:
                echo "DIA INVALIDO!";
        }
    ?>
    <br/><a href="javascript:history.go(-1)">VOTAR</a>
</div>
</body>
</html>
