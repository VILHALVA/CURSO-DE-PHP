<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]:"TEXTO GENERICO";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>
    <?php
        echo "<span class='texto'>$txt</span>"
    ?>
</div>
</body>
</html>
