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
        $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
        $idade = date("Y") - $ano;
        echo "VOCÊ NASCEU $ano. TENDO $idade ANOS!<br>";

        if ($idade >= 18 && $idade < 65) {
            $votar = "DEVE VOTAR!";
            $dirigir = "PODE DIRIGIR!";
        }
        elseif (($idade >= 16 && $idade < 18) || ($idade >= 65)) {
            $votar = "PODE VOTAR OPCIONALMENTE!";
            $dirigir = "NÃO PODE DIRIGIR!";
        }
        else {
            $votar = "NÃO PODE VOTAR!";
            $dirigir = "NÃO PODE DIRIGIR!";
        }
        echo "COM ESSA IDADE, VOCÊ $votar E $dirigir";
    ?>
</div>
</body>
</html>
