<?php
interface CONTROLADOR {
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
}

/*
 * QUESTÃO: public abstract function metodo(); está dando erro quando feito na interface PHP!
 * RESPOSTA:
 * Isso ocorre porque o modificador "abstract" não pode ser aplicado a métodos em uma interface PHP.
 * Este modificador é utilizado apenas em classes abstratas em PHP.
 * Nas interfaces PHP, todos os métodos são considerados "abstract" implicitamente,
 * o que significa que eles são definidos apenas na assinatura e não possuem uma implementação real.
 * Portanto, você deve remover a palavra-chave "abstract" da sua interface PHP.
 * Se você precisar que a implementação do método seja definida na classe que implementa a interface,
 * você pode usar a palavra-chave "implement" para garantir que o método seja implementado corretamente. Por exemplo:
     interface IMeuInterface {
        public function ligarMudo();
    }

    class MinhaClasse implements IMeuInterface {
        public function ligarMudo() {
            // implementação do método
        }
    }

* Neste exemplo, a classe "MinhaClasse" implementa a interface "IMeuInterface" e
 * fornece uma implementação real para o método "ligarMudo()".
 */