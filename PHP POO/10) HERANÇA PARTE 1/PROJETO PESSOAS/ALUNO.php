<?php

require_once 'PESSOA.php';
class ALUNO extends PESSOA {
    private $matr;
    private $curso;

    public function cancelarMatr() {
        echo "MATRÍCULA CANCELADA COM SUCESSO!\n";
    }

    public function getMatr() {
        return $this->matr;
    }

    public function setMatr($matr) {
        $this->matr = $matr;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }
}

