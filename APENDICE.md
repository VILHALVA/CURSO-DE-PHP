# APÊNDICE
## COMO SUBIR UM SERVIDOR PHP USANDO O `php.exe`?
Você pode rodar um servidor PHP embutido diretamente através do próprio **`php.exe`**, sem a necessidade de configurar um servidor completo como Apache ou Nginx. O PHP tem um servidor de desenvolvimento embutido que é muito útil para testar e desenvolver aplicações localmente.

1. **Abra o terminal ou prompt de comando** (cmd, PowerShell, ou outro terminal de sua preferência).
   
2. **Navegue até o diretório onde o arquivo PHP está localizado**, usando o comando `cd`. Por exemplo:

   ```bash
   cd C:\caminho\para\meus\arquivos
   ```

3. **Suba o servidor embutido** com o seguinte comando:

   ```bash
   php -S localhost:8000
   ```

   Aqui está o que esse comando faz:
   - **`php`**: Chama o executável PHP.
   - **`-S`**: Sinaliza que você quer iniciar o servidor embutido.
   - **`localhost:8000`**: Define o endereço e a porta em que o servidor irá rodar. Você pode substituir `localhost` por seu IP local e a porta `8000` por outra de sua escolha.

4. **Acesse seu navegador** e digite `http://localhost:8000` ou `http://127.0.0.1:8000` na barra de endereços. Agora, os arquivos PHP dentro do diretório em que você está serão executados quando acessados via navegador.

   Por exemplo, se você tiver um arquivo chamado `index.php` no diretório, você poderá acessá-lo via `http://localhost:8000/index.php`.

### EXECUTANDO EM UMA PORTA DIFERENTE:
Se a porta `8000` já estiver em uso ou você quiser usar uma porta diferente, basta alterar o número da porta no comando:

```bash
php -S localhost:8080
```

### ESPECIFICANDO UM ARQUIVO OU PASTA PRINCIPAL:
Por padrão, o PHP usará o arquivo `index.php` se estiver presente no diretório. Mas você pode especificar um arquivo de entrada diferente:

```bash
php -S localhost:8000 -t /caminho/para/o/diretorio/
```

Aqui, o **`-t`** define o diretório raiz do servidor.

### CONFIGURAÇÕES ADICIONAIS:
- Este servidor PHP embutido é ideal para desenvolvimento, mas **não deve ser usado em produção** porque ele não tem as otimizações e segurança de servidores dedicados como Apache ou Nginx.
- Ele roda apenas em uma única thread, o que significa que pode processar apenas uma requisição por vez.

---

## INSTALAÇÃO DO COMPOSER
### WINDOWS:
1. Acesse o site oficial do Composer: [getcomposer.org](https://getcomposer.org/)
2. Baixe o instalador para Windows: Clique em **Download** e escolha o instalador "Composer-Setup.exe".
3. Execute o instalador.
4. Durante a instalação, certifique-se de que a localização do **PHP** já está configurada. Se não estiver, o instalador solicitará a localização do arquivo PHP.exe (normalmente encontrado na pasta de instalação do PHP ou XAMPP).
5. Conclua a instalação e, ao final, verifique se o Composer foi instalado corretamente. Para isso, abra o **Prompt de Comando** e digite o seguinte comando:
   
   ```bash
   composer --version
   ```

Se tudo estiver correto, a versão do Composer será exibida.

### LINUX / MACOS:
1. Abra o terminal.
2. Execute o comando para baixar o instalador do Composer:

   ```bash
   curl -sS https://getcomposer.org/installer | php
   ```

3. Mova o Composer para uma localização global para que ele possa ser usado de qualquer lugar:

   ```bash
   sudo mv composer.phar /usr/local/bin/composer
   ```

4. Verifique se o Composer foi instalado corretamente, digitando:

   ```bash
   composer --version
   ```

Se a versão do Composer aparecer, a instalação foi realizada com sucesso.

## CONFIGURAÇÃO:
1. Após a instalação, você pode criar o arquivo **`composer.json`** no diretório do seu projeto para definir as dependências do projeto.
   
2. Para gerar um arquivo `composer.json` automaticamente, no terminal, execute:

   ```bash
   composer init
   ```

   Siga as instruções fornecidas para configurar o nome do projeto, versão, dependências, etc.

## USO DO COMPOSER:
### ADICIONANDO DEPENDÊNCIAS:
1. Para adicionar uma nova dependência ao projeto, utilize o seguinte comando:

   ```bash
   composer require nome-do-pacote
   ```

   Por exemplo, para adicionar o pacote **guzzlehttp/guzzle**:

   ```bash
   composer require guzzlehttp/guzzle
   ```

### INSTALAÇÃO DE DEPENDÊNCIAS:
1. Para instalar as dependências definidas no arquivo `composer.json`, basta rodar o comando:

   ```bash
   composer install
   ```

   Isso instalará todas as dependências no diretório **vendor**.

### ATUALIZAÇÃO DE DEPENDÊNCIAS:
1. Para atualizar as dependências do projeto para as versões mais recentes, execute:

   ```bash
   composer update
   ```

### AUTOLOAD:
1. O Composer pode gerar automaticamente o autoload para você. Após instalar as dependências, basta incluir o arquivo `autoload.php` no seu código:

   ```php
   require 'vendor/autoload.php';
   ```

Isso incluirá automaticamente todas as classes e bibliotecas necessárias no seu projeto.

## COMANDOS ÚTEIS:
- **Verificar a versão do Composer**:

   ```bash
   composer --version
   ```

- **Instalar dependências do projeto**:

   ```bash
   composer install
   ```

- **Atualizar dependências do projeto**:

   ```bash
   composer update
   ```

- **Adicionar uma nova dependência**:

   ```bash
   composer require nome-do-pacote
   ```

- **Remover uma dependência**:

   ```bash
   composer remove nome-do-pacote
   ```

- **Verificar as dependências e seus detalhes**:

   ```bash
   composer show
   ```

