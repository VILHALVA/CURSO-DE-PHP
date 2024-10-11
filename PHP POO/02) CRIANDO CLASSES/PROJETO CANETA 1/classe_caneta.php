<?php
class classe_caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>ERRO! NÃO POSSO RABISCAR PORQUE ESTOU TAMPADA!</p>";
        }
        else {
            echo "<p>ESTOU RABISCANDO!</p>";
        }
    }
    function tampar() {
        $this->tampada = true;
    }
    function destampar() {
        $this->tampada = false;
    }
}