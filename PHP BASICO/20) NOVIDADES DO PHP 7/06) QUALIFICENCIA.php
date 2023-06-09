<?php
    // $n = isset($_GET["n"])?$_GET["n"]:"NENHUM!";
    $n = $_GET["n"] ?? "NENHUM";
    echo "O VALOR DIGITADO FOI $n";
?>
