<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="ESTILO.css">
</head>
<body>
<div>
    <pre>
        <?php
        $v = array(5=>"C", 7=>"A", 1=>"Z", 4=>"D", 2=>"B");
        print_r($v);

        sort($v); //-> ORDEM CRESCENTE.
        print_r($v);

        rsort($v);  //-> ORDEM DESCRESCENTE.
        print_r($v);

        asort($v);  //-> ORDEM CRESCENTE COM MODIFICAÇÃO NO INDICE.
        print_r($v);

        arsort($v); //-> ORDEM DESCRESCENTE COM MODIFICAÇÃO NO INDICE.
        print_r($v);

        ksort($v); //-> ORDEM CRESCENTE APENAS PARA INDICE (CHAVES).
        print_r($v);

        krsort($v); //-> ORDEM DESCRESCENTE APENAS PARA INDICE (CHAVES).
        print_r($v);
        ?>
    </pre>
</div>
</body>
</html>
