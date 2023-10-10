<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="ESTILO.css">
</head>
<body>
<div>
    <pre>
    <?php
        require_once 'MAMIFERO.php';
        require_once 'LOBO.php';
        require_once 'CACHORRO.php';

        $x = new MAMIFERO();
        $x->emitirSom();

        $l = new LOBO();
        $l->emitirSom();

        $c = new CACHORRO();
        $c->emitirSom();
        $c->reagirFrase("ola"); // O PHP NÃO SUPORTA SOBRECARGA, O JEITO É CRIAR METODOS COM NOMES DIFERENTES.
        $c->reagirFrase("vai apanhar!");
        $c->reagirHora(11, 45);
        $c->reagirHora(21, 00);
        $c->reagirDono(true);
        $c->reagirDono(false);
        $c->reagirIdade(2, 12.5);
        $c->reagirIdade(7, 4.5);
    ?>
    </pre>
</div>
</body>
</html>
