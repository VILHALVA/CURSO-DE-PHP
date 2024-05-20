# SEU SERVIDOR PHP NO LINUX
Vou orientá-lo sobre como configurar um ambiente de servidor PHP em um sistema Linux.

Para configurar um servidor PHP em um ambiente Linux, você pode seguir um procedimento semelhante ao do XAMPP no Windows, mas usando as ferramentas disponíveis para sistemas Linux. Aqui está um guia básico usando Apache e PHP:

1. **Instalação do Apache:**
   - No Ubuntu ou Debian, você pode instalar o Apache usando o seguinte comando:

     ```bash
     sudo apt-get update
     sudo apt-get install apache2
     ```

   - No CentOS ou RHEL, você pode usar o seguinte comando:

     ```bash
     sudo yum install httpd
     ```

   - Certifique-se de iniciar o Apache após a instalação:

     ```bash
     sudo systemctl start apache2   # Para Ubuntu ou Debian
     sudo systemctl start httpd     # Para CentOS ou RHEL
     ```

2. **Instalação do PHP:**
   - Instale o PHP e o módulo do Apache para o PHP:

     ```bash
     sudo apt-get install php libapache2-mod-php   # Para Ubuntu ou Debian
     sudo yum install php php-mysql               # Para CentOS ou RHEL
     ```

   - Reinicie o Apache para aplicar as alterações:

     ```bash
     sudo systemctl restart apache2   # Para Ubuntu ou Debian
     sudo systemctl restart httpd     # Para CentOS ou RHEL
     ```

3. **Testando o PHP:**
   - Crie um arquivo PHP simples, por exemplo, `index.php`, no diretório padrão do Apache (geralmente em `/var/www/html/`):

     ```php
     <?php
     phpinfo();
     ```

   - Abra o navegador e acesse `http://localhost/index.php`. Você deverá ver as informações do PHP.

Este é um exemplo básico e pode variar dependendo da distribuição Linux específica que você está usando. Certifique-se de consultar a documentação específica do seu sistema operacional para obter instruções detalhadas.

Além disso, para ambientes de desenvolvimento mais complexos, considerar o uso de ferramentas como o Docker pode simplificar a configuração e o gerenciamento do ambiente de desenvolvimento.