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
        $a = 3;
        $b = "3";
        $igual = ($a==$b) ?"SIM" :"NÃO";
        $identico = ($a===$b) ?"SIM" :"NÃO";
        echo "$a E $b SÃO IGUAIS? R= $igual";
        echo "<br>$a E $b SÃO IDENTICAS? R= $identico";
    ?>
</div>
</body>
</html>
