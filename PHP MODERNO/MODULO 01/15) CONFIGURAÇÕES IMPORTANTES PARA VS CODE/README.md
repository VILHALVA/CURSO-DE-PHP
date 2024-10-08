# CONFIGURAÇÕES IMPORTANTES PARA VS CODE
O Visual Studio Code (VS Code) é um editor de código-fonte leve e altamente extensível que suporta uma variedade de linguagens, incluindo PHP. Aqui estão algumas configurações importantes e extensões recomendadas para configurar o ambiente de desenvolvimento PHP no VS Code:

## 1. **INSTALAR O VS CODE:**
  - Baixe e instale o Visual Studio Code no [site oficial](https://code.visualstudio.com/).

## 2. **INSTALAR EXTENSÕES PHP:**
  - Existem várias extensões disponíveis para PHP no VS Code. Duas extensões populares são:
    - **PHP Intelephense:** Oferece recursos como IntelliSense, renomeação de código, análise de tipo, e muito mais.
    - **PHP Debug:** Permite a depuração de código PHP diretamente no VS Code.

  - Você pode instalar essas extensões diretamente da barra lateral do VS Code, clicando no ícone de extensões ou usando o comando `Ctrl + Shift + X`.

## 3. **CONFIGURAR AS CONFIGURAÇÕES DO PHP:**
  - Abra as configurações do usuário do VS Code (`settings.json`) clicando em `File -> Preferences -> Settings` ou usando o atalho `Ctrl + ,`.
  - Adicione as configurações específicas do PHP no arquivo `settings.json`. Por exemplo:

    ```json
    "php.validate.executablePath": "/path/to/php",
    "php.intelephense.environment.php7": "/path/to/php",
    ```

## 4. **CONFIGURAR O PATH DO PHP:**
  - Certifique-se de que o caminho para o executável do PHP esteja configurado corretamente nas configurações do sistema ou no seu arquivo de perfil de shell. Isso permite que o VS Code execute comandos PHP corretamente.

## 5. **CONFIGURAR A DEPURAÇÃO:**
  - Para configurar a depuração PHP, adicione uma configuração de depuração ao seu arquivo `launch.json`. Selecione "Run" na barra lateral, clique na engrenagem (Configurações), escolha PHP e selecione a configuração apropriada.

    Exemplo de `launch.json`:

    ```json
    {
      "version": "0.2.0",
      "configurations": [
        {
          "name": "Listen for XDebug",
          "type": "php",
          "request": "launch",
          "port": 9000
        }
      ]
    }
    ```

## 6. **HABILITAR LINTING:**
  - Se você deseja habilitar a verificação de linting, pode usar extensões como `phpcs` ou `phpstan` para fornecer feedback sobre padrões de codificação e erros no seu código PHP.

Essas são apenas algumas configurações e extensões iniciais para configurar o VS Code para o desenvolvimento PHP. Dependendo das suas necessidades específicas, você pode explorar outras extensões e ajustar configurações adicionais para melhorar sua experiência de desenvolvimento.