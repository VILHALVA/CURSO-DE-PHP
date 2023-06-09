<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            box-sizing: border-box;
        }

        body {
            background-color: #b91034;
            background-image: url("https://arquivo.devmedia.com.br/cursos/imagem/curso_preparando-o-ambiente-para-programar-em-php_2057.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;
            color: aliceblue;

            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;
        }

        div {
            background-image: linear-gradient(to bottom, red, black);
            margin: auto;
            padding: 40px;
        }
    </style>
</head>
<body>
<div>
    <?php
    // DIGITE NA URL DO NAVEGADOR OS VALORES DE A E B.
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $media = ($n1+$n2) / 2;
    $situacao = ($media >= 7) ?"APROVADO":"REPROVADO";
    echo "A NOTA 1 É $n1 A NOTA 2 É $n2";
    echo "<br>SUA MÉDIA É $media";
    echo "<br>SITUAÇÃO: $situacao";
    echo "<br>SITUAÇÃO: ".(($media >=7) ?"APROVADO":"REPROVADO");
    ?>
</div>
</body>
</html>
