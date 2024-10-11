<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <form method="get" action="form.php">
        <?php
        $c = 1;
        while ($c <= 5) {
            echo "VALOR $c: <input type='number' name='v$c' min='0' max='100' value='0'><br/>";
            $c++;
        }
        ?>
        <input type="submit" value="GERAR">
    </form>
</div>
</body>
</html>
