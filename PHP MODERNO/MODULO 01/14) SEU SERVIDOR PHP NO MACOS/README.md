# SEU SERVIDOR PHP NO MACOS
Assim como nos sistemas Linux, configurar um ambiente de servidor PHP no macOS envolve a instalação do Apache e do PHP. O macOS já vem com o Apache pré-instalado, mas você pode precisar configurar o PHP e fazer algumas ajustes. Aqui está um guia básico:

1. **Verificar se o Apache está Ativo:**
   - O Apache geralmente está ativado por padrão no macOS. Você pode verificar se o Apache está em execução usando o seguinte comando no Terminal:

     ```bash
     sudo apachectl status
     ```

   - Se o Apache não estiver em execução, você pode iniciá-lo com:

     ```bash
     sudo apachectl start
     ```

2. **Configurar o PHP:**
   - O macOS inclui o PHP, mas você pode precisar configurar o Apache para reconhecê-lo. Edite o arquivo de configuração do Apache com um editor de texto. Por exemplo:

     ```bash
     sudo nano /etc/apache2/httpd.conf
     ```

   - Certifique-se de que a seguinte linha esteja descomentada removendo o caractere `#` do início da linha:

     ```apache
     LoadModule php7_module libexec/apache2/libphp7.so
     ```

   - Salve e saia do editor.

3. **Reiniciar o Apache:**
   - Após fazer alterações na configuração do Apache, você precisa reiniciá-lo para aplicar as alterações:

     ```bash
     sudo apachectl restart
     ```

4. **Testar o PHP:**
   - Crie um arquivo PHP simples, por exemplo, `index.php`, no diretório padrão do Apache (geralmente em `/Library/WebServer/Documents/`):

     ```php
     <?php
     phpinfo();
     ```

   - Abra o navegador e acesse `http://localhost/index.php`. Você deverá ver as informações do PHP.

Este é um guia básico para configurar um servidor PHP no macOS usando o Apache pré-instalado. Dependendo das suas necessidades específicas, você também pode considerar a instalação de uma solução de desenvolvimento local como o MAMP (Mac, Apache, MySQL, PHP), que fornece um ambiente de servidor web mais fácil de configurar e gerenciar.