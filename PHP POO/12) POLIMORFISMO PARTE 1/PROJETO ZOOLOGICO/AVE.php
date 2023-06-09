<?php

require_once 'ANIMAL.php';
class AVE extends ANIMAL {
    private $corPena;

    public function fazendoNinho() {
        echo "CONSTRUINDO UM NINHO!" . PHP_EOL;
    }

    public function locomover() {
        echo "VOANDO!" . PHP_EOL;
    }

    public function alimentar() {
        echo "COMENDO FRUTAS!" . PHP_EOL;
    }

    public function emetirSom() {
        echo "SOM DE AVE!" . PHP_EOL;
    }

    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

    function emitirSom()
    {
        // TODO: Implement emitirSom() method.
    }
}
