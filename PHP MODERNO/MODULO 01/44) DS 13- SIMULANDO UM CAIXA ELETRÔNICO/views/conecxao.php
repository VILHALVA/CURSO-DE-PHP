<?php

$local ="localhost";
$user ="root";
$pass ="";
$banco = "caixaeletronico";

$conecxao = mysqli_connect ( $local, $user, $pass, $banco);
    
if(!$conecxao) {
        echo "Falha na conexão!";
}else{
    $sql_select ="SELECT * FROM conta WHERE saldo";
    $query = mysqli_query($conecxao,$sql_select);
    $result_select =mysqli_fetch_row($query);

    if($result_select){
        $saldo =$result_select[0];
    } else {
        $saldo =0;
    }
}


?>