<footer>
<?php
// Verifica se os dados foram enviados pelo método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Realiza o processamento dos dados (por exemplo, salvar no banco de dados)
    
    // Exibe os dados processados
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
} else {
    // Se não foi enviado via POST, redireciona para a página do formulário
    header("Location: formulario.php");
    exit();
}
?>
</footer>
