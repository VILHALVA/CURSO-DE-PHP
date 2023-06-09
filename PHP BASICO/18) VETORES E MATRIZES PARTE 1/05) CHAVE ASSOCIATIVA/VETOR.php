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
        $cad = array ("NOME" => "ANA",
                    "iDADE" => 23,
                    "PESO" => 78.5);
        $cad["FUMA"] = true;

        foreach ($cad as $campo => $valor) {
            echo "<br>O CAMPO $campo POSSUI $valor";
        }
        ?>
    </pre>
</div>
</body>
</html>
