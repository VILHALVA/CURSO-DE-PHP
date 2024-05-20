<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    // Calcula a soma
    $soma = $numero1 + $numero2;
}
?>
