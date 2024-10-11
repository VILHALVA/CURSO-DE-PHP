<?php
class classe_caneta {
    private $modelo;
    private $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function __construct($m, $c, $p, $k) { // O CONSTRUTOR PODE TER O MESMO NOME DA CLASSE.
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->carga = $k;
        $this->tampar();
    }
    public function getTampada()
    {
        return $this->tampada;
    }
    public function setTampada($tampada)
    {
        $this->tampada = $tampada;
        return $this;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
        return $this;
    }
    public function getCor()
    {
        return $this->cor;
    }
    public function setCor($cor)
    {
        $this->cor = $cor;
        return $this;
    }
    public function getPonta()
    {
        return $this->ponta;
    }
    public function setPonta($ponta)
    {
        $this->ponta = $ponta;
    }
    public function getCarga()
    {
        return $this->carga;
    }
    public function setCarga($carga)
    {
        $this->carga = $carga;
    }
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