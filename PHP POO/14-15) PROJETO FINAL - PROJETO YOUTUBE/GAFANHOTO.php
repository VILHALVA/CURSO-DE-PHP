<?php

require_once 'PESSOA.php';
class GAFANHOTO extends PESSOA {
    private $login;
    private $totAssistido;

    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }

    public function __toString() {
        return "Gafanhoto{" . parent::__toString() . "login=" . $this->login . ", totAssistido=" . $this->totAssistido . '}';
    }
}
?>
