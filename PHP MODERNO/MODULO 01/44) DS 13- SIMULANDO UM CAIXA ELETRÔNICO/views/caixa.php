<?php
session_start();
require("conecxao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../front/css/stylepage.css">
    <title>caixa eletronico</title>


</head>

<body>
    <header>
        <img src="../front/img/logo-caixa-41269.png" alt="">
        <h3>| AUTO ATENDIMENTO</h3>
    </header>

    <div class="painel">
        <div class="box1">
            <div class="btn1">
                <input type="submit" value="ÓLA,BEM VINDO">
                <input type="submit" value="SALDO">
                <input type="submit" value="SAIR">
            </div>
        </div>
        <div class="operacoes1">
            <img src="../front/img/pote.png" alt="">
            <P>Seu saldo</P><br>
            <b>R$
                <?php
                echo $saldo;
                ?>
            </b>
        </div>

        <div class="operacoes">
            <div class="container">
                <h5>DIGITE O VALOR QUE VOCÊ DESEJA SACAR</h5>
                <form class="botao"  action="sacar.php" method="POST">
                    <input type="number" min="1" placeholder="0,00" name="valor_saque">
                    <button type="submit">sacar</button>
                </form>
<!--Mensagem Erro de valor indevido -->
                <?php
                    if(isset($_SESSION['valor_indevido'])){
                        echo "<script language='javascript'>
                                alert('Por favor insira um valor válido!');
                                </script>" ;
                    }
                    unset($_SESSION['valor_indevido']);
                ?>
<!--Mensagem Saque efetuado com sucesso -->
                <?php
                    if(isset($_SESSION['valor_sacado'])){
                        echo "<script language='javascript'>
                                alert('Saque efetuado com sucesso!');
                                </script>" ;
                    }
                    unset($_SESSION['valor_sacado']);
                ?> 
            </div>
            <div class="container">
                <h5>DIGITE O VALOR QUE VOCÊ DESEJA DEPOSITAR</h5>
                <form class="botao" action="depositar.php" method="POST">
                    <input type="number" min="1" placeholder="0,00" name="valor_deposito">
                    <button type="submit">depositar</button>
                </form>
<!--Mensagem Deposito realizado com sucesso -->
                <?php
                    if(isset($_SESSION['valor_deposito'])){
                        echo "<script language='javascript'>
                        alert('Deposito efetuado com sucesso!');
                        </script>" ;
                    }
                    unset($_SESSION['valor_deposito']);
                ?>
            </div>
            <div class="container">
                <h5>DIGITE O VALOR PARA PEGAR EMPRESTADO</h5>
                <form class="botao"  action="emprestar.php" method="POST">
                    <input type="number"min="1"  placeholder="0,00" name="valor_emprestimo" >
                    <button type="submit">Solicitar valor</button>
                </form>
<!--Mensagem Espretimo realizado com sucesso -->
                <?php
                    if(isset($_SESSION['valor_empretado'])){
                        echo "<script language='javascript'>
                        alert('Empretimo efetuado com sucesso!');
                        </script>" ;
                    }
                    unset($_SESSION['valor_empretado'])
                ?>
            </div>
        </div>
        <div class="box2">
            <div class="btn2">
                <input name="" type="submit" value="SAQUE">
                <input type="submit" value="DEPOSITAR">
                <input type="submit" value="EMPRESTIMO">
            </div>
        </div>
    </div>
    </div>


    <footer id="textofooter">
    </footer>
</body>

</html>