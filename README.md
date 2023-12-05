
## Pré Requisitos

``` Ter suporte a linguagem PHP em sua maquina ```

``` Ter um editor de código (Ex.: Visual Studio Code) ```

``` Ter um sistema de hospedagem local, com suporte a banco de dados (Ex.: Xampp ) ```

``` Ter instalado em sua maquina o Gerenciador de dependências Composer ```

``` Ter instalado em sua maquina o framework Laravel ```


## Preparando ambiente

-- Abra o terminal, e na pasta do projeto, execute o código: ``` composer install ```

-- Ligue o seu servidor local apache e o servidor de banco de dados

-- Acesse a sua ferramenta de banco de dados, e crie um banco de dados com um nome que desejar (Ex: viagens);

-- Agora, vá a raiz do código, copie um arquivo chamado  ``` .env.example ```  e cole-o nesse mesmo local.

-- Encontre esse trecho do código ``` DB_DATABASE ```  e troque o nome do banco, pelo nome do banco de dados que você acabou de criar. 

-- Vá ao terminal e digite este código para que as tabelas do banco sejam construidas altomaticamente:  ``` php artisan migrate ``` .  
As seguintes tabelas devem aparecer no banco de dados.

-- Rode esse código para ser inserido nas tabelas alguns valores já pré-escritos de forma automática:  ``` php artisan db:seed ``` . 

-- Agora, execute esse código no terminal, para geração de uma chave criptografada exigida pelo artisan: ``` php artisan key:generate ```

-- Finalmente, execute o código no terminal, para visualização do sistema:  ``` php artisan serve ``` . 
