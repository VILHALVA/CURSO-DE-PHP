<?php

require_once 'ANIMAL.php';
class PEIXE extends ANIMAL {
    private $corEscama;

    public function soltarBolha() {
        echo "<p>SOLTOU UMA BOLHA!</p>";
    }

    public function locomover() {
        echo "<p>NADANDO!</p>";
    }

    public function alimentar() {
        echo "<p>COMENDO ESCAMAS!</p>";
    }

    public function emetirSom() {
        echo "<p>PEIXE NÃO FAZ SOM!</p>";
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
