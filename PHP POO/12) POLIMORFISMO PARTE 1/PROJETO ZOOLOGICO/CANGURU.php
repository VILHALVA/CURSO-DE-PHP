<?php

require_once 'MAMIFERO.php';
class CANGURU extends MAMIFERO {
    public function usarBolsa() {
        echo "<p>USANDO BOLSA!</p>";
    }

    public function locomover() {
        echo "<p>SALTANDO!</p>";
    }
}
