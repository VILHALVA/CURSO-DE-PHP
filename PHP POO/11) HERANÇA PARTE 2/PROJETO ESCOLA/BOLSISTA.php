<?php

require_once 'ALUNO.php';

class BOLSISTA extends ALUNO {
    private $bolsa;

    public function renovarBolsa() { // SÓ DE COPIAR O METODO (NÃO PRECISA COLOCAR "@ovirrede"), O BOLSISTA IRÁ SE SOBREPOR AO ALUNO.
        echo "BOLSA RENOVADA COM SUCESSO DE " . $this->getNome() . "\n";
    }

    public function pagarMensalidade() {
        echo $this->getNome() . " É BOLSISTA. PAGAMENTO FACILITADO!\n";
    }

    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }
}
