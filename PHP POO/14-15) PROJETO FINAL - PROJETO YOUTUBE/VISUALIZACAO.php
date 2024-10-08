<?php

require_once 'VIDEOS.php';
require_once 'GAFANHOTO.php';
class VISUALIZACAO {
    private $espectador;
    private $filme;

    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }

    public function avaliarComNota($nota) {
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarComPorcentagem($porcentagem) {
        $tot = 0;
        if ($porcentagem <= 20) {
            $tot = 3;
        }
        elseif ($porcentagem <= 50) {
            $tot = 5;
        }
        elseif ($porcentagem <= 90) {
            $tot = 8;
        } else {
            $tot = 10;
        }
        $this->filme->setAvaliacao($tot);
    }

    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        $this->filme->setViews($this->filme->getViews() + 1);
    }

    public function getEspectador() {
        return $this->espectador;
    }

    public function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setFilme($filme) {
        $this->filme = $filme;
    }

    public function __toString() {
        return "Visualizacao{espectador=" . $this->espectador . ", filme=" . $this->filme . "}";
    }
}
?>
