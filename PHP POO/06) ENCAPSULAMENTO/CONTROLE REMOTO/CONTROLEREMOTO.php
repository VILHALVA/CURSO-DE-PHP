<?php

require_once "CONTROLADOR.php";
class CONTROLEREMOTO implements CONTROLADOR {
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct() {
        $this->volume = 50;
        $this->ligado = true;
        $this->tocando = false;
    }
    private function getVolume(): int
    {
        return $this->volume;
    }
    private function setVolume(int $volume)
    {
        $this->volume = $volume;
    }
    private function getLigado(): bool
    {
        return $this->ligado;
    }
    private function setLigado(bool $ligado)
    {
        $this->ligado = $ligado;
    }
    private function getTocando(): bool
    {
        return $this->tocando;
    }
    private function setTocando(bool $tocando)
    {
        $this->tocando = $tocando;
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function abrirMenu() {
        print("<p>---------MENU----------------</p>");
        echo "<br>ESTÁ LIGADO? " .($this->getLigado()?"SIM":"NÃO");
        echo "<br>ESTÁ TOCANDO? ".($this->getTocando()?"SIM":"NÃO");
        print("<p>VOLUME: $this->volume</p>");
        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            print("|");
        }
            print("");
            print("<p>-----------------------------</p>");
    }

    public function fecharMenu() {
        print("<p>FECHANDO O MENU...</p>");
    }

    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
        else {
            print("<p>IMPOSSIVEL AUMENTAR VOLUME!</p>");
        }
    }

    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }
        else {
            print("<p>IMPOSSIVEL DIMINUIR VOLUME!</p>");
        }
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
        else {
            print("<p>IMPOSSIVEL REPRODUZIR!</p>");
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
        else {
            print("<p>IMPOSSIVEL PAUSAR!</p>");
        }
    }
}
