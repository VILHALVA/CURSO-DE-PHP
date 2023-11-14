<?php
session_start();
require("conecxao.php");

// Variaveis do emprestimo

    $valor_emprestimo = $_POST['valor_emprestimo'];
    $valor_atualizado = $saldo + $valor_emprestimo;

    $sql_update = "UPDATE conta SET saldo = '$valor_atualizado'";
    $query = mysqli_query($conecxao,$sql_update);
    $_SESSION['valor_empretado'] = true;
    header('Location: ../views/caixa.php');


?>

