# INTEGRAÇÃO COM HTML
Integrar código PHP com HTML é uma parte fundamental do desenvolvimento da web, pois permite criar páginas dinâmicas que podem exibir informações e responder a ações do usuário. Neste artigo, vamos explorar como integrar código PHP com HTML, fornecer exemplos de código e explicar como criar páginas web interativas.

## INCORPORANDO PHP EM HTML:
Para incorporar código PHP em uma página HTML, você precisa usar as tags PHP especiais `<?php` e `?>`. O código PHP deve estar dentro dessas tags e pode ser colocado em qualquer lugar no seu arquivo HTML.

```html
<!DOCTYPE html>
<html>
<head>
    <title>Página com PHP</title>
</head>
<body>
    <h1>Integração PHP e HTML</h1>
    
    <?php
        // Código PHP aqui
        $nome = "João";
        echo "Olá, $nome!";
    ?>

    <p>Esta é uma página HTML com código PHP incorporado.</p>
</body>
</html>
```

Observe que o código PHP é executado no servidor antes da página ser enviada ao navegador, portanto, apenas o resultado da execução (no caso, "Olá, João!") é exibido na página HTML.

## IMPRIMINDO VARIÁVEIS PHP EM HTML:
Uma das tarefas mais comuns é imprimir o valor de variáveis PHP em um documento HTML. Você pode fazer isso usando `echo` ou `print` para exibir o conteúdo de variáveis no lugar desejado do HTML.

```html
<!DOCTYPE html>
<html>
<head>
    <title>Página com PHP</title>
</head>
<body>
    <h1>Integração PHP e HTML</h1>
    
    <?php
        $nome = "Maria";
        echo "<p>Olá, $nome!</p>";
    ?>

    <p>Esta é uma página HTML com código PHP incorporado.</p>
</body>
</html>
```

Neste exemplo, a variável `$nome` é impressa no parágrafo HTML.

## FORMULÁRIOS HTML E PHP:
Formulários HTML são outra área onde a integração entre PHP e HTML é poderosa. Você pode criar formulários que enviam dados para o servidor PHP para processamento.

```html
<!DOCTYPE html>
<html>
<head>
    <title>Formulário com PHP</title>
</head>
<body>
    <h1>Formulário PHP</h1>
    
    <form method="post" action="processar.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
```

Neste exemplo, o formulário HTML envia os dados para o servidor PHP através da ação `action="processar.php"`. Você pode então criar um arquivo PHP (`processar.php`) para processar os dados do formulário e responder com HTML ou realizar ações no servidor.

## CONCLUSÃO
A integração entre PHP e HTML é fundamental para criar páginas web dinâmicas e interativas. Você pode incorporar código PHP em documentos HTML, imprimir variáveis PHP no conteúdo HTML e criar formulários que enviam dados para scripts PHP no servidor. Esta combinação de tecnologias permite a criação de aplicativos web poderosos e flexíveis. Lembre-se de praticar e experimentar para aprimorar suas habilidades de desenvolvimento web com PHP.