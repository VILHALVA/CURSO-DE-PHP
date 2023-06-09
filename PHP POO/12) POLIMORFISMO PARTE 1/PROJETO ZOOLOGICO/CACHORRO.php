<?php

require_once 'MAMIFERO.php';
class CACHORRO extends MAMIFERO {
    public function locomover() {
        echo "<p>CACHORRO ANDANDO!<p>";
    }

    public function emetirSom() {
        echo "<p>CACHORRO LATINDO!</p>";
    }
}
