<?php

require_once 'LOBO.php';
class CACHORRO extends LOBO {
    public function emitirSom() {
        echo "<p>AU! AU! AU!</p>";
    }

    public function reagirFrase($frase) {
        if ($frase == "toma comida" || $frase == "ola") {
            echo "<p>ABANAR E LATIR!</p>";
            $this->emitirSom();
        }
        else {
            echo "<p>ROSNAR!</p>";
        }
    }

    public function reagirHora($hora, $min) {
        if ($hora < 12) {
            echo "<p>ABANAR!</p>";
        }
        else if ($hora >= 18) {
            echo "<p>IGNORAR!</p>";
        }
        else {
            echo "<p>ABANAR E LATIR!</p>";
        }
    }

    public function reagirDono($dono) {
        if ($dono == true) {
            echo "<p>ABANAR</p>";
        }
        else {
            echo "<p>ROSNAR E LATIR!</p>";
            $this->emitirSom();
        }
    }

    public function reagirIdade($idade, $peso) {
        if ($idade < 5) {
            if ($peso < 10) {
                echo "<p>ABANAR</p>";
            }
            else {
                echo "<p>LATIR!</p>";
                $this->emitirSom();
            }
        }
        else {
            if ($peso < 10) {
                echo "<p>ROSNAR!</p>";
            }
            else {
                echo "<p>IGNORAR!</p>";
            }
        }
    }
}

