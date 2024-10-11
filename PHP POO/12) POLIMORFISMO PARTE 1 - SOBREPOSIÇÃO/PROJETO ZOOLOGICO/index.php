<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CURSO DE PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <pre>
   <?php
        require_once 'MAMIFERO.php';
        require_once 'REPTIL.php';
        require_once 'PEIXE.php';
        require_once 'AVE.php';
        require_once 'CANGURU.php';
        require_once 'CACHORRO.php';
        require_once 'COBRA.php';
        require_once 'TARTARUGA.php';
        require_once 'GOLDFISH.php';
        require_once 'ARARA.php';

        $m = new MAMIFERO();
        $m->setCorPelo("MARROM");
        $m->setPeso(35.6);
        $m->alimentar();
        $m->emetirSom();
        $m->locomover();

        $r = new REPTIL();
        $r->setCorEscama("ROSA");
        $r->setIdade(22);
        $r->setMembros(0);
        $r->setPeso(2);
        $r->alimentar();
        $r->emetirSom();
        $r->locomover();

        $p = new PEIXE();
        $p->setCorEscama("PRETO");
        $p->setIdade(5);
        $p->setMembros(0);
        $p->setPeso(4);
        $p->soltarBolha();
        $p->alimentar();
        $p->emetirSom();
        $p->locomover();

        $a = new AVE();
        $a->setCorPena("BRANCA");
        $a->setIdade(15);
        $a->setMembros(2);
        $a->setPeso(1);
        $a->alimentar();
        $a->emetirSom();
        $a->fazendoNinho();
        $a->locomover();

        $c = new CANGURU();
        $c->usarBolsa();
        $c->locomover();

        $k = new CACHORRO();
        $k->locomover();
        $k->emetirSom();

        $o = new COBRA();
        $o->locomover();
        $o->emetirSom();

        $t = new TARTARUGA();
        $t->locomover();
        $t->emetirSom();

        $g = new GOLDFISH();
        $g->locomover();
        $g->emetirSom();

        $w = new ARARA();
        $w->locomover();
        $w->emetirSom();
?>
</pre>
</div>
</body>
</html>
