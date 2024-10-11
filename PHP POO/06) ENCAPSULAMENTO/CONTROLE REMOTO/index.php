<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <pre>
        <h1>PROJETO CONTROLE REMOTO</h1>
    <?php
        require "CONTROLEREMOTO.php";
        $c1 = new CONTROLEREMOTO();
        $c1->ligar();
        $c1->maisVolume();
        $c1->ligarMudo();
        $c1->desligarMudo();
        $c1->play();
        $c1->abrirMenu();
        $c1->fecharMenu();
    ?>
    </pre>
</div>
</body>
</html>
