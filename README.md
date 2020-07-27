<h2>Projeto criado para o processo seletivo da empresa Arco Informática.</h2>
<p>Descrição: Site feito a partir do site http://pedrabranca.arcoinformatica.com.br/ , onde o site original foi completamente refeito do zero, aplicando algumas alterações que deixaram o site melhor, sendo elas:</p>
<ul>
    <li>Correção de partes do site com problemas de responsividade;</li>
    <li>Correção do menu de links superior;</li>
    <li>Criação de uma área de administrador, aonde o admin pode vizualizar todos os formulários enviados para o site e gerenciar as notícias do site;</li>
    <li>Sistema de resposta automatica via email para o usuario que enviar um formulário;</li>
    <li>Criação da página de noticias, as quais o administrador poderá gerenciá-las pela área de administrador</li>
</ul>
<p></p>
<h3>Para Iniciar o projeto:</h3>
<p>Clone o projeto na pasta apropriada para rodá-la no seu servidor local. Em seguida configure o banco de dados como quiser no arquivo .ENV</p>
<p>Abra o terminal na pasta do projeto, e execute os seguintes comandos na ordem a seguir:</p>
<ul>
    <li>php artisan migrate //Configura o banco de dados</li>
    <li>php artisan db:seed //Popula o banco de dados</li>
    <li>php artisan serve //Abre o projeto na porta 8000</li>
</ul>
<p>Pronto! Agora é só abrir o navegador e usar a url localhost:8000</p>
<p>
    Para acessar a área de administrador, basta usar a url localhost:8000/admin e fazer o login com o usuario 
    <i>admin</i> e a senha <i>AdminAccess</i> .
</p>
<br><br>
<p>Autor: Maxwell Ferreira</p>
<p>Desenvolvido em: 27/07/2020</p>
