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
    function isPrimo($numero)
    {
        if ($numero <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $multiplos = array();
        $totalMultiplos = 0;

        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                $multiplos[] = $i;
                $totalMultiplos++;
            }
        }
        echo "<h1>ANALIZANDO O NÚMERO $numero</h1>";
        echo "NÚMERO: $numero<br>";
        echo "MÚLTIPLOS: " . implode(", ", $multiplos) . "<br>";
        echo "TOTAL DE MULTIPLOS: $totalMultiplos<br>";

        if (isPrimo($numero)) {
            echo "RESULTADO: O NÚMERO $numero É PRIMO.";
        }
        else {
            echo "RESULTADO: O NÚMERO $numero NÃO É PRIMO.";
        }
    }
    ?>
</div>
</body>
</html>
