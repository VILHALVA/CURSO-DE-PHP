<?php

require_once 'ANIMAL.php';
class REPTIL extends ANIMAL {
    private $corEscama;

    public function locomover() {
        echo "<p>RASTEJANDO!<p>";
    }

    public function alimentar() {
        echo "<p>COMENDO VEGETAIS!</p>";
    }

    public function emetirSom() {
        echo "<p>SOM DE REPTIL!</p>";
    }

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    function emitirSom()
    {
        // TODO: Implement emitirSom() method.
    }
}
