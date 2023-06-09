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
        $num1 = 22;
        $num2 = 40;
        $soma = $num1 + $num2;
        $multiplicacao = $num1 * $num2;
        $divisao = $num1 / $num2;
        $resto = $num1 % $num2;
        $subtracao = $num1 - $num2;

        echo "A SOMA ENTRE $num1 E $num2 VALE $soma";
        echo "<br>A MULTIPLICAÇÃO ENTRE $num1 E $num2 VALE $multiplicacao";
        echo "<br>A DIVISÃO ENTRE $num1 E $num2 VALE $divisao";
        echo "<br>O RESTO DA DIVISÃO ENTRE $num1 E $num2 VALE $resto";
        echo "<br>A SUBTRAÇÃO ENTRE $num1 E $num2 VALE $subtracao";
    ?>
</div>
</body>
</html>
