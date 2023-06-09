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
        $n1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
        $n2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
        $media = ($n1 + $n2) / 2;

        if ($media >= 5 && $media < 7) {
            $situacao = "ESTÁ DE RECUPERAÇÃO!";
        }
        elseif ($media >= 7) {
            $situacao = "FOI APROVADO!";
        }
        else {
            $situacao = "FOI REPROVADO";
        }

        echo "VOCÊ TIROU $n1 E $n2";
        echo "<br>SUA MÉDIA É ".number_format($media,2);
        echo "<br>VOCÊ $situacao";
    ?>
</div>
</body>
</html>
