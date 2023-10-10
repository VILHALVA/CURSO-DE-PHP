<?php

require_once 'ANIMAL.php';
class MAMIFERO extends ANIMAL {
    protected $corPelo;

    public function emitirSom() {
        echo "<p>SOM DE MAMIFERO!</p>";
    }
}

