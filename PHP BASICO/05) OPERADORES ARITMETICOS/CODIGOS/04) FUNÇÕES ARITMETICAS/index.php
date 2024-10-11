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
    // DIGITE NA URL DO NAVEGADOR OS VALORES DE X E Y.
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];

        $absoluto = abs($v1);
        $potenciacao = pow($v2, $v1);
        $raiz = sqrt($v1);
        $arredondamento = round($v2); // CEIL -> ARREDONDA PRA CIMA. FLOOR -> ARREDONDA PRA BAIXO.
        $inteiro = intval($v1);
        $formacao = number_format($v1,2, ",", ".");

        echo "OS VALORES $v1 E $v2 FORAM RECEBIDAS COM SUCESSO!";
        echo "<br>O VALOR ABSOLUTO DE $v1 É $absoluto";
        echo "<br>A POTENCIAÇÃO DE $v2<sup>$v1</sup> É $potenciacao";
        echo "<br>A RAIZ QUADRADA DE $v1 É $raiz";
        echo "<br>O ARREDONDAMENTO DE $v2 É $arredondamento";
        echo "<br>A PARTE INTEIRA DE $v1 É $inteiro";
        echo "<br>O VALOR DE $v1 FORMATADO EM MOEDA É R$$formacao";
    ?>
</div>
</body>
</html>
