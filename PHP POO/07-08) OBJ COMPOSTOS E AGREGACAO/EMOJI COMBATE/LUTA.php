<?php

require_once "CLASSLUTA.php";
class LUTA {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovado;

    public function getDesafiado() {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    public function getAprovado() {
        return $this->aprovado;
    }

    public function setAprovado($aprovado) {
        $this->aprovado = $aprovado;
    }

    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria() && $l1 !== $l2) {
            $this->aprovado = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }
        else {
            $this->aprovado = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar() {
        if ($this->aprovado) {
            echo "#### DESAFIADO: ####\n";
            $this->desafiado->apresentar();
            echo "#### DESAFIANTE: ####\n";
            $this->desafiante->apresentar();

            $aleatorio = rand(0, 2);
            switch ($aleatorio) {
                case 0: //EMPATE.
                    echo "LUTA EMPATADA!\n";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;

                case 1: //GANHOU DESAFIADO.
                    echo $this->desafiado->getNome() . " GANHOU A LUTA!\n";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;

                case 2: //GANHOU DESAFIANTE.
                    echo $this->desafiante->getNome() . " GANHOU A LUTA!\n";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        }
        else {
            echo "A LUTA NÃO PODE ACONTECER!\n";
        }
    }
}

