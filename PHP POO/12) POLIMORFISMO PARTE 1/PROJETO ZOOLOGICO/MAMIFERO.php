<?php

require_once 'ANIMAL.php';
class MAMIFERO extends ANIMAL {
    private $corPelo;

    public function locomover() {
        echo "<p>CORRENDO!</p>";
    }

    public function alimentar() {
        echo "<p>MAMANDO!</p>";
    }

    public function emetirSom() {
        echo "<p>SOM DE MAMIFERO!</p>";
    }

    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }

    function emitirSom()
    {
        // TODO: Implement emitirSom() method.
    }
}
