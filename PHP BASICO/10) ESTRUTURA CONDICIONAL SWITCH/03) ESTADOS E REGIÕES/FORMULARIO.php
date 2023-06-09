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
        $estado = isset($_GET["ESTADO"])?$_GET["ESTADO"]:0;
        switch ($estado) {
            case 1:
                echo "ESSE ESTADO FAZ PARTE DA REGIÃO NORTE";
                break;
            case 2:
                echo "ESSE ESTADO FAZ PARTE DA REGIÃO NORDESTE";
                break;
            case 3:
                echo "ESSE ESTADO FAZ PARTE DA REGIÃO CENTRO-OESTE";
                break;
            case 4:
                echo "ESSE ESTADO FAZ PARTE DA REGIÃO SUDESTE";
                break;
            case 5:
                echo "ESSE ESTADO FAZ PARTE DA REGIÃO SUL";
                break;
        }
    ?>
    <br>
    <a href="FORMULARIO.html">VOLTAR</a>
</div>
</body>
</html>
