<?php

class CLASSBANCO
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $Status;

    public function __construct() {
        $this->setSaldo(0);
        $this->getStatus(false);
    }

    public function getNumConta()
    {
        return $this->numConta;
    }
    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function setDono($dono)
    {
        $this->dono = $dono;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
    public function getStatus()
    {
        return $this->Status;
    }
    public function setStatus($Status)
    {
        $this->Status = $Status;
    }

    public function AbrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);

        if ($t == "CC") {
            $this->setSaldo(50);
        }

        elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }

    public function FecharConta() {
        if ($this->getSaldo() > 0) {
            print("<p>ERRO: NÃO É POSSIVEL FECHAR CONTA! ESSA CONTA AINDA TEM DINHEIRO!</p>");
        }

        elseif ($this->getSaldo() < 0) {
            print("<p>ERRO: NÃO É POSSIVEL FECHAR CONTA! VOCÊ ESTÁ DEVENDO DINHEIRO!</p>");
        }

        else {
            print("<p>FECHAMENTO DA CONTA EFETUADO COM SUCESSO!</p>");
            $this->setStatus(False);
        }
    }

    public function Sacar($v) {
        if ($this->getStatus()) {
           if ($this->getSaldo() >= $v) {
               $this->setSaldo($this->getSaldo() - $v);
               echo "<p>SAQUE DE $v FOI AUTORIZADO NO NOME DE $this->dono</p>";
           }
           else {
               print("<p>ERRO: SALDO INSUFICIENTE PARA SACAR $v!</p>");
           }
        }
        else {
            print("<p>ERRO: IMPOSSIVEL SACAR! SUA CONTA ESTÁ FECHADA!</p>");
        }
    }

    public function Depositar($v) {
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>DEPOSITO DE $v FOI AUTORIZADO NO NOME DE $this->dono</p>";
        }

        else {
            print("<p>ERRO: IMPOSSIVEL DEPOSITAR</p>");
        }
    }

    public function PagarMensal() {
        if ($this->getTipo() == "CC") {
            $v = 12;
        }

        elseif ($this->getTipo() == "CP") {
            $v = 20;
        }

        if ($this->getStatus() == true) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>O PAGAMENTO MENSAL DE $v FOI AUTORIZADO NO NOME DE $this->dono</p>";
            }
            else {
                print("<p>ERRO: IMPOSSIVEL PAGAR!</p>");
            }
        }
    }
