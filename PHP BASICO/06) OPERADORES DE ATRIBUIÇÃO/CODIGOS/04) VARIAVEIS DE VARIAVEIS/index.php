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
        $x = "abc";
        $$x = "def";
        echo "O CONTEÚDO DA VARIAVEL X É $x";
        echo "<br>A VARIAVEL ABC É $abc";
    ?>
</div>
</body>
</html>
