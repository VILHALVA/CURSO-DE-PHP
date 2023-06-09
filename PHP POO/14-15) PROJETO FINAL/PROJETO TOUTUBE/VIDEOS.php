<?php

require_once 'ACOESVIDEO.php';
class VIDEOS implements ACOESVIDEO {
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->curtidas = 0;
        $this->views = 0;
        $this->reproduzindo = false;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao) {
        $nova = (int)(($this->avaliacao + $avaliacao) / $this->views);
        $this->avaliacao = $nova;
    }

    public function getViews() {
        return $this->views;
    }

    public function setViews($views) {
        $this->views = $views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    public function isReproduzindo() {
        return $this->reproduzindo;
    }

    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }

    public function play() {
        $this->reproduzindo = true;
    }

    public function pause() {
        $this->reproduzindo = false;
    }

    public function like() {
        $this->curtidas++;
    }

    public function __toString() {
        return "Video{titulo=" . $this->titulo . ", avaliacao=" . $this->avaliacao . ", views=" . $this->views . ", curtidas=" . $this->curtidas . ", reproduzindo=" . $this->reproduzindo . "}";
    }
}
?>
