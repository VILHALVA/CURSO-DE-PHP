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
        <table border="1"><tr>
        <?php
        $c = range(5,20,2);
        foreach ($c as $v) {
            echo " <td>$v ";
        }
        ?>
         </table>
    </pre>
</div>
</body>
</html>
