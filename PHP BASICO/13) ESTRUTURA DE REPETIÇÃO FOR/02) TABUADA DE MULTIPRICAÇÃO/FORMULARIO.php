<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="ESTILO.css">
</head>
<body>
<div>
    <form method="get" action="CALCULO.php">
        <select name="num" id="num">
            <?php
                for ($c= 1; $c <= 10; $c++) {
                    echo "<option>$c</option>";
                }
            ?>
        </select>
        <input type="submit" value="GERAR">
    </form>
</div>
</body>
</html>
