<?php
abstract class PESSOA {
    protected $nome;
    protected $idade;
    protected $sexo;

    public final function fazerAniversario() {
        $this->idade++;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function __toString() {
        return "<hr>DADOS { nome=" . $this->nome . ", idade=" . $this->idade . ", sexo=" . $this->sexo . " }";
    }
}

