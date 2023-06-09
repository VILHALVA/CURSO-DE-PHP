<?php
class CLASSLUTA {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function apresentar() {
        echo "<p>=======================================</p>";
        echo "LUTADOR: " . $this->getNome() . "\n";
        echo "ORIGEM: " . $this->getNacionalidade() . "\n";
        echo "IDADE: " . $this->getIdade() . "\n";
        echo "ALTURA: " . $this->getAltura() . "\n";
        echo "PESO: " . $this->getPeso() . "\n";
        echo "VITORIAS: " . $this->getVitorias() . "\n";
        echo "DERROTAS: " . $this->getDerrotas() . "\n";
        echo "EMPATES " . $this->getEmpates() . "\n";
        echo "<p>=======================================</p>";
    }

    public function status() {
        echo "<p>=======================================</p>";
        echo $this->getNome();
        echo "É DA CATEGORIA " . $this->categoria;
        echo " TEVE " . $this->getVitorias() . " VITORIAS,";
        echo "COM " . $this->getDerrotas() . " DERROTAS,";
        echo "E " . $this->getEmpates() . " EMPATES.\n";
        echo "<p>=======================================</p>";
    }

    public function __construct($no, $na, $id, $pe, $al, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->setPeso($pe);
        $this->altura = $al;
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getCategoria() {
        return $this->categoria;
    }

    private function setCategoria() {
        if ($this->peso < 52.2) {
            $this->categoria = "Invalido";
        }
        else if ($this->peso >= 52.2 && $this->peso <= 70.3) {
            $this->categoria = "Leve";
        }
        else if ($this->peso > 70.3 && $this->peso <= 83.9) {
            $this->categoria = "Medio";
        }
        else if ($this->peso > 83.9 && $this->peso <= 120.2) {
            $this->categoria = "Pesado";
        }
        else {
            $this->categoria = "Inválido";
        }
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
    }

    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
}
