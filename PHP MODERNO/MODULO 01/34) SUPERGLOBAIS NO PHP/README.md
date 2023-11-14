# SUPERGLOBAIS NO PHP
As superglobais no PHP são variáveis internas que estão sempre disponíveis, independentemente do escopo. Elas são chamadas "superglobais" porque podem ser acessadas de qualquer lugar do script PHP, inclusive dentro de funções ou métodos. Aqui estão algumas das superglobais mais comuns no PHP:

1. **$GLOBALS:**
   - Contém todas as variáveis globais em um array associativo.

    ```php
    $x = 10;
    $y = 20;

    function soma() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    soma();
    echo $z; // Saída: 30
    ```

2. **$_SERVER:**
   - Contém informações sobre o servidor e a execução do script.

    ```php
    echo $_SERVER['SERVER_NAME']; // Nome do servidor
    echo $_SERVER['REQUEST_METHOD']; // Método da requisição (GET, POST, etc.)
    ```

3. **$_GET e $_POST:**
   - Contêm dados enviados para o script por meio de requisições GET ou POST.

    ```php
    // Exemplo de URL: http://example.com/index.php?nome=Joao
    echo $_GET['nome']; // Saída: Joao
    ```

4. **$_SESSION:**
   - Contém variáveis de sessão, que são usadas para armazenar informações do usuário entre requisições.

    ```php
    session_start();
    $_SESSION['usuario'] = 'joao';
    ```

5. **$_COOKIE:**
   - Contém os valores dos cookies enviados pelo cliente.

    ```php
    echo $_COOKIE['preferencia_cor']; // Valor do cookie 'preferencia_cor'
    ```

6. **$_FILES:**
   - Contém informações sobre arquivos enviados por meio do formulário.

    ```php
    echo $_FILES['arquivo']['name']; // Nome original do arquivo
    ```

7. **$_REQUEST:**
   - Contém dados das requisições HTTP. Pode conter dados de $_GET, $_POST e $_COOKIE.

    ```php
    echo $_REQUEST['usuario']; // Pode ser de $_GET, $_POST ou $_COOKIE
    ```

8. **$_ENV:**
   - Contém variáveis de ambiente do sistema.

    ```php
    echo $_ENV['HOME']; // Diretório home do usuário
    ```

9. **$_SESSION:**
   - Contém variáveis de sessão que persistem entre diferentes requisições do mesmo usuário.

    ```php
    session_start();
    $_SESSION['usuario'] = 'joao';
    ```

10. **$_REQUEST:**
    - Contém dados das requisições HTTP. Pode conter dados de $_GET, $_POST e $_COOKIE.

    ```php
    echo $_REQUEST['usuario']; // Pode ser de $_GET, $_POST ou $_COOKIE
    ```

Essas superglobais fornecem uma maneira fácil de acessar informações cruciais em diferentes partes de um script PHP. No entanto, deve-se ter cuidado ao usar essas variáveis, especialmente quando se lida com dados fornecidos pelo usuário, para evitar vulnerabilidades de segurança, como injeção de código.