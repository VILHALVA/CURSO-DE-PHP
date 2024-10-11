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
        <?php
        $v = array (array(2,3),
                    array(7,9),
                    array(3,4));
        print_r($v);

        $m = array (array(2,3),
                    array(7,9),
                    array(3,4));
        $m[0][1] = $m[2][1];
        print_r($m);
        ?>
    </pre>
</div>
</body>
</html>
