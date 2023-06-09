<?php
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    public function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>ERRO! NÃO POSSO RABISCAR PORQUE ESTOU TAMPADA!</p>";
        }
        else {
            echo "<p>ESTOU RABISCANDO!</p>";
        }
    }
    public function tampar() {
        $this->tampada = true;
    }
    private function destampar() {
        $this->tampada = false;
    }
}