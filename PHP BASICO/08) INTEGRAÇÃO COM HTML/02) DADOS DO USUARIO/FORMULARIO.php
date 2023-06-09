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
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[NÃO HÁ DADOS]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[NÃO HÁ DADOS]";
        $idade = date("Y") - $ano;

        echo "SEU NOME É $nome. VOCÊ TEM $idade ANOS. SENDO $sexo</br>";
    ?>
    <a href="FORMULARIO.html">VOLTAR</a>
</div>
</body>
</html>
