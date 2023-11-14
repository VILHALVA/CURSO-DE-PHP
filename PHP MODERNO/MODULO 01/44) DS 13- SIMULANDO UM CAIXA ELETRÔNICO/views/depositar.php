<?php
session_start();
require("conecxao.php");

// Variaveis do deposito
$valor_deposito = $_POST['valor_deposito'];

if($valor_deposito < 0){
    $_SESSION['valor_indevido'] = true;
    header('Location: ../views/caixa.php');
}else{
    $valor_atualizado = $saldo + $valor_deposito;

    $sql_update = "UPDATE conta SET saldo = '$valor_atualizado'";
    $query = mysqli_query($conecxao,$sql_update);
    $_SESSION['valor_deposito'] = true;
    header('Location: ../views/caixa.php');
}


?>