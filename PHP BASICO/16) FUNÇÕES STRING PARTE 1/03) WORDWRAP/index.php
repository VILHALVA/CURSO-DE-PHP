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
        $txt = "AQUI TEMOS UM TEXTO CRIADO PELO PHP E VAI MOSTRAR O FUNCIONAMENTO DA FUNÇÃO WORDWRAP";
        $res = wordwrap($txt, 20,"<br/>\n", false);
        echo ($res);
    ?>
</div>
</body>
</html>
