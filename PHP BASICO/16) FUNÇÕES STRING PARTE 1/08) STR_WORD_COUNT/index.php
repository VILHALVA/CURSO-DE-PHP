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
        $frase = "EU VOU ESTUDAR PHP!";
        $count0 = str_word_count($frase,0);
        $count1 = str_word_count($frase,1);
        $count2 = str_word_count($frase,2);

        echo ("A FRASE: $frase TEM $count0 PALAVRAS<br/>");
        print_r($count1);
        print_r($count2);
    ?>
</div>
</body>
</html>
