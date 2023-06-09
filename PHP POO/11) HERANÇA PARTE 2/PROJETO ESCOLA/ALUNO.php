<?php

require_once 'PESSOA.php';
class ALUNO extends PESSOA {
    private $matricula;
    private $curso;

    public function pagarMensalidade() {
        echo "MENSALIDADE DO ALUNO $this->nome PAGA COM SUCESSO! \n";
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }
}