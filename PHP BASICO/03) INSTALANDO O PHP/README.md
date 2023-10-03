# INSTALANDO FERRAMENTAS
## MODO TRADICIONAL:
Aqui estão os passos para instalar o PHP, o Visual Studio Code e o XAMPP no seu sistema:

1. **Instalando o PHP**:

   O PHP pode ser instalado de diferentes maneiras, dependendo do sistema operacional que você está usando. Abaixo estão instruções gerais para sistemas Windows, macOS e Linux.

   **Windows**:

   - Você pode instalar o PHP facilmente usando o XAMPP (veja o próximo passo). Se preferir instalar apenas o PHP, siga estas etapas:
   
     - Baixe o PHP para Windows a partir do site oficial: [PHP para Windows](https://windows.php.net/download/).
     - Escolha a versão que melhor atenda às suas necessidades (recomenda-se a versão Thread Safe).
     - Descompacte o arquivo ZIP baixado e siga as instruções do arquivo "readme" para configurar o PHP.

   **macOS**:

   - O PHP já está instalado por padrão no macOS. Você pode verificar a versão do PHP no Terminal com o comando `php -v`.

   **Linux**:

   - No Linux, você pode instalar o PHP usando o gerenciador de pacotes específico do seu sistema. Por exemplo, no Ubuntu, você pode usar o seguinte comando:
   
     ```
     sudo apt-get install php
     ```

2. **Instalando o Visual Studio Code**:

   O Visual Studio Code é uma IDE popular para desenvolvimento de software e é compatível com várias linguagens, incluindo o PHP.

   - Baixe o Visual Studio Code do site oficial: [Visual Studio Code](https://code.visualstudio.com/Download).
   - Escolha o instalador apropriado para o seu sistema operacional e siga as instruções de instalação.

3. **Instalando o XAMPP**:

   O XAMPP é um pacote que inclui o Apache (um servidor web), MySQL (um sistema de gerenciamento de banco de dados) e PHP. É útil para configurar um ambiente de desenvolvimento local.

   - Baixe o XAMPP do site oficial: [XAMPP](https://www.apachefriends.org/index.html).
   - Escolha a versão adequada para o seu sistema operacional e siga as instruções de instalação.
   - Durante a instalação, você poderá selecionar os componentes a serem instalados, incluindo o PHP.

4. **Testando a Instalação**:

   Após a instalação, você pode verificar se tudo está funcionando corretamente:

   - Inicie o XAMPP e inicie os serviços Apache e MySQL.
   - Crie um arquivo PHP em um diretório web (por exemplo, em `C:\xampp\htdocs` no Windows ou `/var/www/html` no Linux).
   - Abra o Visual Studio Code, abra a pasta onde você criou o arquivo PHP e comece a escrever código PHP.
   - Abra um navegador da web e acesse `http://localhost/seuarquivo.php`. Certifique-se de substituir `seuarquivo.php` pelo nome do seu arquivo PHP.

Agora você deve ter o PHP, o Visual Studio Code e o XAMPP instalados e pronto para começar a desenvolver aplicativos web em PHP no seu ambiente local. Certifique-se de ler a documentação específica de cada ferramenta para aprender mais sobre suas funcionalidades e configurações.

## 😉MODO DEPURADOR:
### USANDO O XAMPP COM OUTRA IDE:
Escreva seu código usando o NetBeans (Ou qualquer outra IDE), após isso, você precisa:
* ✅ Abrir o XAMPP e dá start em "APACHE".
* ✅ Salve o seu arquivo PHP (e HTML/CSS) em: "C:\xampp\htdocs\NOVA PASTA". Em "NOVA PASTA" coloque o nome da pasta que quizer.
* ✅ Abra o seu navegador e digite: "localhost/NOVA PASTA". No lugar de "NOVA PASTA" coloque o nome da pasta que você criou.
* 😎Pronto. É muito simples não é? É só usar e ser feliz.

### USANDO APENAS O PHP STORM:
* ✅Sim; Essa IDE funciona também como servidor. Nesse caso você não precisa instalar o XAMPP, apenas o PhpStorm.
* ✅Para configurar basta apenas tentar executar o código PHP clicando em algum navegar da IDE. Ele irá dá o erro 502. Ao voltar para o PhpStorm, ele irá sugerir para você configurar o "PHP EXECUTAVEL". Clique no link do settings e coloque o diretorio que o arquivo "php.exe" está localizado.
* ✅Caso você ainda não tenha o arquivo "php.exe" você pode baixar [CLICANDO AQUI](https://www.exefiles.com/pt-br/exe/php-exe/)
* 😎Pronto. É muito simples não é? É só usar e ser feliz.
