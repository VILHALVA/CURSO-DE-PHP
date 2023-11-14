# COMO CONFIGURAR O PHP.INI
O `php.ini` é o arquivo de configuração principal do PHP, onde você pode definir várias opções e configurações do servidor PHP. Aqui estão os passos básicos para configurar o `php.ini`:

## 1. Localize o Arquivo `php.ini`:
- O arquivo `php.ini` geralmente está localizado no diretório de configuração do PHP no seu servidor. A localização específica pode variar dependendo do sistema operacional e da instalação do PHP.

- No Linux, o arquivo `php.ini` geralmente está em `/etc/php/{versão}/apache2/php.ini` para instalações do Apache.

- No Windows, pode estar em `C:\xampp\php\php.ini` para instalações do XAMPP, ou `C:\wamp\bin\php\php{versão}\php.ini` para instalações do WampServer.

## 2. Faça um Backup do Arquivo:
- Antes de fazer alterações, é sempre uma boa prática fazer backup do arquivo `php.ini` para que você possa restaurá-lo se algo der errado.

## 3. Edite o `php.ini`:
- Use um editor de texto para abrir o arquivo `php.ini`. Você pode usar editores de texto como Notepad (no Windows), Nano (no Linux) ou qualquer editor de sua escolha.

## 4. Faça as Configurações Necessárias:
- Dentro do arquivo `php.ini`, você encontrará várias configurações. Algumas das configurações comuns incluem:

    - `date.timezone`: Defina o fuso horário apropriado para o seu local.
  
    - `memory_limit`: Configure o limite de memória disponível para scripts PHP.

    - `upload_max_filesize` e `post_max_size`: Defina os limites de tamanho de upload para arquivos.

    - `max_execution_time`: Configure o tempo máximo de execução de scripts PHP.

- Para fazer uma alteração, encontre a linha correspondente à configuração desejada, remova o ponto e vírgula no início da linha (que comenta a linha) e ajuste o valor conforme necessário.

## 5. Salve as Alterações:
- Depois de fazer as alterações, salve o arquivo `php.ini`.

## 6. Reinicie o Servidor Web:
- As alterações no `php.ini` geralmente requerem a reinicialização do servidor web para que tenham efeito. Reinicie o Apache, Nginx ou o servidor web que você estiver usando.

Lembre-se de que algumas alterações no `php.ini` podem exigir privilégios administrativos. Certifique-se de ter as permissões necessárias para editar e salvar o arquivo `php.ini`.