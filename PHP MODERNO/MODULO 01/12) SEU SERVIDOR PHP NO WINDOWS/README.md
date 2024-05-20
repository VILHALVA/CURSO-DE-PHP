# SEU SERVIDOR PHP NO WINDOWS
Vou orientá-lo sobre como configurar um ambiente de servidor PHP no Windows usando ferramentas como XAMPP. Vamos seguir algumas etapas básicas:

1. **Instalação do XAMPP:**
   - Baixe e instale o XAMPP, que é um pacote que inclui o Apache (servidor web), MySQL (banco de dados), PHP e Perl. Você pode obter o XAMPP no [site oficial](https://www.apachefriends.org/index.html).

2. **Instalação do XAMPP:**
   - Execute o instalador do XAMPP e siga as instruções na tela. Durante a instalação, você pode escolher quais componentes instalar. Certifique-se de incluir o Apache e o PHP.

3. **Configuração do Apache e PHP:**
   - Após a instalação, abra o painel de controle do XAMPP. Inicie os serviços do Apache clicando no botão "Start" ao lado de "Apache". Isso iniciará o servidor web Apache.

4. **Testando o Servidor:**
   - Abra o seu navegador e digite `http://localhost` na barra de endereços. Se o Apache estiver configurado corretamente, você verá a página de boas-vindas do XAMPP.

5. **Diretório de Documentos (htdocs):**
   - O diretório principal para seus arquivos PHP será o diretório `htdocs`. Este diretório está localizado dentro do diretório de instalação do XAMPP. Coloque seus arquivos PHP dentro dessa pasta para que o Apache possa servir esses arquivos.

6. **Testando PHP:**
   - Crie um arquivo PHP simples, por exemplo, `index.php`, dentro do diretório `htdocs` com o seguinte conteúdo:

     ```php
     <?php
     phpinfo();
     ?>
     ```

   - Acesse `http://localhost/index.php` no seu navegador. Se tudo estiver configurado corretamente, você verá as informações do PHP.

Agora, você configurou um ambiente básico de servidor PHP no Windows usando o XAMPP. Este ambiente é adequado para desenvolvimento local e testes. Lembre-se de que, para ambientes de produção, é recomendável usar uma solução de hospedagem web mais robusta.